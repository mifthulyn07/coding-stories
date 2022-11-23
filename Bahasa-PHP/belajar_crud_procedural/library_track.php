<?php 
require("connection&readData.php");

function createData($trc_id, $trc_name, $trc_id_album, $trc_time){
    global $conn;

    $queryCreate = "INSERT INTO tb_track(trc_id, trc_name, trc_id_album, trc_time) VALUES('$trc_id', '$trc_name', '$trc_id_album', '$trc_time')";
    mysqli_query($conn, $queryCreate);
    
    return mysqli_affected_rows($conn);//int(-1) = error, int(1) = true
}

function updateData($trc_id, $trc_name, $trc_id_album, $trc_time){
    global $conn;

    $queryUpdate = "UPDATE tb_track SET trc_name = '$trc_name', trc_id_album = '$trc_id_album', trc_time = '$trc_time' WHERE trc_id = '$trc_id'";
    mysqli_query($conn, $queryUpdate);

    return mysqli_affected_rows($conn);//int(-1) = error, int(1) = true
}

function deleteData($trc_id){
    global $conn;

    $query_hapus = "DELETE FROM tb_track WHERE trc_id = $trc_id";
    mysqli_query($conn, $query_hapus);

    return mysqli_affected_rows($conn);//int(-1) = error, int(1) = true
}
?>