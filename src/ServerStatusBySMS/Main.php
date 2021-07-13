<?php

/*
*  ___                             ____             
* |_ _|_   ____ _ _ __   _____   _|  _ \  _____   __
*  | |\ \ / / _` | '_ \ / _ \ \ / / | | |/ _ \ \ / /
*  | | \ V / (_| | | | | (_) \ V /| |_| |  __/\ V / 
* |___| \_/ \__,_|_| |_|\___/ \_/ |____/ \___| \_/  
*                               
* @author IvanovDev
* @link https://ivanovdev.ru/
*
*/

namespace ServerStatusBySMS;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\scheduler\Task as PluginTask;
use pocketmine\Server;
use pocketmine\utils\Config;

use ServerStatusBySMS\ServerChecker;

//TODO: Выполнять настройку плагина через конфиг

class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		//$this->getServer()->getScheduler()->scheduleRepeatingTask(new ServerChecker($this), 20 * 10); //Раскоментируйте, если у вас старое api
		$this->getScheduler()->scheduleRepeatingTask(new ServerChecker($this), 20 * 10); //Закоментируйте, если у вас старое api
	}
	
}