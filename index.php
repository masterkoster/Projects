

// Link to domain https://www.determined-haibt.157-245-90-72.plesk.page/motorcycles/index.php

<?php


$request = new HttpRequest();
$request->setUrl('https://motorcycle-specs-database.p.rapidapi.com/category');
$request->setMethod(HTTP_METH_GET);

$request->setHeaders([
    'x-rapidapi-key' => 'ed08b61964msh4724148184e3f90p183213jsn4b6354e80c52',
    'x-rapidapi-host' => 'motorcycle-specs-database.p.rapidapi.com'
]);

try {
    $response = $request->send();

    echo $response->getBody();
} catch (HttpException $ex) {
    echo $ex;
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
</head>
<body>
<h1>Hello, world!</h1>
<P>test 2</P>
</body>
</html>