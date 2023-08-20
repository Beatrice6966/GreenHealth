<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" /> -->
   
</head>
<body>


<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $gender = stripslashes($_REQUEST['gender']);
        $age = stripslashes($_REQUEST['age']);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `userss` (username, password, email, gender, age, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$gender', '$age', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                 
                  </div>";
                  readfile("lab.html");
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action=" " method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <h4 class="mb-2 pb-1">Gender </h4>
        <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="option1" checked />
        <label class="form-check-label" for="femaleGender">Female</label>
        <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="option2" />
        <label class="form-check-label" for="maleGender">Male</label>
        <input type="text" class="login-input" name="age" placeholder="Age" required />
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
<?php
    }
?>
 
</body>
</html>
