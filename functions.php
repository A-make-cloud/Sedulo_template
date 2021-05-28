<?php

function db_connect()
{
    $dns = 'mysql:dbname=sedulo;charset=utf8;host=localhost';
    $user = 'root';
    $password = '';
    try {
        $dbh = new PDO($dns, $user, $password);
        return $dbh;
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
}


function request_sql($dbh, $sql)
{
    $request = $dbh->prepare($sql);
    if ($request->execute()) {
        $res = $request->fetchAll();
    } else {
        $res = ["error" => "undon't know error"];
    }
    return $res;
}
