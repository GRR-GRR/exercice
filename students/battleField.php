<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {
 	static public function createMyWarrior()
	{
		$me = new StartrekWarrior($GLOBALS['warriorID']);
		$arme = new Weapon('canonScie', 250);
		$me->SetImageUrl('https://68.media.tumblr.com/1348a0db40d2e444ee13bc4d8adb4f3f/tumblr_nkgchgDQWC1qg1ykso1_500.gif');
		$arme->SetImageUrl('http://vignette4.wikia.nocookie.net/fallout/images/9/9e/Fusil_a_canon_scie.png/revision/latest?cb=20150124174630&path-prefix=fr');

		$me->SetWeapon($arme);
		$me->saveNew();


	} 

	 	static public function createOtherWarrior()
	{
		$us = new PokemonWarrior('AbFab');
		$arme = new Weapon('canonScie', 50);
		$us->SetImageUrl('http://cdn.playbuzz.com/cdn/f132d87b-1f9c-449b-b2c7-6d71ca90af93/5ad9c62c-637f-4ce9-b4de-017b99523a23.gif');
		$arme->SetImageUrl('http://vignette4.wikia.nocookie.net/fallout/images/9/9e/Fusil_a_canon_scie.png/revision/latest?cb=20150124174630&path-prefix=fr');

		$us->SetWeapon($arme);
		$us->saveNew();


	} 		

  }
