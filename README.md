# Global-supervariables
Superglobals are variables that PHP instantiates itself and makes available to you, the user at all times

Introduction
-------------
Welcome to the section about Global Supervariables. If this sounds like the avengers of the variables, then you're right!

What is this?
-------------
Global supervariables are variables that PHP instantiates itself and makes available to you, the user at all times. There are a lot of them:

$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
Look each and every one of them up. Know what they are, what they do.

PHP Superglobals
----------------
The PHP Superglobals are a handful of arrays that provide to a PHP script global access to data originating externally. Whereas PHP scripts contain variables that are local to that script and functions may have variables that are only accessible within that function, the PHP Superglobals represent data coming from URLs, HTML forms, cookies, sessions, and the Web server itself. $HTTP_GET_VARS, $HTTP_POST_VARS, etc., served these same purposes but the PHP superglobal variables are better in that they can also be accessed within any functions (i.e., they have global scope).

$_GET The $_GET Superglobal represents data sent to the PHP script in a URL. This applies both to directly accessed URLs (e.g., http://www.example.com/page.php?id=2) and form submissions that use the GET method.
$_POST The $_POST Superglobal represents data sent to the PHP script via HTTP POST. This is normally a form with a method of POST.
$_COOKIE The $_COOKIE Superglobal represents data available to a PHP script via HTTP cookies.
$_REQUEST The $_REQUEST Superglobal is a combination of $_GET, $_POST, and $_COOKIE.
$_SESSION The $_SESSION Superglobal represents data available to a PHP script that has previously been stored in a session.
$_SERVER The $_SERVER Superglobal represents data available to a PHP script from the Web server itself. Common uses of $_SERVER is to refer to the current PHP script ($_SERVER['PHP_SELF']), the path on the server to that script, the host name, and so on. (The image at right shows some sample $_SERVER values, which can be easily viewed in NuSphere's PhpED's Globals pane.)
$_ENV The $_ENV Superglobal represents data available to a PHP script from the environment in which PHP is running.
$_FILES The $_FILES Superglobal represents data available to a PHP script from HTTP POST file uploads. Using $_FILES is the currently preferred way to handle uploaded files in PHP.
Another PHP Superglobal, called $GLOBALS, stores every variable with global scope, which includes the above. Unlike the other Superglobals, $GLOBALS has been around since PHP 3.

Exercise
--------
Create a file setup.php
Create a file result.php
Use $_POST and $_GET to send data* from setup.php to result.php
On result.php show this data* to the user:
Show what data is in which variable
Make it look decent (use css) -> Don't spend too much time either !
