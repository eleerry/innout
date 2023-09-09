<?php

require_once(realpath(MODEL_PATH . '/User.php'));

class Login extends Model {
    public function checkLogin(){
        echo "THIS->EMAIL: $this->email <br>";
        $user = User::getOne(['email' => $this->email]);
        echo "USER->EMAIL $user->email <br>";
        if($user){
            if(password_verify($this->password, $user->password)){
                return $user;
            }
        }
        throw new Exception();
    }
}

?>