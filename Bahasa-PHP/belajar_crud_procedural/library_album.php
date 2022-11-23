<?php 
require("connection&readData.php");

function createData($alb_id, $alb_id_artist, $alb_name){
    global $conn;

    $queryCreate = "INSERT INTO tb_album(alb_id, alb_id_artist ,alb_name) VALUES('$alb_id', '$alb_id_artist' ,'$alb_name')";
    mysqli_query($conn, $queryCreate);
    
    return mysqli_affected_rows($conn);//int(-1) = error, int(1) = true
}

function updateData($alb_id, $alb_id_artist, $alb_name){
    global $conn;

    $queryUpdate = "UPDATE tb_album SET alb_id_artist = '$alb_id_artist', alb_name = '$alb_name' WHERE alb_id = '$alb_id'";
    mysqli_query($conn, $queryUpdate);

    return mysqli_affected_rows($conn);//int(-1) = error, int(1) = true
}

function deleteData($alb_id){
    global $conn;

    $query_hapus = "DELETE FROM tb_album WHERE alb_id = $alb_id";
    mysqli_query($conn, $query_hapus);

    return mysqli_affected_rows($conn);//int(-1) = error, int(1) = true
}
?>