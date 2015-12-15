<?php

class View 
{
    protected $data = [];
    
   
    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }
    public function __get($k)
    {
        return $this->data[$k];
    }


   
   public function render($template)
    {
        foreach($this->data as $key=>$val){
            $$key = $val;
            
        }
        ob_start();
        include_once __DIR__ . '/../view/'. $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    
    public function display($template)
    {
       return $this->render($template); 
    }
    
 
}