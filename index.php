<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
class S1
{
    function call()
    {
        echo "this is calling<br>";
    }
    function msg()
    {
        echo "this is message<br>";
    }
}
class S2 extends S1
{
    function camera()
    {
        echo "8 mega pixel<br>";
    }
}
class S3 extends S1
{
    function ram()
    {
        echo "8gb ram";
    }
}
echo "Parent Class <br> ";
$a=new S1();
$a->call();
$a->msg();

echo "1st Clas Child<br> ";
$b=new S2();
$b->call();
$b->msg();
$b->camera();

echo "2nd Class Child<br>";
$c=new S3();
$c->call();
$c->msg();
$c->ram();
// $a=new S1();
// $a->call();
// $a->msg();

// $b=new S2();
// $b->call();
// $b->msg();
// $b->camera();
?>