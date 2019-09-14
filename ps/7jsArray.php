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

// Add a new high value to the end of the array and rerun the script;

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


</script>







<!-- ************  NEW SCRIPT ELEMENT *************-->

<script>

/* Data Types and Data Structures (the programmatic way of storing data so that data can be used efficiently)

Examples of the most frequently used data types and data structures are included below. Less frequently used examples include linked lists, stacks, queues, sets and a few others.

A further example illustrates how an efficient data structure may be used with an algorithm to solve a problem.
*/

// string
var a = "This is a string.";
if(a == "This is a string.")
alert(a);

// number
var b = 2000;
if(b == 2000)
alert(b);

// undefined
var c;
if(c == undefined)
{alert(c);}

// null (it represents no value)
var d = null;
if(d == null)
{alert(d);}

// Boolean true
var e = true;
if(e == true)
{alert(e);}


// Boolean false
var f = false;
if(f == false)
{alert(f);}


// Set a function to a boolean value (true) using the return statement.

function trueTest(){
// list of statements to be executed.
return true;
}
if(trueTest())
{alert("trueTest()\r\nSuccess!");
}

// Set a function to a boolean value (false) using the return statement.

function falseTest(){
// list of statements to be executed.
return false;
}
if(!falseTest())
{alert("falseTest()\r\nFailure!");
}


// JavaScript Array (Algorithm example)

/* Algorithm to find the min/max element of an Array */

//  JavaScript arrays are used to store multiple values in a single variable. In this example a list of comma seperated numbers are enclosed in square brackets. The array of numbers is then assigned to a single variable (tab).

 var tab = [15, 9, 96, 47, 53, 4, 70, 250, 17];   // Note the array's length is 9 (9 entries - array postions 0 to 8)

// Initialise  min and max. A value's position within the array is defined within square brackets (note the array index starts from 0).

 var min = tab[0];  // min = 15
 var max = tab[0];  // max = 15

//The 'for' statement creates a loop that consists of three optional expressions, enclosed in parentheses and separated by semicolons, followed by a statement (usually a block statement) to be executed in the loop, such as:

/*
Expression 1 Initialise var i = 0;
Expression 2 Iterate (repeat the block of code) if i is less than tab.length;
Expression 3 Increment i by 1 i++
*/

 for (var i = 0; i < tab.length; i++) {

//Place the cursor over the curly bracket above. The code between { } the curly brackets highlighted in green represents a block statement. It's this block that's repeated until i, after incrementation, is no longer less than 9).

    if (min > tab[i]) {
        min = tab[i];
    }

    if (max < tab[i]) {
        max = tab[i];
    }

    if (i==0)
    {alert("For Loop:\r\nFirst Iteration");
    }

    if (i==8)
    {alert("For Loop:\r\nLast Iteration");
    }
}

alert("The Min Max Array Values are: Min = " + min + ", Max = " + max);

// Javascript Associative Array (JavaScript Object).

/*These are Key:Value pairs separated by a comma, and written inside curly brackets (also see the example of a PHP associative array detailed below).*/

 var car = {Name:"Bently", Colour:"orange", Style:"coupe"}

 alert("The " + car.Name + " is " + car.Colour + " and its style is " + car.Style + ".");

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

// Perform query - stores "the string below" in variable $sql1.  Note '*' below returns both email aand password.
$sql1 = "SELECT * FROM `credentials` WHERE `email` = 'paul.sheridan@itgis.org' ";

//Return a mysqli_result object to $result1
$result1 = mysqli_query($con,$sql1);

// PHP associative array
// Returns an array of strings that corresponds to the fetched row in an associative array.
// $array={key1:'value1', key2:'value2'};
// $result1={password:'paul1234', email:'paulsheridan@itgis.org'}
$result1 = @mysqli_fetch_array($result1,MYSQLI_ASSOC);

// Capture the 'password' string value from the fetched row.
$res1a = $result1["password"];
?>
<!--Display the password -->
<p id="p3"><?php echo 'Password is ' . $res1a;?></p>
</body>
</html>