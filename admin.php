<?php 
	require_once('config.php');

	if (!isset($_SESSION['login']) && $_SESSION['login'] != 'on') {
		header('Location: index.php');
	}
	

	$pageTitle = "Админ панель";
	include("./templates/_head.php");
?>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">

			<?php include("./templates/_header.php"); ?>

			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">
				<div class="col-12">
					<div class="title-1">Добавить товар</div>

					<form action="add-new.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<input name="title" type="text" class="form-control" placeholder="Название">
						</div>
						<div class="form-group">
							<select name="category" class="form-control">
								<option value="Телефоны">Телефоны</option>
								<option value="Планшеты">Планшеты</option>
								<option value="Ноутбуки">Ноутбуки</option>
								<option value="Компьютеры">Компьютеры</option>
							</select>
						</div>
						<div class="form-group">
							<input name="price" type="text" class="form-control" id="exampleInputEmail1" placeholder="Цена">
						</div>

						<div class="form-check form-check-inline">
							<input name="sale" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1">
							<label class="form-check-label" for="inlineCheckbox1">распродажа</label>
						</div>
						<div class="form-check form-check-inline">
							<input name="new" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1">
							<label class="form-check-label" for="inlineCheckbox2">новинка</label>
						</div>

						<div class="form-group pt-3">
							<label for="exampleFormControlFile1">Фото:</label>
							<input name="img" type="file" class="form-control-file" id="exampleFormControlFile1">
						</div>

						<div class="form-group">
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Описание:</label>
								<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Добавить</button>
						</div>
					</form>

				</div>

			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

<?php include("./templates/_footer.php"); ?>
