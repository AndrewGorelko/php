<?php

include '../loger/log.php';

if($_POST){

    $res = $_POST['content'];

    eval("\$res2 = $res;");
    echo $res2;
    addLog($res . '=' . $res2);
}