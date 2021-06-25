<?php
class Page
{
    private function language(){
        $idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
        return $idioma;
    }
    public function show(){
        echo'
        <!DOCTYPE html>
        <html lang="'.$this->language().'">
        <head>
            <meta charset='.'"UTF-8"'.">
            <meta http-equiv=".'"X-UA-Compatible"'." content=".'"IE=edge"'.">
            <meta name=".'"viewport"'." content=".'"width=device-width, initial-scale=1.0"'.">
            <title>boris</title>
        </head>
        <body>
            <h1>hola cabrones</h1>
        </body>
        </html>";
    }
}
$pagina=new Page;
$pagina->show();
?>