<div class="block">
	<h3>Ваш профиль</h3>
	<p>
		Добро пожаловать <span class="user_info">{$user->getName()}</span>
	</p>
	<p>Ваш login: <span class="user_info">{$user->getLogin()}</span></p>
	<p>Ваш email: <span class="user_info">{$user->getEmail()}</span></p>
	<p>
		<a href="functions.php?logout=1">Выход</a>
	</p>
</div>