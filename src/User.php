<?php


namespace App;


class User
{
    private $prenom;
    private $nom;
    private $email;
    private $age;

    /**
     * User constructor.
     * @param string $prenom
     * @param string $nom
     * @param string $email
     * @param $age
     */
    public function __construct(string $prenom, string $nom, string $email, int $age)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->email = $email;
        $this->age = $age;
    }

    public function isValid()
    {
        if(is_null($this->prenom) || empty($this->prenom)) {
            throw new \Exception('prenom');
        }

        if(is_null($this->nom) || empty($this->nom)) {
            throw new \Exception('nom');
        }

        if (!is_null($this->email) || !empty($this->email)) {
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                throw new \Exception('mail');
            }
        } else {
            throw new \Exception('mail vide');
        }

        if($this->age < 13) {
            throw new \Exception('age');
        }

        return true;
    }


}