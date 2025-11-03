<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
        echo "please fill out all fields";
    } else {
        echo "your request accepted";
    }
} else {
    echo "unauthorized access.";
}
?>
