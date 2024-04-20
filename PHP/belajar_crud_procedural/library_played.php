<?php 
require("connection&readData.php");

function createData($ply_id, $ply_id_track, $ply_played){
    global $conn;

    $queryCreate = "INSERT INTO tb_played(ply_id, ply_id_track ,ply_played) VALUES('$ply_id', '$ply_id_track' ,'$ply_played')";
    mysqli_query($conn, $queryCreate);
    
    return mysqli_affected_rows($conn);//int(-1) = error, int(1) = true
}

function updateData($ply_id, $ply_id_track, $ply_played){
    global $conn;

    $queryUpdate = "UPDATE tb_played SET ply_id_track = '$ply_id_track', ply_played = '$ply_played' WHERE ply_id = '$ply_id'";
    mysqli_query($conn, $queryUpdate);

    return mysqli_affected_rows($conn);//int(-1) = error, int(1) = true
}

function deleteData($ply_id){
    global $conn;

    $query_hapus = "DELETE FROM tb_played WHERE ply_id = $ply_id";
    mysqli_query($conn, $query_hapus);

    return mysqli_affected_rows($conn);//int(-1) = error, int(1) = true
}
?>