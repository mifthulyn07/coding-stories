<?php 
class Database{
    private $host   = "localhost",
            $user   = "root",
            $pass   = "",
            $db     = "db_crud_oop_php";
    protected $koneksi;

    public function __construct(){
        try{
            $this->koneksi = new PDO("mysql:host=$this->host; dbname=$this->db", $this->user, $this->pass);
            $this->koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo die($e->getMessage());
        }
    }
}

class Category extends Database{
    public function readData($queryRead){
        try{
            // Prepare(): menyiapkan instruksi atau argumen ke mysql.
            // result(): menjalankan query prepared(). 
            // fetchAll(): mengambil semua baris di dalam table database 
            
            $statement = $this->koneksi->prepare($queryRead);
            $statement->execute();
            $data = $statement->fetchAll();
            
            return $data;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function createData($cat_id, $cat_name, $cat_text){
        try{
            // bindParam(): mengikat parameter untuk nama variabel yang ditentukan
            // rowcount(): mengembalikan jumlah baris yang dipengaruhi oleh DELETE, INSERT, UPDATE, atau analisis dampak.
            $queryCreate = "INSERT INTO tb_category (cat_id, cat_name, cat_text) VALUES (?, ?, ?)";
            $data = $this->koneksi->prepare($queryCreate);
            
            $data->bindParam(1, $cat_id);
            $data->bindParam(2, $cat_name);
            $data->bindParam(3, $cat_text);
            $data->execute();

            return $data->rowcount();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function updateData($cat_id, $cat_name, $cat_text){
        try{
            $queryUpdate = "UPDATE tb_category set cat_name=?, cat_text=? where cat_id=?";
            $data = $this->koneksi->prepare($queryUpdate);
            
            $data->bindParam(1, $cat_name);
            $data->bindParam(2, $cat_text);
            $data->bindParam(3, $cat_id);
            $data->execute();

            return $data->rowcount();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function deleteData($cat_id){
        try{
            $queryDelete = "DELETE FROM tb_category where cat_id=?";
            $data = $this->koneksi->prepare($queryDelete);
        
            $data->bindParam(1, $cat_id);

            $data->execute();
            return $data->rowCount();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}

class Post extends Database{
    public function readData($queryRead){
        try{
            // Prepare(): menyiapkan instruksi atau argumen ke mysql.
            // result(): menjalankan query prepared(). 
            // fetchAll(): mengambil semua baris di dalam table database 
            
            $statement = $this->koneksi->prepare($queryRead);
            $statement->execute();
            $data = $statement->fetchAll();
            
            return $data;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function createData($post_id, $post_id_cat, $post_slug, $post_title, $post_text, $post_date){
        try{
            // bindParam(): mengikat parameter untuk nama variabel yang ditentukan
            // rowcount(): mengembalikan jumlah baris yang dipengaruhi oleh DELETE, INSERT, UPDATE, atau analisis dampak.
            $queryCreate = "INSERT INTO tb_post (post_id, post_id_cat, post_slug, post_title, post_text, post_date) VALUES (?, ?, ?, ?, ?, ?)";
            $data = $this->koneksi->prepare($queryCreate);
            
            $data->bindParam(1, $post_id);
            $data->bindParam(2, $post_id_cat);
            $data->bindParam(3, $post_slug);
            $data->bindParam(4, $post_title);
            $data->bindParam(5, $post_text);
            $data->bindParam(6, $post_date);
            $data->execute();

            return $data->rowcount();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function updateData($post_id, $post_id_cat, $post_slug, $post_title, $post_text, $post_date){
        try{
            $queryUpdate = "UPDATE tb_post set post_id_cat=?, post_slug=?, post_title=?, post_text=?, post_date=? where post_id=?";
            $data = $this->koneksi->prepare($queryUpdate);
            
            $data->bindParam(1, $post_id_cat);
            $data->bindParam(2, $post_slug);
            $data->bindParam(3, $post_title);
            $data->bindParam(4, $post_text);
            $data->bindParam(5, $post_date);
            $data->bindParam(6, $post_id);
            $data->execute();

            return $data->rowcount();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function deleteData($post_id){
        try{
            $queryDelete = "DELETE FROM tb_post where post_id=?";
            $data = $this->koneksi->prepare($queryDelete);
        
            $data->bindParam(1, $post_id);

            $data->execute();
            return $data->rowCount();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}

class Photos extends Database{
    public function readData($queryRead){
        try{
            // Prepare(): menyiapkan instruksi atau argumen ke mysql.
            // result(): menjalankan query prepared(). 
            // fetchAll(): mengambil semua baris di dalam table database 
            
            $statement = $this->koneksi->prepare($queryRead);
            $statement->execute();
            $data = $statement->fetchAll();
            
            return $data;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function createData($photo_id, $photo_id_post, $photo_title, $photo_file){
        try{
            // bindParam(): mengikat parameter untuk nama variabel yang ditentukan
            // rowcount(): mengembalikan jumlah baris yang dipengaruhi oleh DELETE, INSERT, UPDATE, atau analisis dampak.
            $queryCreate = "INSERT INTO tb_photos (photo_id, photo_id_post, photo_title, photo_file) VALUES (?, ?, ?, ?)";
            $data = $this->koneksi->prepare($queryCreate);
            
            $data->bindParam(1, $photo_id);
            $data->bindParam(2, $photo_id_post);
            $data->bindParam(3, $photo_title);
            $data->bindParam(4, $photo_file);
            $data->execute();

            return $data->rowcount();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function updateData($photo_id, $photo_id_post, $photo_title, $photo_file){
        try{
            $queryUpdate = "UPDATE tb_photos set photo_id_post=?, photo_title=?, photo_file=? where photo_id=?";
            $data = $this->koneksi->prepare($queryUpdate);
            
            $data->bindParam(1, $photo_id_post);
            $data->bindParam(2, $photo_title);
            $data->bindParam(3, $photo_file);
            $data->bindParam(4, $photo_id);
            $data->execute();

            return $data->rowcount();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function deleteData($photo_id){
        try{
            $queryDelete = "DELETE FROM tb_photos where photo_id=?";
            $data = $this->koneksi->prepare($queryDelete);
        
            $data->bindParam(1, $photo_id);

            $data->execute();
            return $data->rowCount();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}

class Album extends Database{
    public function readData($queryRead){
        try{
            // Prepare(): menyiapkan instruksi atau argumen ke mysql.
            // result(): menjalankan query prepared(). 
            // fetchAll(): mengambil semua baris di dalam table database 
            
            $statement = $this->koneksi->prepare($queryRead);
            $statement->execute();
            $data = $statement->fetchAll();
            
            return $data;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function createData($album_id, $album_id_photo, $album_title){
        try{
            // bindParam(): mengikat parameter untuk nama variabel yang ditentukan
            // rowcount(): mengembalikan jumlah baris yang dipengaruhi oleh DELETE, INSERT, UPDATE, atau analisis dampak.
            $queryCreate = "INSERT INTO tb_album (album_id, album_id_photo, album_title) VALUES (?, ?, ?)";
            $data = $this->koneksi->prepare($queryCreate);
            
            $data->bindParam(1, $album_id);
            $data->bindParam(2, $album_id_photo);
            $data->bindParam(3, $album_title);
            $data->execute();

            return $data->rowcount();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function updateData($album_id, $album_id_photo, $album_title){
        try{
            $queryUpdate = "UPDATE tb_album set album_id_photo=?, album_title=? where album_id=?";
            $data = $this->koneksi->prepare($queryUpdate);
            
            $data->bindParam(1, $album_id_photo);
            $data->bindParam(2, $album_title);
            $data->bindParam(3, $album_id);
            $data->execute();

            return $data->rowcount();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function deleteData($album_id){
        try{
            $queryDelete = "DELETE FROM tb_album where album_id=?";
            $data = $this->koneksi->prepare($queryDelete);
        
            $data->bindParam(1, $album_id);

            $data->execute();
            return $data->rowCount();
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}

class Login extends Database{
    public function readData($username, $password){
        try{
            // Prepare(): menyiapkan instruksi atau argumen ke mysql.
            // result(): menjalankan query prepared(). 
            // fetchAll(): mengambil semua baris di dalam table database 
            $queryRead = "SELECT * FROM tb_user WHERE username=? AND password=?";
            $statement = $this->koneksi->prepare($queryRead);
            
            $statement->bindParam(1, $username);
            $statement->bindParam(2, $password);
            
            $statement->execute();
            $data = $statement->fetchAll();
            
            return $data;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
?>
