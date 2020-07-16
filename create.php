<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP CRUD  |  Add Car</title>

<style type= "text/css">
fieldset {
        margin: auto;
         margin-top: 100px;
        width: 50% ;
}

table tr th  {
        padding-top: 20px;
}

input  {
        width: 50vw;
}
</style>

</head>
<body>

<fieldset >
<legend>Add Car</legend>

<form  action="actions/a_create.php" method= "post">
    <table cellspacing= "0" cellpadding="0">
        <tr>
            <th>Image</th >
            <td><input  type="text" name="image"  placeholder="Image" /></td >
        </tr>    
        <tr>
            <th>Name</th>
            <td><input  type="text" name= "name" placeholder="Name" /></td>
        </tr>
        <tr>
            <th>Baujahr</th>
            <td><input type="text"  name="baujahr" placeholder ="Baujahr" /></td>
        </tr>
        <tr>
        
        <tr>
            <td><button type ="submit">Insert Car</button></td>
            <td ><a href= "index.php"><button type="button">Back</button></a></td>
        </tr >
    </table>
</form>

</fieldset >

</body>
</html>