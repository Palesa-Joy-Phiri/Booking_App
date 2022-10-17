<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$cid = $_POST['cid'];
$cod = $_POST['cod'];
$non = $_POST['non'];
$hotel = $_POST['hotel'];


    if (empty($name)) {

            $name_error = "location:booking.php? Name is required";

        }else if (empty($surname)) {

            $surname_error = "location:booking.php? Name is required";

        }else if (empty($email)) {

            $email_error = "location:booking.php? Surname is required";

        }else if (empty($cid)) {

            $cid_error = "location:booking.php? Check in date is required";

        }else if (empty($cod)) {

            $cod_error = "location:booking.php? Check out date is required";

        }else if (empty($non)) {

            $non_error = "location:booking.php? Number of nights are required";

        }else if (empty($hotel)) {

            $hotel_error = "location:booking.php? Hotel selection is required";
        
        }else {
            echo "welcome to Laventure adventures, all input are valid.";
        }

    include('booking.php');

?>