<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Numbers</title>
</head>
<body>
    <form action="add.php" method="post">
        Enter 1st number=<input type="text" name="v1"><br>
    Enter 2nd number=<input type="text" name="v2"><br>
    <input type="submit" name="sub">
    </form>
    
</body>
</html>
<?php
if(isset($_POST['sub'])){
    $x=$_POST['v1'];
$y=$_POST['v2'];
echo "add is=".$x+$y;
}

?>