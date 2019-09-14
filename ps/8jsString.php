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
                       document.getElementById("txt").style.color = "red";
                      }

function myFunction2() {
                        document.getElementById("demo").style.color = "black";
                        document.getElementById("p1").style.color = "black";
                        document.getElementById("p2").style.color = "black";
                        document.getElementById("p3").style.color = "black";
                        document.getElementById("txt").style.color = "black";
                       }

function myFunction3() {
                        document.getElementById("demo").style.color = "blue";
                        document.getElementById("p1").style.color = "blue";
                        document.getElementById("p2").style.color = "blue";
                        document.getElementById("p3").style.color = "blue";
                        document.getElementById("txt").style.color = "blue";
                       }

function startTime() {

        date = new Date;                // With no arguments, the Date() constructor creates a Date object set to the current date and time.

        d = date.getDate();             // Captures the day number in the month
        day = date.getDay();            // Captures the day name in week 0 - 6
        days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');

        month = date.getMonth();        // Captures month name in year 0 - 11
        months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');

        year = date.getFullYear();

        h = date.getHours();
        if(h<10)
        {
                h = "0"+h;
        }

        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }

        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
        result = ''+days[day]+' '+d+' '+months[month]+' '+year+' &nbsp;Time: '+h+':'+m+':'+s;

        document.getElementById('txt').innerHTML = "<span style=\"font-size:24px;\">Date: " + result; + "</span>";

 //      var t = setTimeout(startTime, 500); 
     isEven(s);
     return true;
}

/* INTRODUCTION TO STRING MANIPULATION

A JavaScript string is zero or more characters written inside quotes.

A JavaScript variable can hold a value of any data type (numbers, strings, objects and more). To declare variables in JavaScript, you need to use the 'var' keyword whether it is a string or a number.
*/
var mystr1 = "Rory";
var mystr2 = "Jonny";

var num1=20;
var num2=14;

var num3 = num1 + num2;

alert("The combined age of " + mystr1 + " and " + mystr2 + " is " + num3);

var mystr1 = "Callum";

alert("The combined age of " + mystr1 + " and " + mystr2 + " is " + num3);


/*
Note that javascript has reserved words e.g. short, new, null, package, private, byte, final and so on (a reason for failure when seamimgly good code isn't working).

For an explanation of objects see https://www.w3schools.com/js/js_objects.asp.
*/
//Return the first character of a string.

  var str = "HELLO WORLD";
  var res = str.charAt(0)

alert("\r\nWhat's the first character of string str='HELLO WORLD'.\r\n\r\nvar res = str.charAt(0);\r\n\r\nThe first character of string 'HELLOW WORLD' is '"+res+"'.");

//Returns the index of (the position of) the first occurrence of a specified text in a string.
  var str = "Please locate where 'locate' occurs!";
  var pos = str.indexOf("locate");

alert("What's the position of first occurrence of locate in the string str='Please locate where 'locate' occurs!'\r\n\r\nvar pos = str.indexOf(\"locate\");\r\n\r\nThe position of the first occurrence of locate is '"+pos+"'.");


//Returns the text between two string positions in a string.
  var str = "Apple, Orange, Strawberry";
  var res = str.substring(7, 13);

alert("What's the value of the substring from position 7 to position 13 in the string str='Apple, Orange, Strawberry'.\r\n\r\nvar res = str.substring(7, 13);\r\n\r\n The value of the substring in the specified text is '"+res+"'.");

//Replaces occurences of a string matching a given string.
  var str = "Mr White has a white table and a white chair";
  var res = str.replace(/white/g, "red");

alert("Mr White has replaced his white furniture with red furniture. Update the string str='Mr White has a white table and a white chair' accordingly.\r\n\r\nvar res = str.replace(/white/g, \"red\"); \r\n\r\nThe new string is '"+res+"'.");

// A full list of string methods may be found at https://www.w3schools.com/jsref/jsref_obj_string.asp

// A non-partisan string manipulation function.
function isEven(n) {
  var remainder = n % 2;
  if (remainder >0)
  {var team = "SUNDERLAND ATHLETIC"}
  else
  {var team = "NEWCASTLE UNITED"}
//Returns the length of a string

  var str = team + " FC";

alert("What's the length of the string str='"+team+" FC'.\r\n\r\nvar str = team + \" FC\"; \r\n\r\nThe length of the string is " +str.length +" characters.");
//    var t = setTimeout(startTime, 500);
}
</script>

<body>

<h1 id="demo">Hello World Heading</h1>
<p id="p1">Hello world paragraph.</p>
<button onmouseover="myFunction1()" onmouseout="myFunction2()" onclick="myFunction3();startTime()">Click Me!</button>

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
if (!isset($_GET['planet']) || $_GET['planet']=="")
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
<!--Display the password -->
<p id="p3"><?php echo 'Password is ' . $res1a;?></p>

<p id="txt"></p>
</body>
</html>