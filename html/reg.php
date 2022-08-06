<?php
    require('config.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['email'])) {
        // removes backslashes
        $email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
        $email = mysqli_real_escape_string($con, $email);
        $phone    = stripslashes($_REQUEST['phone']);
        $phone    = mysqli_real_escape_string($con, $phone);
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password    = stripslashes($_REQUEST['password']);
        $password   = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `userinfo` (email,phone,username,password)
                     VALUES ('$email', '$phone', '$username', '$password')";
        $result   = mysqli_query($con, $query);

        if ($result == 1) {
            $_SESSION['email'] = $email;
            // Redirect to user dashboard page
            header("Location: Register.php");
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='userregister.php'>registration</a> again.</p>
                  </div>";
        }
        
    } else {
?>
<?php
    }
?>
</body>
</html>