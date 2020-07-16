<?php 

require_once 'actions/dbconnect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM car WHERE car_id = {$id}" ;
   $result = $conn->query($sql);

   $data = $result->fetch_assoc();

   $conn->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title >Update Car</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Update Car</legend>

   <form action="actions/a_update.php"  method="post">
   <table cellspacing= "0" cellpadding="0">
        <tr>
            <th>Image</th >

            <td><input  type="text" name="image" value="<?php echo $data['image'];?>"></td>

        </tr>    
        <tr>
            <th>Name</th>
            <td><input  type="text" name= "name" value="<?php echo $data['name'];?>"></td>
        </tr>
        <tr>
            <th>Baujahr</th>
            <td><input type="text"  name="baujahr" placeholder ="Baujahr" value="<?php echo $data['baujahr'];?>"></td>
        </tr>
        <tr>
        <!-- <tr>
            <th>Customer</th>
            <td><input type="text"  name="fk_customer" placeholder ="Customer" /></td>
        </tr>
        <tr> -->
               <input type= "hidden" name= "car_id" value= "<?php echo $data['car_id']?>" />
               <td><button  type= "submit">Save Changes</button ></td>
               <td><a  href= "index.php"><button  type="button" >Back</button ></a ></td >
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php
}
?>