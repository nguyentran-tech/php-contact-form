<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'contact_form') or die("Connection Failed!" .mysqli_connect_error());
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `users` (`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message')";

        $query = mysqli_query($conn,$sql);
        if($query) {
            $_SESSION['status'] = 'We have successfully received your message!';
            header('location: index.php');
        } else {
            echo "Error Occurred";
        }
    }
}
?>