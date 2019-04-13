<?php
    $adminEmail = "info@tehnoStore.ru";
    $adminSubject = "Создан новый заказ";
    $adminMailText = "<p>На сайте TehnoStore был совершен новый заказ.</p>";
    $adminMailText .= " <p>
                            ID продукта: {$_POST['productId']} <br/>
                            Продукт: {$_POST['productTitle']} <br/>
                            Стоимость: {$_POST['productPrice']}
                        </p>";
    $adminMailText .= "<h2>Данные покупателя</h2>
                        <p>Имя и фамилия: {$_POST['name']} <br/>
                            Email: {$_POST['email']} <br/>
                            Телефон: {$_POST['phone']} <br/>
                            Адрес: {$_POST['address']} 
                        </p>";
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    
    mail($adminEmail, $adminSubject, $adminMailText, $headers);

    $userEmail = $_POST['email'];
    $userSubject = "<h2>Ваш заказ успешно получен!<h2>";
    $userMailText = "<p>Спасибо за заказ! Скоро мы свяжемся с вами.<p>";

    mail($userEmail, $userSubject, $userMailText, $headers);

    header("Location: order-success.php");
?>