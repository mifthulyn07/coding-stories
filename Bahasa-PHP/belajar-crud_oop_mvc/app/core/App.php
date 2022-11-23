<?php
class App{
     public function parseURL(){
          // ROUTING = RUTE
          // routing berhubungan dengan url dari website kita, termasuk pembuatan .htaccess di folder app dan public
          // gimana caranya kita ngelola url itu buat tepat ngarahin ke Controller yang dituju, 
          // tentunya dengan rapih dan cantik.  
          if(isset($_GET['url'])){// $_GET['url']: lihat di public/.htaccess
               // rtrim(): digunakan untuk menghapus slash(/) di akhir link 
               $url = rtrim($_GET['url'], '/');
               // filter_var(): digunakan untuk memfilter url dari karakter — karakter asing yang memungkinkan website kita dihack
               $url = filter_var($url, FILTER_SANITIZE_URL);
               // explode(): digunakan untuk memisah string dalam bentuk array
               $url = explode('/', $url);
               
               return $url;
          }
     }

     // property ini akan digunakan untuk nilai default controller, method, dan parameter
     protected $controller = 'Home';
     protected $method = 'index';
     protected $params = [];
     
     public function __construct(){
          // output: array string url 
          // co:array index[0]:Home(ini akan dijadikan controller), index[1]:page(ini akan dijadikan method), index[2]-[dst]: akan dijadikan parameter
          $url = $this->parseURL();
          
          // CONTROLLER 
          if(isset($url)){
               if(file_exists('../app/controllers/' . $url[0] . '.php')){
                    //menjadikan string setelah "../app/controllers/" atau "belajar-crud_oop_mvc/public/" sebagai controller
                    $this->controller = $url[0];
                    // Unset(): digunakan untuk membuang variabel yang nantinya untuk membuat array params
                    unset($url[0]);
               }
          }

          // menggabungkan file setelah menetapkan controller
          require_once("../app/controllers/" . $this->controller . '.php');
          $this->controller = new $this->controller;

          // METHOD 
          if (isset($url[1])){
               if(method_exists($this->controller, $url[1])){
                    //menjadikan string setelah "../app/controllers/(controller)/" atau "belajar-crud_oop_mvc/public/(controller)" sebagai method
                    $this->method = $url[1];
                    // Unset(): digunakan untuk membuang variabel yang nantinya untuk membuat array params
                    unset($url[1]);
               }
          }

          // karna index[0]: controller yang sudah di inset()/dihilangkan, index[1]:method yang sudah di inset()/dihilangkan
          // hasilnya berupa index[2]:(parameter 1), index[dst]:(parameter dst)
          // var_dump($url);

          // PARAMS 
          if(!empty($url)){
               // array_values(): mengembalikan fungsi array yang berisi semua nilai-nilai array
               // hasilnya menjadikan index[0]:(parameter 1), index[dst]:(parameter dst)
               $this->params = array_values($url);
          }

          // jalankan controller & method, serta kirimkan params jika ada 
          // call_user_func_array(): berfungsi untuk membuat satuan array menjadi paramater/argumen dari sebuah function
          call_user_func_array([$this->controller, $this->method], $this->params);
     }
}
?>