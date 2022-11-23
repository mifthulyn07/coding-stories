<?php 
require("library.php");
require("session.php");

$album = new Album();
$photo = new Photos();

// read 
$rows_album     = $album->readData("SELECT * FROM tb_album ORDER BY album_id");
$rows_photo     = $photo->readData("SELECT * FROM tb_photos ORDER BY photo_id");

$error          = "";
$sukses         = "";
$album_id       = "";
$album_id_photo = "";
$album_title    = "";
$photo_id       = "";
$photo_title    = "";

if(isset($_GET["op"])){
	$op = $_GET["op"];
}else{
	$op = "";
}

if(isset($_POST["save"])){
    $album_id           = $_POST["album_id"];
    $album_id_photo     = $_POST["album_id_photo"];
    $album_title        = $_POST["album_title"];

    if($op == "edit"){// update
        $info = $album->updateData($album_id, $album_id_photo, $album_title);

        if($info){
            $sukses = "Berhasil mengupdate data";
        }else{
            $error = "Gagal mengupdate data";
        }
    }else{// create
        $info = $album->createData($album_id, $album_id_photo, $album_title);

        if($info){
            $sukses = "Berhasil memasukkan data";
        }else{
            $error = "Gagal memasukkan data";
        }
    }
}

if($op == "edit"){// show data by id(for update)
    $get_byId_album = $album->readData("SELECT * FROM tb_album WHERE album_id =" . $_GET["id"])[0];

    $album_id          = $get_byId_album["album_id"];
    $album_id_photo    = $get_byId_album["album_id_photo"];
    $album_title       = $get_byId_album["album_title"];

    $get_byId_photo = $photo->readData("SELECT * FROM tb_photos WHERE photo_id =" . $album_id_photo)[0];
    
    $photo_id            = $get_byId_photo["photo_id"];
    $photo_title         = $get_byId_photo["photo_title"];
}else if($album_id = ""){
    $error	= "data tidak ditemukan";
}

if($op == "delete"){
    $album_id = $_GET["id"];
    
    $info = $album->deleteData($album_id);

    if($info){
        $sukses = "Berhasil menghapus data";
    }else{
        $error = "Gagal menghapus data";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color:#020f18; color:white;">
    <div class="container" style="max-width:1000px;">
        <header style="color:white; padding:30px; text-align:center;">
            <h1>TUGAS KUIS NIM GANJIL</h1>
            <p>By: Miftahul Ulyana Hutabarat - 0702192031</p>
        </header>

        <!--  -->
        
        <nav class=" navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="font-weight:bold;">Menu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="form_category.php">Form Category</a>
                        <a class="nav-link" href="form_post.php">Form Post</a>
                        <a class="nav-link" href="form_photos.php">Form Photos</a>
                        <a class="nav-link active" aria-current="page" href="form_album.php">From Album</a>
                        <a class="nav-link" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>

        <!--  -->

        <main style="max-width:900px; margin:0 auto;">

            <!-- CARD CREATE/DELETE  -->

            <div class="card" style="color:black; background-color: #e3f2fd; margin:20px;">
                <h5 class="card-header" style="background-color:#cfe9fc; font-weight:bold;">Create/Edit Data</h5>
                <div class="card-body">

                    <!-- INFO -->

                    <?php if($error): ?>
						<div class="alert alert-danger" role="alert">
							<?php echo $error ?>
						</div>
					<?php header("refresh:2;url=form_album.php"); endif; ?>
					<?php if($sukses): ?>
						<div class="alert alert-success" role="alert">
							<?php echo $sukses ?>
						</div>
					<?php header("refresh:2;url=form_album.php"); endif; ?>
                    
                    <!--  -->

                    <form action="" method="POST">
                        <div class="mb-3 row">
                            <label for="album_id" class="col-sm-3 col-form-label">Id</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="album_id" name="album_id" value="<?php echo $album_id; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="album_id_photo" class="col-sm-3 col-form-label">Photos Title</label>
                            <div class="col-sm-9">
                                <select class="form-select" aria-label="Default select example" id="album_id_photo" name="album_id_photo">
                                    <option>-Select Photo-</option>
                                    <?php if(isset($_GET["id"])){
                                    if($_GET["id"] == $album_id){?>
                                    <option selected value="<?php if($album_id_photo = $photo_id){ echo $album_id_photo;} ?>" >
                                            <?php $album_id_photo = $photo_title; echo $album_id_photo; ?> 
                                    </option>
                                <?php foreach($rows_photo as $row_photo):
                                    if($photo_id == $row_photo['photo_id']){ continue;} else{ ?>
                                    <option value="<?php if($album_id_photo = $row_photo['photo_id']){ echo $album_id_photo;} ?>" >
                                            <?php $album_id_photo = $row_photo['photo_title']; echo $album_id_photo; ?> 
                                    </option>
                                    <?php } endforeach;?>   
                                <?php }}else{ 
                                foreach($rows_photo as $row_photo):?>
                                    <option value="<?php if($album_id_photo = $row_photo['photo_id']){ echo $album_id_photo;} ?>" >
                                        <?php $album_id_photo = $row_photo['photo_title']; echo $album_id_photo; ?> 
                                    </option>
                                <?php endforeach; }?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="album_title" class="col-sm-3 col-form-label">Album Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="album_title" name="album_title" value="<?php echo $album_title; ?>">
                            </div>
                        </div>
                        <div class="col-sm-13">
                            <button type="submit" name="save" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- CARD TABLE --> 

            <div class="card" style="color:black; background-color: #e3f2fd; margin:20px;">
                <h5 class="card-header" style="background-color:#cfe9fc; font-weight:bold;">Table Album</h5>
                <div class="card-body">
                    <table class="table table-hover" style="background-color: #e3f2fd;">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Photo Name</th>
                                <th scope="col">Album Title</th>
                                <th colspan="2" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($rows_album as $row_album): 
                            $album_id           =    $row_album["album_id"];
                            $album_id_photo      =    $row_album["album_id_photo"];
                            $album_title        =    $row_album["album_title"];
                            ?>
                            <tr>
                                <td><?php echo $album_id; ?></td>
                                <?php foreach($rows_photo as $row_photo):
                                if($album_id_photo === $row_photo['photo_id']):
                                $album_id_photo = $row_photo['photo_title'];?>
                                <td><?php echo $album_id_photo; ?></td>
                                <?php endif; endforeach; ?>
                                <td><?php echo $album_title; ?></td>
                                <td>
                                    <a href="form_album.php?op=edit&id=<?php echo $row_album["album_id"]; ?>">
                                        <button type="button" class="btn btn-warning">Edit</button>
                                    </a>
                                    <a  href="form_album.php?op=delete&id=<?php echo $row_album["album_id"]; ?>"
                                        onclick="return confirm('yakin ingin menghapus data?')">
                                        <button type="button" class="btn btn-danger">Del</button>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        
        <!--  -->
        
        <footer style="text-align:center; color:black; padding:8px; background-color: #e3f2fd;">
            <p>© 2021 Miftahul Ulyana Hutabarat</p>
        </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>