<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'healty');

$con = mysqli_connect(HOST, USER, PASSWORD, DB);

// $mainLink = "http://" . $_SERVER["HTTP_HOST"] . "/healthy";

function row_count($result)
{
    return mysqli_num_rows($result);
}
function escape($str)
{
    global $con;
    return mysqli_real_escape_string($con, $str);
}
function query($query)
{
    global $con;
    return mysqli_query($con, $query);
}

function fetch_data($result)
{
    global $con;
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}