<?php
include 'connector.php';
$conn=connect();
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$Cid=$_POST["Cid"];
$sql = "SELECT * FROM CarReviews'".$Cid."'";
echo
$result = mysqli_query($conn, $sql);
echo $sql;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo " - Cid: " . $row["Cid"]. "<br> "."Description:". $row["Description"]. "<br>". "<br><br><br><br><br>";
    }
} else {
   echo "0 results";
}
?>