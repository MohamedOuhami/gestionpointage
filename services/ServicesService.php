<?php

include_once 'beans/Service.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class ServicesService implements IDao{
    private $connexion;

    function __construct(){
        $this->connexion = new Connexion();
    }

    function create($o){
        $query = 'INSERT INTO service(NULL,?,?)';
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getCode(),$o->getName() )) or die('Error');
    }
    function update($o){
        $query = 'UPDATE service SET code = ?,name = ? WHERE id = ?';
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getCode(),$o->getName(),$o->getId())) or die("Erreur");
        
    }
    function delete($o){
        $query = 'DELETE FROM service WHERE id=?';
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getId())) or die("Erreur");
        
    }
    function findAll(){
        $query = 'SELECT * FROM service';
        $req = $this->connexion->getConnexion()->prepare($query);
        $services = $req->fetchAll(PDO::FETCH_OBJ);
        return $services;
    }
    function findById($id){
        $query = 'SELECT * FROM service WHERE id=?';
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("Erreur");
        $res = $req->fetch(PDO::FETCH_OBJ);
        $service = new Service($res->getId(),$res->getCode(),$res->getName());
        return $service;
        
    }
}