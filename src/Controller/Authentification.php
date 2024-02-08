<?php
namespace Controller;

use Others\Reponse;
use Model\Users;
use Others\Authentification as OtherAuthentification;

class Authentification extends Controller {

    public function login() {
        if ( !filter_has_var(INPUT_POST, "email") && !filter_has_var(INPUT_POST, "password") ) {
            Reponse::create(Reponse::ERROR, "Paramètre incorrect.")->sendJson();
          
        }

        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password", FILTER_DEFAULT);
        $passHash = md5($password);

        $verifUser = Users::isExist($email, $passHash);

            
        if ($verifUser) OtherAuthentification::connectClient($verifUser);
        
        Reponse::create($verifUser ? Reponse::OK : Reponse::ERROR, null)->sendJson();

    }

    public static function logout(){
        OtherAuthentification::logout();
    }

}