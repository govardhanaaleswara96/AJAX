<?php


// get data
if(isset($_GET['name'])) {
    echo 'GET : Your Name is '.$_GET['name'];
}

//post data
if(isset($_POST['name'])) {
    echo 'GET : Your Name is '.$_POST['name'];
}


