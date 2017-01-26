<?php

require_once __DIR__ . "/../base/localWarrior.php";


$GLOBALS['warriorID'] = 'GRRGRR';

// Définissez vos class de combattants
abstract class Warrior extends LocalWarrior {

	public $id;
	public $name;
	public $speed;
	public $life;
	public $shield;
	public $imageUrl;
	public $weapon;

	public function SetWeapon($Weapon)
	{
		$this->weapon = $Weapon;
	}

	public function __construct($id)
	{
		$this->id = $id;
		$this->speed = 30;
		$this->life = 100;
		$this->shield = 20;
	}

	public function SetImageUrl($url)
	{
		$this->imageUrl = $url;
	}
};

/**
* 
*/
class StartrekWarrior extends Warrior
{

	public $mentalPower;

	public function power()
	{
		return $this->mentalPower;
	}

	public function __construct($id)
	{
	    parent::__construct($id);
	    $this->mentalPower = 8;
	
	}
}

class MarvelWarrior extends Warrior
{

	public $superPower;

	public function power()
	{
		return $this->superPower;
	}
	public function __construct($id)
	{
	    parent::__construct($id);
    	$this->superPower = 100;
	
	}
}

class PokemonWarrior extends Warrior
{

	public $level;

	public function power()
	{
		return $this->level;
	}

	public function __construct($id)
	{
	    parent::__construct($id);
    	$this->level = 1;
	
	}

}

class Weapon {

	public $id;
	public $strength;
	public $imageUrl;

	public function __construct($id, $strength)
	{
		$this->id = $id;
		$this->strength = $strength;
	}

	public function SetImageUrl($url)
	{
		$this->imageUrl = $url;
	}

}