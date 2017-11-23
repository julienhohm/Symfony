<?php

namespace JH\TourismeBundle\DataFixture\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use JH\TourismeBundle\Entity\Menu;

class LoadMenu implements FixtureInterface, OrderedFixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$menus = array(
			array("name" => "Acceuil", "order" => "1", "url" => "home"),
			array("name" => "Chercher une activité", "order" => "2", "url" => "home"),
			array("name" => "Ajouter une activité", "order" => "3", "url" => "add_activity"),
			array("name" => "A propos", "order" => "4", "url" => "home"),
		);
				
		foreach($menus as $m)
		{
			$menu = new Menu();
			$menu->setName($m["name"]);
			$menu->setOrderBy($m["order"]);
			$menu->setUrl($m["url"]);
			$manager->persist($menu);
		}
		
		$manager->flush();		
	}
	
	public function getOrder()
	{
		return 0;
	}
}