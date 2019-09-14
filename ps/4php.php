<!DOCTYPE html>
<html>
<head>
<title>HTML Tutorial</title>
</head>


<style>

body {
    background-color: #d3d3d3;
    margin-left:20px;
}

h1 {
    color: grey;
    text-align: center;
     font-family: Arial, Helvetica, sans-serif;
}

p, #p1, #p2 {
    font-family: Calibri;
    font-size: 24px;
}

</style>

<script>
function myFunction1() {
                       document.getElementById("demo").style.color = "red";
                       document.getElementById("p1").style.color = "red";    
                       document.getElementById("p2").style.color = "red";
                      }

function myFunction2() {
                        document.getElementById("demo").style.color = "black";
                        document.getElementById("p1").style.color = "black";
                        document.getElementById("p2").style.color = "black";
                       }

function myFunction3() {
                        document.getElementById("demo").style.color = "blue";
                        document.getElementById("p1").style.color = "blue";
                        document.getElementById("p2").style.color = "blue";
                       }
</script>



<body>

<h1 id="demo">Hello World Heading</h1>
<p id="p1">Hello world paragraph.</p>
<button onmouseover="myFunction1()" onmouseout="myFunction2()" onclick="myFunction3()">Click Me!</button>

<!-- PHP scripts reside within reserved PHP tags. This allows the programmer to embed PHP scripts within HTML pages.
Note that the file extension has changed from .html to .php - the scripting language component identifier with in
the web server. -->

<?php
if (isset($_GET['planet']))
{$planet = $_GET['planet'];
if ($planet==0 || $planet==10)
{
echo '<p>Planet is Saturn</p>';
}
if ($planet==100 || $planet==1000)
{
echo '<p id="p2">Planet is Mars</p>';
}
}
if (!isset($_GET['planet']))
{
echo 'GET data is missing.';
}
?>
</body>
</html>


