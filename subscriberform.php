<?php


if($_POST["message"]) {


mail("apniudaan.orai@gmail.com", "Here is the subject line",


$_POST["yoo"]. "From: an@email.address");


}


?>