<?php

    include '../vars.php';

    $title = 'Algum titulo';
    $header = '
    <link rel="stylesheet" href="style.css">
    <title>'.$title.'</title
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="../media/favicon.ico">
    ';
    $body= file_get_contents("body.html");

    $body= str_replace("$0",$project_name,$body);
    $body= str_replace("$1",func1(),$body);

    include('../templates/homepage.php');

    function func1() {
        $str="";
        $d = dir('projects/');

        while (false !== ($entry = $d->read())) {
            if(!($entry=="." || $entry=="..")){
                $str.="<a href=\"./projects/$entry\">$entry</a><BR>";
            }
         }
        return $str;
    }
?>