<?php

session_start();
if(empty( $_SESSION['userdate'])){

    header('LOCATION:index.html');

}else{
    echo 'welcome to home'.'<br>';
    echo "<a href='logout.php'>logout</a>";

}

