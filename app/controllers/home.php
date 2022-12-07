<?php

class Home extends Controller
{
    public function index(){
        $this->view('home/index');
    }

    public function register(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            function get_data($data) {
                $username = $data['username'];
                $file_name = 'assets/json/users.json';
                if(file_exists("$file_name")) { 
                    $current_data=file_get_contents("$file_name");
                    $array_data=json_decode($current_data, true);
                    $extra=array(
                        'username' => $_POST['username'],
                        'phone' => $_POST['phone'],
                        'email' => $_POST['email'],
                        'password' => $_POST['password'],
                    );
                    $array_data[]=$extra;
                    //echo "file exist<br/>";
                    return json_encode($array_data);
                }else{
                    $datae=array();
                    $datae[]=array(
                        'username' => $_POST['username'],
                        'phone' => $_POST['phone'],
                        'email' => $_POST['email'],
                        'password' => $_POST['password'],
                    );
                    //echo "file not exist<br/>";
                    return json_encode($datae);   
                }
            }
  
            $file_name = 'assets/json/users.json';
              
            if(file_put_contents("$file_name", get_data($data))) {
                //echo 'success';
                $this->view('home/register');
            }                
            else {
                echo 'There is some error';                
            }
        }else{
            $this->view('home/register');
        }
        $this->view('home/register');
    }

    public function validateUsername($username){
        $texto = trim($username);
        if($texto=="" && trim($texto)==""){
            return false;
        }else{
            $patron = '/^[a-z]*$/';
            if(preg_match($patron,$texto)){
                return true;   
            }else{
                return false;
            }
        }   
    }

    private function validatePhone(){
        
    }

    private function validateEmail(){
        
    }
    
    private function validatePassword(){
        
    }

    public function login($data = []){
        echo '<pre>_REQUEST: '; print_r($_REQUEST); echo '</pre>';
        echo '<pre>_POST: '; print_r($_POST); echo '</pre>';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        }else{
            $this->view('home/login');
        }
    }
}