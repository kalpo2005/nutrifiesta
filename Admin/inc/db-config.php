<?php

$hname = 'localhost';
$uname = 'root';
$pass  = '';
$db    = 'motiben'; // ✅ Updated database name

$con = mysqli_connect($hname, $uname, $pass, $db);

if (!$con) {
    die("Cannot connect to database: " . mysqli_connect_error());
}

function filteration($data) {
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
        $data[$key] = stripcslashes($data[$key]);
        $data[$key] = htmlspecialchars($data[$key]);
        $data[$key] = strip_tags($data[$key]);
    }
    return $data;
}

function select($sql, $values, $datatypes) {
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - select");
        }
    } else {
        die("Query cannot be prepared - select");
    }
}

function execute($sql, $values, $datatypes) {
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            return true;
        } else {
            mysqli_stmt_close($stmt);
            return false;
        }
    } else {
        return false;
    }
}


?>
