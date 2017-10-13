<?php
class factory
{
    private $_host;
    private $_user;
    private $_password;
    private $_db;
    private static $_compteur = 0;
    public function __construct($host,$user,$password,$db)
    {
        if(factory::getCompteur()<1)
        {
            $bdd = null;
            try
            {
                $bdd = new PDO('mysql:host='.$host.';DBName='.$db, $user, $password); 
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }
            self::$_compteur++;
        }
        else
        {
            echo 'Connexion déjà instanciée';
        }
    }
    public function setHost($host)
    {
        $this->_host=$host;
    }
    public function setuser($id)
    {
        $this->_user=$id;
    }
    public function setPassword($password)
    {
        $this->_password=$password;
    }
    public function setDb($db)
    {
        $this->_db=$db;
    }
    public function getCompteur()
    {
        return self::$_compteur;
    }
}
?>