<?php 

require_once 'dbconnect.php';

if ($_POST) {
    $image = $_POST['image'];
    $name = $_POST['name'];
    $baujahr = $_POST[ 'baujahr'];

   $id = $_POST['car_id'];

   $sql = "UPDATE car SET image = '$image', name = '$name', baujahr = '$baujahr' WHERE car_id = {$id}" ;
   if($conn->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $conn->error;
   }

   $conn->close();

}

?>