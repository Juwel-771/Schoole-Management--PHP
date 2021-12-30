
<html>
<head> 
    <link rel="stylesheet" type="text/css" href="result1.css"> 
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>Your Result</title></head>
<body>
  <center>
    <div class="txt">Online Result</div>
    <div class="content">
      <div class="content3">
        <div class="max">Input Panel</div>




<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Scl";
$roll = $_POST["roll"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, roll, class, bangla_first, bangla_sec, english_first, english_sec, math, bngs, physics, chemistry, biology, ict, hmath, GPA FROM result WHERE roll = $roll LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_array($result)) {
        echo "Name           : " . $row['name']."<br>";
        echo "Roll           : " . $row['roll'] ."<br>";
        echo "Class          : " . $row['class'] . "<br>";
        echo "Bangla First   : " . $row['bangla_first'] . "<br>";
        echo "Bangla Second  : " . $row['bangla_sec'] . "<br>";
        echo "English First  : " . $row['english_first'] . "<br>";
        echo "English Second : " . $row['english_sec'] . "<br>";
        echo "Mathematics    : " . $row['math'] . "<br>";
        echo "Bangladesh and Global Studies : " . $row['bngs'] . "<br>";
        echo "Physics        : " . $row['physics'] . "<br>";
        echo "Chemistry      : " . $row['chemistry'] . "<br>";
        echo "Biology        : " . $row['biology'] . "<br>";
        echo "ICT            : " . $row['ict'] . "<br>";
        echo "Higher Mathematics : " . $row['hmath'] . "<br>";
        echo "GPA            : " . $row['GPA'] . "<br>";
    }
} else {
    echo "Result Not Found";
}

$conn->close();


?>



</div>
</div>
</center>

</body>
</html>