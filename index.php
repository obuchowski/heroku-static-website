<?php
var_dump($_SERVER);
if (!empty($_SERVER['REMOTE_HOST']) && strpos($_SERVER['REMOTE_HOST'], '.herokuapp.com')) {
    header('Location: http://www.ecommerce-consulting.pl/');
    die();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>eCommerce Consulting</title>
</head>
<body>
    <h1>eCommerce Consulting</h1>
</body>
</html>
