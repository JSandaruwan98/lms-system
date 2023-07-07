<?php
//connected to the database
include "db-conn.php";

//define variables and set to empty values
$name = $password = "";
$nameErr = $passwordErr = "";

//after pressing submit button
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //checked user name and password
    $name=$_POST['name'];
    $password=$_POST['password'];
    
    if (empty($name) && empty($password)) {
		//header("Location: login-ui.php?error=User Name and Password is required");
    }elseif(empty($name)){
        //header("Location: login-ui.php?error=User Name is required");
    }elseif(empty($password)){
        header("Location: login-ui.php?error=User Password is required");
    }else{

        $sql ="SELECT * FROM student WHERE uname='$name' AND password ='$password'";
        $result =mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
            $row =mysqli_fetch_assoc($result);
            if($row['uname'] === $name && $row['password'] === $password){
                echo 'home page';
            }else{
                header("Location: login-ui.php?error=Incorect User name or password");
            }
        }else{
            header("Location: login-ui.php?error=Incorect User name or password");
        }

    }

    
}

?>