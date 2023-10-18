<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert table and display data</title>
</head>
<body align="center">
    <h1 >FORM</h1>
    <form action="insert.php",method="get" width="100px" >
        Name:<input type="text"  name="name" placeholder="anju" required><br>
        Email:<input type="email"  name="email" placeholder="anju@gmail.com" required><br>
        Mobile:<input type="number" name="mobile" placeholder="98********" required><br>
        DOB:<input type="date"  name="dob" placeholder="18-01-1999"required><br>
        Gender: Female<input type="radio" value="Female" name="gender" required>
                Male<input type="radio" value="Male" name="gender">
                Other<input type="radio" value="Other" name="gender"><br>
                <input type="submit" value="SAVE" name="submit">
                
    </form>
    <a href="display.php" align="center"><button>VIEW</button></a>
</body>
</html>
