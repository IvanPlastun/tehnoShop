<?php
    require_once('config.php');
    if (!isset($_SESSION['login']) && $_SESSION['login'] != 'on') {
		header('Location: index.php');
    }

    if(!empty($_POST)) {
    
        if(!$_POST['sale']) {
            $_POST['sale'] = NULL;
        }

        if(!$_POST['new']) {
            $_POST['new'] = NULL;
        }

        if (isset($_FILES['img']) && $_FILES['img']['tmp_name'] != '') {
            move_uploaded_file($_FILES['img']['tmp_name'], './img/products/' . $_FILES['img']['name']);
            $fileName = $_FILES['img']['name'];
        } else {
            $fileName = 'nophoto.jpg';
        }

        $sql = "INSERT INTO products (title, price, description, img, category, sale, new) 
        VALUES (:title, :price, :description, :img, :category, :sale, :new)";

        $stmt = $db->prepare($sql);
        $stmt->bindValue(':title', htmlentities($_POST['title']));
        $stmt->bindValue(':price', htmlentities($_POST['price']));
        $stmt->bindValue(':description', $_POST['description']);
        $stmt->bindValue(':img', htmlentities($fileName));
        $stmt->bindValue(':category', htmlentities($_POST['category']));
        $stmt->bindValue(':sale', htmlentities($_POST['sale']));
        $stmt->bindValue(':new', htmlentities($_POST['new']));
        $stmt->execute();
        
        header('Location: admin-success.php');
    }

?>