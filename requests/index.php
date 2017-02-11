<?php
// get default values
$message = "";
$firstname = filter_input(INPUT_POST,'first_name');
$lastname = filter_input(INPUT_POST,'last_name');
$phone = $_POST['phone'];
$day = $_POST['day'];
$time = $_POST['time'];

// if the button was clicked
if (isset($_POST['GOBUTTON'])){
    if (empty($firstname) || empty($lastname) || empty($phone) || empty($day) || empty($time)){
        $message = "All of the fields are required.";
        include('index.php');
    } else {
        include('confirm.php');
        exit();
    }
} else {
    include 'index.php';
}
?>