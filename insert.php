<?php
include(__DIR__ . '/config/database_connection.php');

if (isset($_POST['register'])) {

    $form_name = $_POST['f_name'];
    $form_birthDate = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['f_birthDate'])));
    $form_email = $_POST['f_email'];
    $form_occupation = $_POST['f_occupation'];
    $form_phone = $_POST['f_phone'];
    $form_mobilePhone = $_POST['f_mobilePhone'];
    $form_isWhatsapp = isset($_POST['f_isWhatsapp']) ? 1 : 0;
    $form_receiveEmail = isset($_POST['f_receiveEmail']) ? 1 : 0;
    $form_receiveSms = isset($_POST['f_receiveSms']) ? 1 : 0;

    $query = "insert into contact (full_Name, birth_Date, email, occupation, phone, mobile_Phone, mobile_Is_Whatsapp, receive_Email, receive_Sms) values ('$form_name', '$form_birthDate', '$form_email', '$form_occupation', '$form_phone','$form_mobilePhone', $form_isWhatsapp, $form_receiveEmail, $form_receiveSms)";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query failed" . mysqli_error($connection));
    }
}
