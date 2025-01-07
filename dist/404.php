<?php if (preg_match("/[A-Z]/", $_SERVER["REQUEST_URI"])) {
    header("location:https://" . $_SERVER["HTTP_HOST"] . strtolower($_SERVER["REQUEST_URI"]));
    exit();
}
?>

<h1>404 - Page cannot be found</h1>

<a href="https://www.tailwindtoolbox.com">Go Back to Windy Toolbox Home page</a>