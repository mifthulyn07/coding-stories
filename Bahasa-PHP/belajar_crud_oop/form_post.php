<?php 
require("library.php");
require("session.php");

$post = new Post();
$category = new Category();

// read 
$rows_post = $post->readData("SELECT * FROM tb_post ORDER BY post_id");
$rows_category = $category->readData("SELECT * FROM tb_category ORDER BY cat_id");


$error          = "";
$sukses         = "";
$post_id        = "";
$post_id_cat    = "";
$post_slug      = "";
$post_title     = "";
$post_text      = "";
$post_date      = "";
$cat_id         = "";
$cat_name       = "";

if(isset($_GET["op"])){
	$op = $_GET["op"];
}else{
	$op = "";
}

if(isset($_POST["save"])){
    $post_id        = $_POST["post_id"];
    $post_id_cat    = $_POST["post_id_cat"];
    $post_slug      = $_POST["post_slug"];
    $post_title     = $_POST["post_title"];
    $post_text      = $_POST["post_text"];
    $post_date      = $_POST["post_date"];

    if($op == "edit"){// update
        $info = $post->updateData($post_id, $post_id_cat, $post_slug, $post_title, $post_text, $post_date);

        if($info){
            $sukses = "Berhasil mengupdate data";
        }else{
            $error = "Gagal mengupdate data";
        }
    }else{// create
        $info = $post->createData($post_id, $post_id_cat, $post_slug, $post_title, $post_text, $post_date);

        if($info){
            $sukses = "Berhasil memasukkan data";
        }else{
            $error = "Gagal memasukkan data";
        }
    }
}

if($op == "edit"){// show data by id(for update)
    $get_byId_post = $post->readData("SELECT * FROM tb_post WHERE post_id =" . $_GET["id"])[0];

    $post_id        = $get_byId_post["post_id"];
    $post_id_cat    = $get_byId_post["post_id_cat"];
    $post_slug      = $get_byId_post["post_slug"];
    $post_title     = $get_byId_post["post_title"];
    $post_text      = $get_byId_post["post_text"];
    $post_date      = $get_byId_post["post_date"];

    $get_byId_category = $category->readData("SELECT * FROM tb_category WHERE cat_id =" . $post_id_cat)[0];
    
    $cat_id         = $get_byId_category["cat_id"];
    $cat_name       = $get_byId_category["cat_name"];
}else if($post_id = ""){
    $error	= "data tidak ditemukan";
}

if($op == "delete"){
    $post_id = $_GET["id"];
    
    $info = $post->deleteData($post_id);

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
                        <a class="nav-link active" aria-current="page" href="form_post.php">Form Post</a>
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
					<?php header("refresh:2;url=form_post.php"); endif; ?>
					<?php if($sukses): ?>
						<div class="alert alert-success" role="alert">
							<?php echo $sukses ?>
						</div>
					<?php header("refresh:2;url=form_post.php"); endif; ?>
                    
                    <!--  -->

                    <form action="" method="POST">
                        <div class="mb-3 row">
                            <label for="post_id" class="col-sm-3 col-form-label">Id</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="post_id" name="post_id" value="<?php echo $post_id; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="post_id_cat" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <select class="form-select" aria-label="Default select example" id="post_id_cat" name="post_id_cat">
                                    <option>-Select Category-</option>
                                    <?php if(isset($_GET["id"])){
                                    if($_GET["id"] == $post_id){?>
                                    <option selected value="<?php if($post_id_cat = $cat_id){ echo $post_id_cat;} ?>" >
                                        <?php $post_id_cat = $cat_name; echo $post_id_cat; ?> 
                                    </option>
                                    <?php foreach($rows_category as $row_category):
                                    if($cat_id == $row_category['cat_id']){ continue;} else{ ?>
                                    <option value="<?php if($post_id_cat = $row_category['cat_id']){ echo $post_id_cat;} ?>" >
                                        <?php $post_id_cat = $row_category['cat_name']; echo $post_id_cat; ?> 
                                    </option>
                                    <?php } endforeach;?>   
                                    <?php }}else{ 
                                    foreach($rows_category as $row_category):?>
                                    <option value="<?php if($post_id_cat = $row_category['cat_id']){ echo $post_id_cat;} ?>" >
                                        <?php $post_id_cat = $row_category['cat_name']; echo $post_id_cat; ?> 
                                    </option>
                                    <?php endforeach; }?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="post_slug" class="col-sm-3 col-form-label">Post Slug</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="post_slug" name="post_slug" value="<?php echo $post_slug; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="post_title" class="col-sm-3 col-form-label">Post Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="post_title" name="post_title" value="<?php echo $post_title; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="post_text" class="col-sm-3 col-form-label">Post Text</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="post_text" name="post_text" value="<?php echo $post_text; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="post_date" class="col-sm-3 col-form-label">Post Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="post_date" name="post_date" value="<?php echo $post_date; ?>">
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
                <h5 class="card-header" style="background-color:#cfe9fc; font-weight:bold;">Table Post</h5>
                <div class="card-body">
                    <table class="table table-hover" style="background-color: #e3f2fd;">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Post Slug</th>
                                <th scope="col">Post Title</th>
                                <th scope="col">Post Text</th>
                                <th scope="col">Post Date</th>
                                <th colspan="2" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($rows_post as $row_post): 
                            $post_id        =    $row_post["post_id"];
                            $post_id_cat    =    $row_post["post_id_cat"];
                            $post_slug      =    $row_post["post_slug"];
                            $post_title     =    $row_post["post_title"];
                            $post_text      =    $row_post["post_text"];
                            $post_date      =    $row_post["post_date"];
                            ?>
                            <tr>
                                <td><?php echo $post_id; ?></td>
                                <?php foreach($rows_category as $row_category):
                                    if($post_id_cat === $row_category['cat_id']):
                                        $post_id_cat = $row_category['cat_name'];?>
                                <td><?php echo $post_id_cat; ?></td>
                                <?php endif; endforeach; ?>
                                <td><?php echo $post_slug; ?></td>
                                <td><?php echo $post_title; ?></td>
                                <td><?php echo $post_text; ?></td>
                                <td><?php echo $post_date; ?></td>
                                <td>
                                    <a href="form_post.php?op=edit&id=<?php echo $row_post["post_id"]; ?>">
                                        <button type="button" class="btn btn-warning">Edit</button>
                                    </a>
                                    <a  href="form_post.php?op=delete&id=<?php echo $row_post["post_id"]; ?>"
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