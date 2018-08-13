<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 13/08/2018
 * Time: 10:05
 */

class Personne
{
    private $nom;

    private $email;

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        if (strlen($nom<20)){
        $this->nom = $nom;
        }
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function showPersonne(){
       return(ucfirst(strtolower($this->nom)). ' : '. $this->email );
    }

}