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

        $sql ="SELECT * FROM student WHERE name='$name' AND password ='$password'";
        $result =mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
             // Successful login

            // Generate an authentication token (key)
            $token = generateToken();

            // Save the token in the database for the user
            $userRow = mysqli_fetch_assoc($result);
            $user_id = $userRow['id'];
            saveTokenToDatabase($user_id, $token);

            // Provide the token to the client (could be in a JSON response or redirect with URL parameters)
            // For example, you can use a JSON response like this:
            session_start();
            $_SESSION['token']=$token;
            header("Location: index.php");
            exit();
            
        }else{
            header("Location: login-ui.php?error=Incorect User name or password");
        }

    }

    
}

function generateToken() {
    // Generate a unique token (you can use a library or your own method)
    return bin2hex(random_bytes(32));
}

function saveTokenToDatabase($user_id, $token) {
    include "db-conn.php";
    // Save the token to the database along with user ID and an expiration timestamp (e.g., current timestamp + token validity duration)
    // Example query:
    $validity_duration = 36; // 1 hour (adjust this according to your requirements)
    $expiration_timestamp = time() + $validity_duration;
    $query = "INSERT INTO tokens (user_id, token, expiration_timestamp) VALUES ('$user_id', '$token', '$expiration_timestamp')";
    mysqli_query($conn, $query);
}

?>
