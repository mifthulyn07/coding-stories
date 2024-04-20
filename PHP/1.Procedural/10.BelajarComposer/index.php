<?php 
// menggunakan library faker untuk mengenerate data palsu
require_once 'vendor/autoload.php';

//ingin mencari random orang indonesia 'id_ID'
$faker = Faker\Factory::create('id_ID');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <center><h1>DATA PENDUDUK</h1></center>

    <center>
        <table>
            <thead>    
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i=1; $i<=20; $i++){?>
                <tr>
                    <td> <?php echo $i; ?> </td>
                    <td> <?php echo $faker->name(); ?> </td>
                    <td> <?php echo $faker->email(); ?> </td>
                    <td> <?php echo $faker->address(); ?> </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </center>
</body>
</html>