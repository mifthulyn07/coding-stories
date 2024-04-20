<!-- menghubungkan halaman login dengan database mysql -->
<?php 
$conn = mysqli_connect("localhost", "root", "", "db_pbwd_quiz_ganjil");

if(!$conn){ //cek koneksi
	die("tidak bisa terkoneksi ke database");
}	

function readData($queryRead){ 
    global $conn;
    $result = mysqli_query($conn, $queryRead);
    
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    echo mysqli_error($conn);

    return $rows;
}
?> 