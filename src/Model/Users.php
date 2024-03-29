<?php
namespace Model;

use PDO;

class Users extends Model {

    protected static $table = "users"; 
    protected static $id = "id";


    public static function isExist($email, $password) {
        $model = self::getInstance();

        $sql = "SELECT 
                    *
                FROM " . static::$table . " as u
                WHERE 
                    u.email = :email AND
                    u.password = :password
        ";

        $req = $model->prepare($sql);
        
        $req->bindParam(':email', $email, PDO::PARAM_STR);
        $req->bindParam(':password', $password, PDO::PARAM_STR);

        $req->execute();
 
        return $req->rowCount() >= 1 ? $req->fetch(PDO::FETCH_ASSOC) : false;
    }


}