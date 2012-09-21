<?php
abstract class Enum
{
    private $value = null;

    private $name = null;
    
    private static $alreadyInitiated = array();
    
    /**
    * @param int $value
    */
    private function __construct($value, $name = null)
    {
    	$this->value = $value;
    	$this->name = ($name ? $name : $value);;
    }    
    
    public static function start($class)
    {
    	if (array_key_exists($class, self::$alreadyInitiated)) return;
    	self::$alreadyInitiated[$class] = true;
    	
    	$reflect = new ReflectionClass($class);
    	$properties = $reflect->getStaticProperties();
    	
    	foreach ($properties as $property) {
    		if (is_array($property)) {
    			$newValue = new $class($property[0], $property[1]);
    		} else {
    			$newValue = new $class($property);
    		}
    		$reflect->setStaticPropertyValue('RED', $newValue);
    	}
    }
    
    public function getValue()
    {
    	return (int)$this->value;
    }
    
    public function __toString() 
    {
        return (string)$this->name;
    }

    public function equals($other) 
    {
        if ($other === null || !is_object($other)) {
            return false;
        }
        if (!$other instanceof Enum || get_class($this) != get_class($other)) {
        	return false;
        }
        
        return ($this->getValue() == $other->getValue());
    }	
}