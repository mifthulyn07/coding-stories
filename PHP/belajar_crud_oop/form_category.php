<?php 
require("library.php");
require("session.php");

$category = new Category();

// read 
$rows_category = $category->readData("SELECT * FROM tb_category ORDER BY cat_id");


$error      = "";
$sukses     = "";
$cat_id     = "";
$cat_name   = "";
$cat_text   = "";

if(isset($_GET["op"])){
	$op = $_GET["op"];
}else{
	$op = "";
}

if(isset($_POST["save"])){
    $cat_id     = $_POST["cat_id"];
    $cat_name   = $_POST["cat_name"];
    $cat_text   = $_POST["cat_text"];

    if($op == "edit"){// update
        $info = $category->updateData($cat_id, $cat_name, $cat_text);

        if($info){
            $sukses = "Berhasil mengupdate data";
        }else{
            $error = "Gagal mengupdate data";
        }
    }else{// create
        $info = $category->createData($cat_id, $cat_name, $cat_text);

        if($info){
            $sukses = "Berhasil memasukkan data";
        }else{
            $error = "Gagal memasukkan data";
        }
    }
}

if($op == "edit"){// show data by id(for update)
    $cat_id = $_GET["id"];
    $get_byId_category = $category->readData("SELECT * FROM tb_category WHERE cat_id = $cat_id")[0];
    
    $cat_id     = $get_byId_category["cat_id"];
    $cat_name   = $get_byId_category["cat_name"];
    $cat_text   = $get_byId_category["cat_text"];

}else if($cat_id = ""){
    $error	= "data tidak ditemukan";
}

if($op == "delete"){
    $cat_id = $_GET["id"];
    
    $info = $category->deleteData($cat_id);

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
                        <a class="nav-link active" aria-current="page" href="form_category.php">Form Category</a>
                        <a class="nav-link" href="form_post.php">Form Post</a>
                        <a class="nav-link" href="form_photos.php">Form Photos</a>
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
					<?php header("refresh:2;url=form_category.php"); endif; ?>
					<?php if($sukses): ?>
						<div class="alert alert-success" role="alert">
							<?php echo $sukses ?>
						</div>
					<?php header("refresh:2;url=form_category.php"); endif; ?>
                    
                    <!--  -->

                    <form action="" method="POST">
                        <div class="mb-3 row">
                            <label for="cat_id" class="col-sm-3 col-form-label">Id</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="cat_id" name="cat_id" value="<?php echo $cat_id; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="cat_name" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="cat_name" name="cat_name" value="<?php echo $cat_name; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="cat_text" class="col-sm-3 col-form-label">Category Text</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="cat_text" name="cat_text" value="<?php echo $cat_text; ?>">
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
                <h5 class="card-header" style="background-color:#cfe9fc; font-weight:bold;">Table Category</h5>
                <div class="card-body">
                    <table class="table table-hover" style="background-color: #e3f2fd;">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama Category</th>
                                <th scope="col">Text Category</th>
                                <th colspan="2" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($rows_category as $row_category): ?>
                            <tr>
                                <td><?php echo $row_category["cat_id"]; ?></td>
                                <td><?php echo $row_category["cat_name"]; ?></td>
                                <td><?php echo $row_category["cat_text"]; ?></td>
                                <td>
                                    <a href="form_category.php?op=edit&id=<?php echo $row_category["cat_id"]; ?>">
                                        <button type="button" class="btn btn-warning">Edit</button>
                                    </a>
                                    <a  href="form_category.php?op=delete&id=<?php echo $row_category["cat_id"]; ?>"
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