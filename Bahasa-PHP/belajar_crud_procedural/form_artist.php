<?php 
ob_start();//for fix info in header
require("library_artist.php");

// read
$rows_artist = readData("SELECT * FROM tb_artist ORDER BY art_id");

$art_id 	= "";
$art_name 	= "";
$success 	= "";
$error 		= "";

if(isset($_POST['btnCreate'])){
	$art_id = htmlspecialchars($_POST['art_id']);
	$art_name = htmlspecialchars($_POST['art_name']);
	
    if($art_id && $art_name){
        $info = createData($art_id, $art_name);

        if($info > 0){
            $success = "Successfully entered new data";
        }else if($info < 0){
            foreach($rows_artist as $row_artist):
                if($art_id == $row_artist["art_id"]){
                    $error = "Id already registered";
                } 
            endforeach;
        }else{
            $error = "Failed to enter new data";
        }
    }else{
        $error = "Make sure all input is filled";
    }
}

if(isset($_POST['btnEdit'])){
	$art_id = htmlspecialchars($_POST['art_id']);
	$art_name = htmlspecialchars($_POST['art_name']);
	
    if($art_id && $art_name){
        $info = updateData($art_id, $art_name);

        if($info > 0){
            $success = "Data updated successfully";
        }else if($info == 0){
            $success = "Cancel change data";
        }else{
            $error = "Data failed to update";
        }
    }else{
        $error = "Make sure all input is filled";
    }
}

if(isset($_GET['btnDelete'])){
	$art_id = $_GET['id'];

	$info = deleteData($art_id);

	if($info){
		$success = "Successfully deleted data";
	}else{
		$error	= "Failed to delete data";
	}
}

if(isset($_POST["btnSearch"])){
    $keyword = $_POST['keyword'];
    $rows_artist = readData("SELECT * FROM tb_artist WHERE art_id LIKE '%$keyword%' OR art_name LIKE '%$keyword%'");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Artist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color:#082032; color:white;">
    <div class="container" style="max-width:1000px;">

        <!-- HEADER -->

        <header style="color:white; padding:30px; text-align:center;">
            <h1>QUIZ ASSIGNMENT FOR ODD NIM</h1>
            <h5>-Task assigned as course of study-</h5>
            <p>By: Miftahul Ulyana Hutabarat - 0702192031</p>
        </header>

        <!-- NAV -->

        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #334756">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #FF4C29">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="form_artist.php">Form Artist</a>
                        <a class="nav-link" href="form_album.php">Form Album</a>
                        <a class="nav-link" href="form_track.php">Form Track</a>
                        <a class="nav-link" href="form_played.php">Form Played</a>
                        <a class="nav-link" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- MAIN -->
        
        <main style="max-width:800px; margin:10px auto;">
            
            <!-- INFO -->
                        
            <?php if($error): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php header("refresh:1;url=form_artist.php"); endif; ?>
            <?php if($success): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $success; ?>
                </div>
            <?php header("refresh:1;url=form_artist.php"); endif; ?>

            <!-- CARD TABLE -->
        
            <div class="card" style="background-color:#334756; margin:20px;">
                <div class="card-header" style="background-color:#2C394B; font-weight:bold;">
                    Table Artist
                </div>
                <div class="card-body">
                    
                    <!-- BUTTON ADD DATA -->

                    <div class="mb-3 row" >
                        <button type="button" class="btn btn-primary col-sm-2" style="background-color: #FF4C29; border: 1px solid #FF4C29; margin-left:12px;" data-bs-toggle="modal" data-bs-target="#modalCreate">
                            Add Data
                        </button>
                    </div>
                    
                    <!-- POPUP MODAL CREATE DATA -->

                    <div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="background-color:#2C394B;">
                                <form action="" method="POST">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Create Data</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="background-color:#334756;">
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">Id</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="art_id">	
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-3 col-form-label">Artist Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="art_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name ="btnCreate" class="btn btn-primary" style="background-color: #FF4C29; border: 1px solid #FF4C29;">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- SEARCH -->
                    
                    <form method="POST">
                        <div class="mb-3 row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="keyword" autofocus placeholder="Search artist name">
                            </div>
                            <div class="col-sm-1">
                                <button type="submit" name="btnSearch" class="btn btn-light">Search</button>
                            </div>
                        </div>
                    </form>

                    <!-- TABLE  -->

                    <table class="table table-hover text-white">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Artist Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($rows_artist as $row_artist):?>
                            <tr>
                                <td scope = "row"> <?php echo $row_artist["art_id"]; ?> </td>
                                <td scope = "row"> <?php echo $row_artist["art_name"]; ?> </td>
                                <td scope = "row">

                                    <!-- BUTTON EDIT DATA-->

                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit<?php echo $row_artist["art_id"];?>">
                                        Edit
                                    </button>

                                    <!-- POPUP MODAL EDIT DATA  -->

                                    <div class="modal fade" id="modalEdit<?php echo $row_artist["art_id"];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="background-color:#2C394B; color:white;">
                                                <form action="" method="POST">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body" style="background-color:#334756;">
                                                        <div class="mb-3 row">
                                                            <label for="staticEmail" class="col-sm-3 col-form-label">Id</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="art_id" value="<?php echo $row_artist["art_id"]; ?>" readonly style="background-color:#cccccc;">	
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="staticEmail" class="col-sm-3 col-form-label">Artist Name</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="art_name" value="<?php echo $row_artist["art_name"]; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" name="btnEdit" class="btn btn-primary" style="background-color: #FF4C29; border: 1px solid #FF4C29;">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- BUTTON DELETE DATA  -->

                                    <a 	href="form_artist.php?btnDelete&id=<?php echo $row_anggota["id_agt"];?>" 
                                        onclick="return confirm('yakin ingin menghapus data?')">
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>

        <!-- FOOTER -->

        <footer style="text-align:center; padding:8px; background-color: #334756;">
            <p>© 2021 Miftahul Ulyana Hutabarat</p>
        </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>