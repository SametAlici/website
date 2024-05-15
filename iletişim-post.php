<?php

require 'inc/config.php';

if ($_POST) {
   
    $AdSoyad=$_POST["AdSoyad"];
    $Email=$_POST["Email"];
    $Telno=$_POST["Telno"];
    $Konu=$_POST["Konu"];
    $Mesaj=$_POST["Mesaj"];


    DB::insert("INSERT INTO iletişimdatabase(AdSoyad,Email,Telno,Konu,Mesaj)VALUES(?,?,?,?,?) ",array(
        $AdSoyad,
        $Email,
        $Telno,
        $Konu,
        $Mesaj
 
    ) );
   
   
    header("refresh:0;url=index.html?succsess=1"); 
}

?>