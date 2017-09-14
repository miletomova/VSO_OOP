<?php 

    class PropertyTest {
    
    private $data;   

    public function __set($name, $value)
    {
        echo "Setting '$name' to '$value'\n";
        $this->data = $value;
    }

    public function __get($name)
    {
        echo "Getting '$name'\n";
        return $this->$name;
        
    }

}
