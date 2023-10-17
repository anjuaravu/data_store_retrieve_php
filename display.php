<?php
include('index.php');
$query="SELECT * from regform";
$result=mysqli_query($connection,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DISPLAY  DATA</h1>
    <table>
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>EMAIL</td>
        <td>MOBILE</td>
        <td>DOB</td>
        <td>Gender</td>
    </tr>
    <?php while($row=(mysqli_fetch_assoc($result)))
   {
   ?>
   <tr>
   <td> <?php echo $row=['id'] ?> </td>
   <td> <?php echo $row=['$name'] ?> </td>
    <td> <?php echo $row=['email'] ?> </td>
    <td> <?php echo $row=['mobile'] ?> </td>
    <td> <?php echo $row=['dob'] ?> </td>
    <td> <?php echo $row=['gender'] ?> </td>
    </tr>
    <?php
   }
   mysqli_close($connection);
    ?>
    </table>
</body>
</html> 



    
    

    
        
   
    

