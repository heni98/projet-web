<?php
/**
 * Created by PhpStorm.
 * User: Heni Hcini
 * Date: 28/03/2019
 * Time: 16:20
 */
include_once ('../config.php');
include_once ('../entities/Produit.php');

class ProduitService
{

    private $db;

    /**
     * ProduitService constructor.
     */
    public function __construct()
    {
        //1- creer une instance de la classe config
        $this->db=new config();
        //2-faire la cnx avec la base de donnée
        $this->db=$this->db->getCnx();
    }

    public function createProduct($produit)
    {
        $sql = "INSERT INTO `produit` (`nom`, `marque`, `id_categorie`, `quantite`, `prix`, `description`, `image`) VALUES (:nom , :marque , :idcat , :quantite , :prix , :description, :photo)";

        $req=$this->db->prepare($sql);

        $req->bindValue(':nom' , $produit->getNom() );
        $req->bindValue(':marque' , $produit->getMarque() );
        $req->bindValue(':idcat' , $produit->getIdCategorie() );
        $req->bindValue(':quantite' , $produit->getQuantite() );
        $req->bindValue(':prix' , $produit->getPrix() );
        $req->bindValue(':description' , $produit->getDescription() );
        $req->bindValue(':photo' , $produit->getPhoto() );
        $req->execute();
    }

}