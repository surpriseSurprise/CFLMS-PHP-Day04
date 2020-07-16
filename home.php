<?php
ob_start();
session_start();
require_once 'dbconnect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user' ]) ) {
 header("Location: index.php");
 exit;
}
// select logged-in users details
$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome - <?php echo $userRow['userEmail' ]; ?></title>
<style type="text/css">
       .manageCar {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }

       .name {
           float:right;
       }

       
       .img {
           width: 2vw;
           float: right;
       }
       

   </style>
</head>
<body >
<div>
           Hi <?php echo $userRow['userEmail' ]; ?>
           <a  href="logout.php?logout">Sign Out</a>
</div>
<div>
<img class="img" src="<?php echo $userRow['image' ];?>">
<p class="name">User: <?php echo $userRow['userName' ]; ?></p>
</div>
 
<div class ="manageCar">
   <a href= "create.php"><button type="button" >Add Car</button></a>
   <table  border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th>Image</th>
               <th>Name</th>
               <th>Baujahr</th>
               <th>Available</th>
           </tr>
       </thead>
       <tbody>

            <?php
           $sql = "SELECT * FROM car";
           $result = $conn->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td><img src='" .$row['image']."'</td>
                       <td>" .$row['name']."</td>
                       <td>" .$row['baujahr']."</td>
                       <td>" .$row['available']."</td>
                       <td>
                           <a href='update.php?id=" .$row['car_id']."'><button type='button'>Edit</button></a>
                           <a href='delete.php?id=" .$row['car_id']."'><button type='button'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='4'><center>No Data Available</center></td></tr>";
           }
            ?>

           
       </tbody>
   </table>
</div>
 
</body>
</html>
<?php ob_end_flush(); ?>