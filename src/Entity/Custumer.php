<?php
namespace Entity;

class Custumer extends Entity {

    public int|null $id;
    public string|null $name;
    public string|null $address;
    public string|null $postcode;
    public string|null $city;
    public string|null $email;
    public string|null $phoneNumber;
    public string|null $site;
    public string|null $siren;

    public function __construct(array $data) {
        parent::__construct($data);
    }

}