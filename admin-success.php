<?php

    require_once('config.php');

    if (!isset($_SESSION['login']) && $_SESSION['login'] != 'on') {
        header('Location: index.php');
    }


    $pageTitle = "Товар добавлен успешно!";
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
                <div class="title-1 text-success">Товар успешно добавлен</div>
                <a href="admin.php" class="btn btn-secondary">Добавить ещё один товар</a>
                <a href="index.php" class="btn btn-secondary">Вернуться на главную</a>
            </div>
        </div>
        <!-- content block -->
    </div>
</div>
<!-- // white-plate -->