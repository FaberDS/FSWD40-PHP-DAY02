<!-- first Exercise
Create a PHP script which will be based on browser type, include chrome.css or mozilla.css in the head section of your HTML document structure. -->
<?php
$viewer = getenv( "HTTP_USER_AGENT" );
if( preg_match( "/MSIE/i", "$viewer" ) )
{
$browser = "ie";
}
else if( preg_match( "/Netscape/i", "$viewer" ) )
{
$browser = "netscape";
}
elseif(preg_match('/Chrome/i', "$viewer"))
{
$browser = 'chrome'; 
}
else if( preg_match( "/Mozilla/i", "$viewer" ))
{
$browser = "mozilla";
}
elseif(preg_match('/Safari/i',"$viewer"))
{
$browser = 'safari';
}
$bType = $browser.".css";
// echo $bType;
?>
<!DOCTYPE html>
<html>
<head>
       <title>PHP example</title>
       <link href="<?php echo $bType ?>"></link>

</head>
<body>

</body>
</html>