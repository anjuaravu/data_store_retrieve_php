<?php 

include('index.php');


$query="SELECT * from regform";
$result=mysqli_query($connection,$query);

?>

<!DOCTYPE html>
<body >
    <h1>DISPLAY FORM DATA</h1>
    <table border="1px">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>MOBILE</th>
        <th>DOB</th>
        <th>Gender</th>
    </tr>

    <?php 
    
    while($row=mysqli_fetch_assoc($result))
   {
   ?>

    <tr>
    <td> <?php echo $row['id']; ?> </td>
    <td> <?php echo $row['name']; ?> </td>
    <td> <?php echo $row['email']; ?> </td>
    <td> <?php echo $row['mobile']; ?> </td>
    <td> <?php echo $row['dob']; ?> </td>
    <td> <?php echo $row['gender']; ?> </td>
    </tr>
    <?php
   }

  
    ?>

    </table>
</body>
</html>



    
    

    
        
   
    

