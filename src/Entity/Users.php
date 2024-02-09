<?php
namespace Entity;


class Users extends Entity  {

    public int|null $id;
    public string|null $firstName;
    public string|null $lastName;
    public string|null $email;
    public string|null $password;
    public int|null $permission;
    public string|null $createdDate;

    // Enumérations permissions
    const ADMIN = 1;
    const USER = 2;

    public static function hasPermission(int $perm): bool {
        if ( isset($_SESSION["permission"]) ){
            return $_SESSION["permission"] <= $perm;
        }
        return false;
    }

    

}