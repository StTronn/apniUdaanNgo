<?php


if($_POST["message"]) {


mail("chitraksh2705@gmail.com", "Here is the subject line",


$_POST["yoo"]. "From: an@email.address");


}


?>