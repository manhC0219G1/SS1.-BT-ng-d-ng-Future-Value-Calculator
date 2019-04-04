<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Future Value Calculator</h1>
<form  method="post">
    <input type="submit" value="Caculate"><br>
    Inventment Amount : <input type="text" name="inventment">
    <br><br>
    Yearly Interest Rate : <input type="text" name="interest"> %/year
    <br><br>
    Number of Years : <input type="text" name="number">
    <br><br>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $inventment=$_POST["inventment"];
        $interset=$_POST["interest"];
        $number=$_POST["number"];
        echo " Inventment Amount :".$inventment."<br>";
    };
    for($index=0;$index<$number;$index++){
        $inventment += $inventment*($interset/100);
    };
    echo "Future Value: ".$inventment."<br>";
    echo "Yearly Interest Rate:".$interset."<br>";
    echo "Number of Years: ". $number."<br>";

    ?>
</form>
</body>
</html>