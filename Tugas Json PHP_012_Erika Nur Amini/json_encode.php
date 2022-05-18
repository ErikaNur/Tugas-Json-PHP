<?php

$data = ["menulis", "membaca", "memasak", "melukis", "fotografi", "bernyanyi"];

header('Content-type:application/json;charset=utf-8');
echo json_encode($data);