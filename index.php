<!DOCTYPE html>
<html lang="<?php echo "en";?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boris</title>
</head>
<body>
<?php
class pagina
{
    public function show(){
        echo "<title>hola</title>
        <h1>bienvenidos</h1>";
    }
}
$page=new pagina;
$page->show();
?>
<?php
    $idioma = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    echo $idioma;
    echo"<br>";
?>
<?php
    function obtenerIdioma(){
        $idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
        return $idioma;
    }
    echo obtenerIdioma();
?>
</body>
</html>