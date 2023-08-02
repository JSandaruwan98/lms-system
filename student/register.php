<?php

include "db-conn.php";

//define variables and set to empty values
$name = $email = $password = $resetPassword = "";
$nameErr = $emailErr = $passwordErr = "";

//after pressing submit button
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //checked user name and password
    $name=$_POST['name'];
    $password=$_POST['password'];
    $repeatPassword=$_POST['repeatpassword'];
    $email=$_POST['email'];
    
    if (empty($name) && empty($password) && empty($email) && empty($repeatPassword)) {
		header("Location: register-ui.php?error=User Name,Password or email is required");
    }elseif(empty($name)){
        header("Location: register-ui.php?error=User Name is required");
    }elseif(empty($password)){
        header("Location: register-ui.php?error=User Password is required");
    }elseif(empty($email)){
        header("Location: register-ui.php?error=User email is required");
    }else{
        if($password === $repeatPassword){
            $sql = "INSERT INTO student(uname,password,email) VALUES ('$name','$password','$email')";
            if(mysqli_query($conn,$sql)){
                header("Location: login-ui.php?success=Password not matched");
            }else{
                echo "Error :" .$sql . "<br>" . mysqli_error($conn);
            }
        }else{
            header("Location: register-ui.php?error=Password not matched");
        }
        

    }

    
}


?>