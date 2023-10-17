<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <h1>FORM</h1>
    <form action="index.php",method="get" >
        Name:<input type="text"  name="name" placeholder="anju" required><br>
        Email:<input type="email"  name="email" placeholder="anju@gmail.com" required><br>
        Mobile:<input type="number" name="mobile" placeholder="98********" required><br>
        DOB:<input type="date"  name="dob" placeholder="18-01-1999"required><br>
        Gender: Female<input type="radio" id="female" name="gender" required>
                Male<input type="radio" id="male" name="gender">
                Other<input type="radio" id="other" name="gender"><br>
        <input type="submit" value="SAVE" name="submit">
    </form>
</body>
</html>
