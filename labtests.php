
<?php

// Connect to the database
$conn = mysqli_connect("localhost", "root", " ", "greenhealth");

// Check the connection
if ($conn === false) {
  die("Error connecting to the database: " . mysqli_connect_error());
}

// Get the data from the form
$address = $_POST["address"];
$date = $_POST["date"];
$time = $_POST["time"];
$minutes = $_POST["minutes"];
$tests = implode(",", $_POST["tests"]);

// Insert the data into the database
$sql = "INSERT INTO labtests (address, date, time, minutes, tests) VALUES ('$address', '$date', '$time', $minutes, '$tests')";

$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result === false) {
  die("Error inserting data into the database: " . mysqli_error($conn));
}

// Close the connection to the database
mysqli_close($conn);

if (isset($_POST["tests"])){
    $test = $_POST["tests"];
    $c= count($test);
    $price=0.0;

    for ($i=0; $i<$c; $i++){
        if($test[$i]==1){
            $price= $price+4000;
            echo "You have selected malaria<br>";
        }
    
    if($test[$i]==2){
        $price=$price+5000;
        echo "You have selected UTI<br>";
    }
    if($test[$i]==3){
        $price=$price+5000;
        echo "You have selected HIV<br>";
    }
    if($test[$i]==4){
        $price=$price+5000;
        echo "You have selected STDs<br>";
    }
    if($test[$i]==5){
        $price=$price+5000;
        echo "You have selected Blood Sugar<br>";
    }
    if($test[$i]==6){
        $price=$price+3000;
        echo "You have selected Urinary Pregnancy Test<br>";
    }
    if($test[$i]==7){
        $price=$price+5000;
        echo "You have selected Blood Group<br>";
    }
    if($test[$i]==8){
        $price=$price+5000;
        echo "You have selected Stool Analysis<br>";
    }
    if($test[$i]==9){
        $price=$price+10000;
        echo "You have selected Typhoid<br>";
    }
    if($test[$i]==10){
        $price=$price+4000;
        echo "You have selected Blood level<br>";
    }
}
$total=$price+25000;

    echo $total;


}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
<div class="p-3 mb-2 bg-primary text-white"><center>Pay the Amount using the number<b> 0744721367</b></center></div>
<div class="p-3 mb-2 bg-primary text-white"><center>Name<b> Beatrice Mwaisumbe</b></center></div>
<div class="p-3 mb-2 bg-primary text-white"><center>Send the Transaction Message through the Number<b> 0744721367</b></center></div>
</body>

</html>

