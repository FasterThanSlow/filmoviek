<?php

class DataBaseController {
	
	private $dbHost;
	private $dbUser;
	private $dbPassword;
	private $dbName;
	private $database_link;

	function __construct($dbHost = "localhost",$dbUser = "root" ,$dbPassword = "root",$dbName = "filmoviek"){
		$this->dbHost = $dbHost;
		$this->dbUser = $dbUser;
		$this->dbPassword = $dbPassword;
		$this->dbName = $dbName;
		$this->database_link = new mysqli($dbHost,$dbUser,$dbPassword,$dbName);
		$this->database_link->query("SET NAMES 'utf8'");
	}
	
	public function select($table_name, $fields, $where = NULL, $order_by = NULL, $desc = FALSE, $group_by = NULL, $having = NULL){
		$query = "";
		if(!empty($table_name)){
			$query .= "SELECT ";
			if(is_array($fields)){
				for($i = 0; $i < count($fields) - 1; $i++){
					$query .= "`".addslashes($fields[$i])."`,";
				}
				$query .= "`".$fields[count($fields)-1]."`";
			}
			else{
				$query .= $fields;
			}
			$query .= " FROM `".$table_name."`";
			if(isset($where)){
				$query .= " WHERE ".$where;	
				if(isset($group_by)){
					$query .= " GROUP BY ".$group_by;
					if(isset($having)){
						$query .= " HAVING ".$having;
					}
				}
			}
			if(isset($order_by)){
				$query .= " ORDER BY ".$order_by;
				if($desc){
					$query .= " DESC";
				}
			}	
			if($result = @mysqli_query($this->database_link,$query)){
				return $result;
			}
			else{
				return FALSE;
			}
		}
		else{
			return FALSE;
		}
	}
	
	public function insert($table_name,$column_names,$values){
		$query = "";
		if(!empty($table_name) && !empty($values) && !empty($column_names)){
			$query .= "INSERT INTO `".$table_name."`";
			$query .= " (";	
			if(is_array($column_names)){
				for($i = 0; $i < count($column_names) - 1; $i++){
					$query .= "`".addslashes($column_names[$i])."`,";
				}
				$query .="`".$column_names[count($column_names)-1]."`)";
			}
			else{
				$query .= "`".addslashes($column_names)."`)";
			}			
			$query .= " VALUES (";
			if(is_array($values)){
				for($i = 0; $i < count($values) - 1; $i++){
					$query .= "'".addslashes($values[$i])."',";
				}
				$query .= "'".addslashes($values[count($values)-1])."')";
			}
			else{
				$query .= "'".addslashes($values)."'";
			}
			if($result = @mysqli_query($this->database_link,$query)){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
		else{
			return FALSE;
		}
	}
	
	public function delete_record($table_name,$where){
		if(!empty($table_name) && !empty($where)){
			$query = "DELETE FROM `".$table_name."` WHERE ".$where;
			if(@mysqli_query($this->database_link, $query)){
				return true;
			}
			else{
				return false;
			}
			
		}
		else{
			return false;
		}
	}	
	
	
	function __destruct(){
		mysqli_close($this->database_link);
	}
	
}
