<?php 
require("library.php");

$error = "";

if( isset($_POST["login"]) ){
    $login = new Login();

    $info = $login->readData($_POST["username"], $_POST["password"]);

    if($info){ 
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header("refresh:2;url=form_category.php");
    }else{
        $error = "Username dan Password salah";
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
                <a class="navbar-brand" href="#" style="font-weight:bold;">LOGIN</a>
            </div>
        </nav>

        <!--  -->

        <main style="max-width:900px; margin:0 auto;">

            <!-- CARD LOGIN  -->

            <div class="card" style="color:black; background-color: #e3f2fd; margin:20px;">
                <h5 class="card-header" style="background-color:#cfe9fc; font-weight:bold;">Login</h5>
                <div class="card-body">

                    <!-- INFO -->

                    <?php if($error): ?>
						<div class="alert alert-danger" role="alert">
							<?php echo $error ?>
						</div>
					<?php header("refresh:2;url=login.php"); endif; ?>
                    
                    <!--  -->

                    <form action="" method="POST">
                        <div class="mb-3 row">
                            <label for="username" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        </div>
                        <div class="col-sm-13">
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </div>
                    </form>
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