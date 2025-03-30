<?php
include(__DIR__ . '/config/database_connection.php');

if (isset($_POST['register'])) {

    $form_name = $_POST['f_name'];
    $form_birthDate = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['f_birthDate'])));
    $form_email = $_POST['f_email'];
    $form_occupation = $_POST['f_occupation'];
    $form_phone = $_POST['f_phone'];
    $form_mobilePhone = $_POST['f_mobilePhone'];

    if (isset($_POST['f_isWhatsapp'])) {
        $form_isWhatsapp = isset($_POST['f_isWhatsapp']);
    } else {
        $form_isWhatsapp = 0;
    }

    if (isset($_POST['f_receiveEmail'])) {
        $form_receiveEmail = isset($_POST['f_receiveEmail']);
    } else {
        $form_receiveEmail = 0;
    }

    if (isset($_POST['f_receiveSms'])) {
        $form_receiveSms = isset($_POST['f_receiveSms']);
    } else {
        $form_receiveSms = 0;
    }

    $query = "insert into contact (full_Name, birth_Date, email, occupation, phone, mobile_Phone, mobile_Is_Whatsapp, receive_Email, receive_Sms) values ('$form_name', '$form_birthDate', '$form_email', '$form_occupation', '$form_phone','$form_mobilePhone', $form_isWhatsapp, $form_receiveEmail, $form_receiveSms)";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query failed" . mysqli_error($connection));
    }
}
