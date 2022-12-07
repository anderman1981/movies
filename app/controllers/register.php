
<?php

class Register extends Controller
{
    
    public $username;
    public $phone;
    public $email;
    public $password;

    private $_user = false;

    public function register($data = []){
        

        echo '<pre>'; print_r($data); echo '</pre>';
        $this->view('register/register');
    }


}