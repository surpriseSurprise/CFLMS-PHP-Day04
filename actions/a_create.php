<?php 

require_once 'dbconnect.php';

if ($_POST) {
   $image = $_POST['image'];
   $name = $_POST['name'];
   $baujahr = $_POST[ 'baujahr'];

   $sql = "INSERT INTO car (image, name, baujahr) VALUES ('$image', '$name', '$baujahr')";
    if($conn->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $conn->connect_error;
   }

   $conn->close();
}

?>