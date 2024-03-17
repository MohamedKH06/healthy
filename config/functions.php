<?php
include 'db.php';
session_start();
ob_start();


function selectAll($db)
{
    global $con;
    $sql = "SELECT * FROM $db";
    $result = $con->query($sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $data;
}

function selectOne($db, $id)
{
    global $con;
    $sql = "SELECT * FROM $db WHERE id=$id";
    $result = $con->query($sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function selectWithNumber($db, $number)
{
    global $con;
    $sql = "SELECT * FROM $db ORDER BY DESC LIMIT $number";
    $result = $con->query($sql);
    $data = mysqli_fetch_assoc($result);
    return $data;
}



function update($db, $data, $id)
{
    global $con;
    $sql = "UPDATE $db SET ";
    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql .= " $key=?";
        } else {
            $sql .= ", $key=?";
        }
        $i++;
    }

    $sql .= " WHERE id=?";
    $data["id"] = $id;
    $stmt = $con->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);

    $stmt->execute();

    return $stmt;
}

function add($db, $data)
{
    global $con;
    $sql = "INSERT INTO $db SET ";
    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql .= " $key=?";
        } else {
            $sql .= ", $key=?";
        }
        $i++;
    }

    $stmt = $con->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);

    $stmt->execute();

    return $stmt;
}

function Delete($table, $id)
{
    global $con;
    $sql = "DELETE FROM $table WHERE id = $id";
    $Delete = $con->query($sql);
    return $Delete;
}

