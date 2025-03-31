<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", ""); //Altere de acordo com seu ambiente.
define("DATABASE", "contacts_db");


$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if ($connection === false) {
    die("Connection Failed");
}
