<?php
session_start();
?>

<?php require "config.php";?>

<?php

// function to filter inputs
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Registration
    if ($_GET['action'] == 'register') {
    
        $firstName = validate($_POST['firstname']);
        $lastName = validate($_POST['lastname']);
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
        $confirmPassword = validate($_POST['confirm-password']);

        if (empty($firstName)) {
            header("Location: registration.php?error=First name is required");
            exit();
        }
        else if(empty($lastName)){
            header("Location: registration.php?error=Last name is required");
            exit();
        }
        else if (!preg_match("/^[a-zA-Z]*$/", $firstName) || !preg_match("/^[a-zA-Z]*$/", $lastName)) {
            header("Location: registration.php?error=Name needs to be valid (only letters!)");
            exit();
        } 
        else if(empty($email)){
            header("Location: registration.php?error=Email is required");
            exit();
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL) ) {
            header("Location: registration.php?error=Email needs to be valid");
            exit();
        } 
        else if(empty($password)){
            header("Location: registration.php?error=Password is required");
            exit();
        }
        else if(empty($confirmPassword)){
            header("Location: registration.php?error=Confirm password is required");
            exit();
        }
        else if ($password != $confirmPassword) {
            header("Location: registration.php?error=Password needs to match");
            exit();
        } 
        else{
            $signUp= $conn->query("SELECT * FROM users WHERE email='$email'");
            $signUp->execute();
            $data = $signUp->fetch(PDO::FETCH_ASSOC); 
            if($signUp->rowCount() > 0) {
                header("Location: registration.php?error=User already exists");
                exit();
            } else {

                $insert = $conn->prepare("INSERT INTO users (firstname, lastname, email, mypassword) VALUES (:firstname, :lastname, :email, :mypassword)");

                $insert->execute([
                    ':firstname' => $firstName,
                    ':lastname' => $lastName,
                    ':email' => $email,
                    ':mypassword' => password_hash($password, PASSWORD_DEFAULT),
                    
                ]); 
                header("location: login.php");
                exit();
            }
        }
        
    }
    // Login
    if ($_GET['action'] == 'signIn') {
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);

        if(empty($email)){
            header("Location: login.php?error=Email is required");
            exit();
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL) ) {
            header("Location: login.php?error=Email needs to be valid");
            exit();
        } 
        else if(empty($password)){
            header("Location: login.php?error=Password is required");
            exit();
        }else {
            $login= $conn->query("SELECT * FROM users WHERE email='$email'");
            $login->execute();
            $data = $login->fetch(PDO::FETCH_ASSOC); 
            
            if($login->rowCount() > 0) {
                if(password_verify($password, $data['mypassword'])) {
                    
                    $_SESSION["firstname"] = $data['firstname'];
                    $_SESSION['lastname'] = $data['lastname'];
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['user_id'] = $data['id'];
                    header("location: profile.php");
                } else {
                    header("Location: login.php?error=Email or Password is not correct");
                }
            } else {
                header("Location: login.php?error=This user does not exist");
            }
        }
    }

}


?>