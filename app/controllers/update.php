<?php
include(__DIR__ . '/../../config/database_connection.php'); ?>

<?php

if (isset($_POST['update'])) {

    if (isset($_GET['id_new'])) {
        $idnew = $_GET['id_new'];
    }

    $update_name = $_POST['u_name'];
    $update_birthDate = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['u_birthDate'])));
    $update_email = $_POST['u_email'];
    $update_occupation = $_POST['u_occupation'];
    $update_phone = $_POST['u_phone'];
    $update_mobilePhone = $_POST['u_mobilePhone'];
    $update_isWhatsapp = isset($_POST['u_IsWhatsapp']) ? 1 : 0;
    $update_receiveEmail = isset($_POST['u_receiveEmail']) ? 1 : 0;
    $update_receiveSms = isset($_POST['u_receiveSms']) ? 1 : 0;

    $query = "UPDATE contact SET 
    full_Name = '$update_name',
    birth_Date = '$update_birthDate',
    email = '$update_email',
    occupation = '$update_occupation',
    phone = '$update_phone',
    mobile_Phone = '$update_mobilePhone',
    mobile_Is_Whatsapp = '$update_isWhatsapp',
    receive_Email = '$update_receiveEmail',
    receive_Sms = '$update_receiveSms' 
    WHERE id = '$idnew'";

    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query failed" . mysqli_error($connection));
    } else {
        header("Location: /TesteCrudAlphacode/public/index.php");
    }
}

?>