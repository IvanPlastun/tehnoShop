<?php
	require_once('config.php');
	$pageTitle = "Логин";
	include("./templates/_head.php");
?>

	<!-- white-plate -->
	<div class="white-plate white-plate--login">
		<div class="container-fluid">

			<!-- header -->
			<div class="header text-center">
				<a href="index.php" class="site-logo">
					<span>техно</span>Store
				</a>
			</div>
			<!-- // header -->

			<div class="line-between"></div>
			<form method="POST" action="check-login.php">
				<div class="form-group">
					<input name="password" type="password" class="form-control" placeholder="Пароль">
				</div>
				<div class="form-group">
					<button name="enter" type="submit" class="btn btn-primary btn-block">Войти</button>
				</div>
			</form>
			<p class="text-center"><a href="index.php" class="text-secondary">Вернуться назад</a></p>
		</div>
	</div>
	<!-- // white-plate -->

<?php include("./templates/_footer.php"); ?>
