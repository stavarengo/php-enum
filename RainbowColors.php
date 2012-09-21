<?php
require_once 'Enum.php';

class RainbowColors extends Enum
{
	/**
	 * @var RainbowColors
	 */
    public static $RED = array(1, 'Red');
	/**
	 * @var RainbowColors
	 */
    public static $ORANGE = array(2, 'Orange');
	/**
	 * @var RainbowColors
	 */
    public static $YELLOW = array(3, 'Yellow');
	/**
	 * @var RainbowColors
	 */
    public static $GREEN = array(4, 'Green');
	/**
	 * @var RainbowColors
	 */
    public static $BLUE = array(5, 'Blue');
	/**
	 * @var RainbowColors
	 */
    public static $INDIGO = array(6, 'Indigo');
	/**
	 * @var RainbowColors
	 */
    public static $VIOLET = array(7, 'Violet');
    
}

RainbowColors::start('RainbowColors');