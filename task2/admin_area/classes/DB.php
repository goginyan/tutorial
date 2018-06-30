<?php
 
class DB
{
    
    private  $dbh;
    private  $className = 'stdClass';

    
    public function __construct()
    {
             
       $this->dbh = new PDO("mysql:host=localhost;dbname=task", "root", "password");
    }
 
 
    public function setClassName($className)
    {
        $this->className = $className;
    }

    public function  query ($sql, $parms = [])
    {
        $sth = $this->dbh->prepare($sql);
        
        $sth->execute($parms);
        
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }

    public function  execute ($sql, $parms = [])
    {
        $sth = $this->dbh->prepare($sql);
        
       return $sth->execute($parms);
        
    }
   
   
    public function lastInsertId()
    {
         return $this->dbh->lastInsertId();        
    }
  

}
