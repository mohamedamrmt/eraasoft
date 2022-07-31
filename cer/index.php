<?php


$list_of_students =  explode(",",$_POST['students']);

$cer_content= file_get_contents("certificate.html");

for($i=0;$i<count($list_of_students);$i++){
    fopen($list_of_students[$i].".html","w");
    $newstring =  str_replace("name",$list_of_students[$i],$cer_content);

    file_put_contents($list_of_students[$i].".html",$newstring);
}
