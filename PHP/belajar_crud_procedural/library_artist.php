<?php 
require("connection&readData.php");

function createData($art_id, $art_name){
    global $conn;

    $queryCreate = "INSERT INTO tb_artist(art_id, art_name) VALUES('$art_id', '$art_name')";
    mysqli_query($conn, $queryCreate);
    
    return mysqli_affected_rows($conn);//int(-1) = error, int(1) = true
}

function updateData($art_id, $art_name){
    global $conn;

    $queryUpdate = "UPDATE tb_artist SET art_name = '$art_name' WHERE art_id = '$art_id'";
    mysqli_query($conn, $queryUpdate);

    return mysqli_affected_rows($conn);//int(-1) = error, int(1) = true
}

function deleteData($art_id){
    global $conn;

    $query_hapus = "DELETE FROM tb_artist WHERE art_id = $art_id";
    mysqli_query($conn, $query_hapus);

    return mysqli_affected_rows($conn);//int(-1) = error, int(1) = true
}
?>