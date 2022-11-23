<?php 
require("library.php");
require("session.php");

$photo = new Photos();
$post = new Post();

// read 
$rows_photo     = $photo->readData("SELECT * FROM tb_photos ORDER BY photo_id");
$rows_post      = $post->readData("SELECT * FROM tb_post ORDER BY post_id");

$error          = "";
$sukses         = "";
$photo_id       = "";
$photo_id_post  = "";
$photo_title    = "";
$photo_file     = "";
$post_id        = "";
$post_title     = "";

if(isset($_GET["op"])){
	$op = $_GET["op"];
}else{
	$op = "";
}

if(isset($_POST["save"])){
    $photo_id       = $_POST["photo_id"];
    $photo_id_post  = $_POST["photo_id_post"];
    $photo_title    = $_POST["photo_title"];
    $photo_file     = $_POST["photo_file"];

    if($op == "edit"){// update
        $info = $photo->updateData($photo_id, $photo_id_post, $photo_title, $photo_file);

        if($info){
            $sukses = "Berhasil mengupdate data";
        }else{
            $error = "Gagal mengupdate data";
        }
    }else{// create
        $info = $photo->createData($photo_id, $photo_id_post, $photo_title, $photo_file);

        if($info){
            $sukses = "Berhasil memasukkan data";
        }else{
            $error = "Gagal memasukkan data";
        }
    }
}

if($op == "edit"){// show data by id(for update)
    $get_byId_photo = $photo->readData("SELECT * FROM tb_photos WHERE photo_id =" . $_GET["id"])[0];

    $photo_id           = $get_byId_photo["photo_id"];
    $photo_id_post      = $get_byId_photo["photo_id_post"];
    $photo_title        = $get_byId_photo["photo_title"];
    $photo_file         = $get_byId_photo["photo_file"];

    $get_byId_post = $post->readData("SELECT * FROM tb_post WHERE post_id =" . $photo_id_post)[0];
    
    $post_id            = $get_byId_post["post_id"];
    $post_title         = $get_byId_post["post_title"];
}else if($photo_id = ""){
    $error	= "data tidak ditemukan";
}

if($op == "delete"){
    $photo_id = $_GET["id"];
    
    $info = $photo->deleteData($photo_id);

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
                        <a class="nav-link active" aria-current="page" href="form_photos.php">Form Photos</a>
                        <a class="nav-link" href="form_album.php">From Album</a>
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
					<?php header("refresh:2;url=form_photos.php"); endif; ?>
					<?php if($sukses): ?>
						<div class="alert alert-success" role="alert">
							<?php echo $sukses ?>
						</div>
					<?php header("refresh:2;url=form_photos.php"); endif; ?>
                    
                    <!--  -->

                    <form action="" method="POST">
                        <div class="mb-3 row">
                            <label for="photo_id" class="col-sm-3 col-form-label">Id</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="photo_id" name="photo_id" value="<?php echo $photo_id; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="photo_id_post" class="col-sm-3 col-form-label">Post Name</label>
                            <div class="col-sm-9">
                                <select class="form-select" aria-label="Default select example" id="photo_id_post" name="photo_id_post">
                                    <option>-Select Post-</option>
                                    <?php if(isset($_GET["id"])){
                                    if($_GET["id"] == $photo_id){?>
                                    <option selected value="<?php if($photo_id_post = $post_id){ echo $photo_id_post;} ?>" >
                                            <?php $photo_id_post = $post_title; echo $photo_id_post; ?> 
                                        </option>
                                <?php foreach($rows_post as $row_post):
                                    if($post_id == $row_post['post_id']){ continue;} else{ ?>
                                    <option value="<?php if($photo_id_post = $row_post['post_id']){ echo $photo_id_post;} ?>" >
                                            <?php $photo_id_post = $row_post['post_title']; echo $photo_id_post; ?> 
                                        </option>
                                    <?php } endforeach;?>   
                                <?php }}else{ 
                                foreach($rows_post as $row_post):?>
                                <option value="<?php if($photo_id_post = $row_post['post_id']){ echo $photo_id_post;} ?>" >
                                        <?php $photo_id_post = $row_post['post_title']; echo $photo_id_post; ?> 
                                    </option>
                                <?php endforeach; }?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="photo_title" class="col-sm-3 col-form-label">Photo Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="photo_title" name="photo_title" value="<?php echo $photo_title; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="photo_file" class="col-sm-3 col-form-label">Photo File</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="photo_file" name="photo_file" value="<?php echo $photo_file; ?>">
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
                <h5 class="card-header" style="background-color:#cfe9fc; font-weight:bold;">Table Photos</h5>
                <div class="card-body">
                    <table class="table table-hover" style="background-color: #e3f2fd;">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Post Name</th>
                                <th scope="col">Photo Title</th>
                                <th scope="col">Photo File</th>
                                <th colspan="2" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($rows_photo as $row_photo): 
                            $photo_id           =    $row_photo["photo_id"];
                            $photo_id_post      =    $row_photo["photo_id_post"];
                            $photo_title        =    $row_photo["photo_title"];
                            $photo_file         =    $row_photo["photo_file"];
                            ?>
                            <tr>
                            <td><?php echo $photo_id; ?></td>
                            <?php foreach($rows_post as $row_post):
                                if($photo_id_post === $row_post['post_id']):
                                $photo_id_post = $row_post['post_title'];?>
                                <td><?php echo $photo_id_post; ?></td>
                                <?php endif; endforeach; ?>
                                <td><?php echo $photo_title; ?></td>
                                <td><?php echo $photo_file; ?></td>
                                <td>
                                    <a href="form_photos.php?op=edit&id=<?php echo $row_photo["photo_id"]; ?>">
                                        <button type="button" class="btn btn-warning">Edit</button>
                                    </a>
                                    <a  href="form_photos.php?op=delete&id=<?php echo $row_photo["photo_id"]; ?>"
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