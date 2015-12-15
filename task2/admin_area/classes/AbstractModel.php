<?php
include_once __DIR__.'/DB.php';

abstract class AbstractModel 
{
        
     protected static $table;
    
     protected $data = [];
     
     public function __set($k, $v)
     {
        $this->data[$k] = $v;
     }

     public function __get($k)
     {
       return $a = $this->data[$k];

     } 
     public function __isset($k)
     {
       return isset($this->data[$k]);
     }
    
    public static function findAll()
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table;
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql);
     }
    
       public  static  function findOne ($id)
       {
          $class = get_called_class();
          $sql = "SELECT * FROM " . static::$table . " WHERE product_id = :id";
          $db = new DB;
          $db->setClassName($class);
          return $db->query($sql, [":id"=> $id])[0];
        }
        
       public  static  function findUsersOne ($id)
       {
          $class = get_called_class();
          $sql = "SELECT * FROM " . static::$table . " WHERE user_id = :id";
          $db = new DB;
          $db->setClassName($class);
          return $db->query($sql, [":id"=> $id])[0];
        }
        
        
        
    protected   function insert ()
     {
        $cols = array_keys($this->data);
         
        $data = [];
       
        foreach($cols as $col) {
            
        $data[':' . $col] = $this->data[$col];
           
        }
        $sql = "INSERT INTO " . static::$table . "
         (" . implode(',', $cols) . ")
        
        VALUES
        
        (" . implode(',', array_keys($data)) . ")
        
        ";
        $db = new DB;
        
        $db->execute($sql, $data);
        
        $this->id=$db->lastInsertId();
        
    
        
     }
 
  
     
     public function save()
     {        
           $this->insert();
          
          
     }

    public function Delete()
    {
       $sql = "DELETE FROM " . static::$table . " WHERE id = :id";
       $db = new DB;
       $db->query($sql, [":id" => $this->id]);
       
    }
    
  
}