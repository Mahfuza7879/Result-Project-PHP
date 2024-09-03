<?php
    error_reporting(0);
    include_once('mark.php');
    

    $bangla = mark($_POST['bn_number']);
    $english = mark($_POST['en_number']);
    $math = mark($_POST['math_number']);

    include_once('check.php');

    $tt = round($gpa,2);

    include_once('grade.php');


    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result page</title>
</head>
<body>
    <h2>Input your all subject wise number</h2>
    <form method="POST">
        <label>Bangla</label><br>
        <input type="number" name="bn_number" placeholder="Enter your number"><br>
        <label>English</label><br>
        <input type="number" name="en_number" placeholder="Enter your number"><br>
        <label>Math</label><br>
        <input type="number" name="math_number" placeholder="Enter your number"><br>
        <input type="submit" value="Result">
    </form>
    <h2><?php echo $tt; ?></h2>
    <h2><?php echo $grade; ?></h2>
</body>
</html>