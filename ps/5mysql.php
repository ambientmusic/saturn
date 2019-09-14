<!DOCTYPE html>
<html>
<head>
<title>HTML Tutorial</title>
</head>


<style>

body {
    background-color: #d3d3d3;
    margin-left:50px;
}

h1 {
    color: grey;
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
}

p {
    font-family: calibri;
    font-size: 24px;
}

</style>

<script>
function myFunction1() {
                       document.getElementById("demo").style.color = "red";
                       document.getElementById("p1").style.color = "red";
                       document.getElementById("p2").style.color = "red";
                       document.getElementById("p3").style.color = "red";
                      }

function myFunction2() {
                        document.getElementById("demo").style.color = "black";
                        document.getElementById("p1").style.color = "black";
                        document.getElementById("p2").style.color = "black";
                        document.getElementById("p3").style.color = "black";
                       }

function myFunction3() {
                        document.getElementById("demo").style.color = "blue";
                        document.getElementById("p1").style.color = "blue";
                        document.getElementById("p2").style.color = "blue";
                        document.getElementById("p3").style.color = "blue";
                       }


</script>



<body>

<h1 id="demo">Hello World Heading</h1>
<p id="p1">Hello world paragraph.</p>
<button onmouseover="myFunction1()" onmouseout="myFunction2()" onclick="myFunction3()">Click Me!</button>

<?php
if (isset($_GET['planet']))
{$planet = $_GET['planet'];
if ($planet==0 || $planet==10)
{
echo $planet . '<p id="p2">Planet is Saturn</p>';
}
if ($planet==100 || $planet==1000)
{
echo $planet . '<p id="p2">Planet is Mars</p>';
}
}
if (!isset($_GET['planet']))
{
echo 'GET METHOD data is missing.';
}


//Check connection
$con=mysqli_connect("localhost", "root", "", "saturn");
if (!$con)
    {
    die('Could not connect: ' . mysqli_connect_errno());
    }

// Perform query
$sql1 = "SELECT `password` FROM `credentials` WHERE `email` = 'paul.sheridan@itgis.org' ";
$result1 = mysqli_query($con,$sql1);

// Result returned as an associative array. Returns an array of strings that corresponds to the fetched row.
$result1 = @mysqli_fetch_array($result1,MYSQLI_ASSOC);

// Capture the 'password' string value from the fetched row.
$res1a = $result1["password"];
?>

<p id="p3"><?php echo 'Password is ' . $res1a;?></p>

</body>
</html>
