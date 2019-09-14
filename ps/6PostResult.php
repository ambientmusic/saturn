<html>
<body>
<?php
if (isset($_POST['email']))
{$x = $_POST['email'];
}


if (isset($_POST['password']))
{$y = $_POST['password'];
}
?>
<h3>HTTP is designed to enable communications between clients and servers.</h3>
<b>HTTP POST Method</b><br>
<i>The data sent to the server with POST is stored in the request body of the HTTP request.</i><br>
<i>No restrictions on data length.</i><br>
<i>Use POST if the form data contains sensitive or personal information.</i><br><br>

Your email address is <?php echo $x; ?><br><br>
Your password is <?php echo $y; ?><br>

</body>
</html>

<!--
HTTP HEADERS

General
Request URL: http://localhost/nn/6HiPost.php      (SPOT THE DIFFERENCE WITH 6HiGet.php)
Request Method: POSTs
Status Code: 200 OK
Remote Address: [::1]:80
Referrer Policy: no-referrer-when-downgrade

Response Headers
(see below)

Request Headers
(see below)

Form Data      (SPOT THE DIFFERENCE WITH 6HiGet.php)
xname: Paul
xemail: a@o.com

-----------------------------------------------------------------------------

ADDITIONAL HTTP HEADER DETAIL
Response Headers
Connection: Keep-Alive
Content-Length: 82
Content-Type: text/html; charset=UTF-8
Date: Mon, 02 Sep 2019 14:48:29 GMT
Keep-Alive: timeout=5, max=100
Server: Apache/2.4.37 (Win64) PHP/7.2.14
X-Powered-By: PHP/7.2.14

Request Headers
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3
Accept-Encoding: gzip, deflate, br
Accept-Language: en-GB,en-US;q=0.9,en;q=0.8
Cache-Control: max-age=0
Connection: keep-alive
Host: localhost
Referer: http://localhost/ps/6FormGet.php
Sec-Fetch-Mode: navigate
Sec-Fetch-Site: none
Sec-Fetch-User: ?1
Upgrade-Insecure-Requests: 1
User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36

Use inspect code when using the Chrome browser to see the above details. Right click, select Network and perform a request or hit CTRL + R to record the reload.
-->
