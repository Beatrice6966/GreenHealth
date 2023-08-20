<?php
$conn = mysqli_connect('localhost', 'root', '', 'greenhealth');
if ($conn) {
  // Get the form data
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $minutes = $_POST['minutes'];
  $consultation = $_POST['consultation'];
  $specialist = $_POST['specialist'];
  $file = $_POST['file'];

  // Prepare the SQL statement
  $sql = "INSERT INTO appointments (address, phone, date, time, minutes, consultation, specialist, file) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
  $stmt = mysqli_prepare($conn, $sql);

  // Bind the parameters
  mysqli_stmt_bind_param($stmt, 'ssssssss', $address, $phone, $date, $time, $minutes, $consultation, $specialist, $file);

  // Execute the statement
  mysqli_execute($stmt);

  // Close the statement
  mysqli_stmt_close($stmt);

  // Close the connection
  mysqli_close($conn);
} else {
  echo 'Error connecting to database';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><div class="p-3 mb-2 bg-primary text-white" >We will send the link to your Email soon</div></p>
</body>
</html>