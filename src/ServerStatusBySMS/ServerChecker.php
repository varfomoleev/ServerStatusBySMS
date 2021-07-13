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
use pocketmine\Server;
use pocketmine\scheduler\Task as PluginTask;

use ServerStatusBySMS\library\SMSRU;

class ServerChecker extends PluginTask{
	
	function getOnline($ip, $port){
        $socket = fsockopen("udp://".$ip, $port);
        fwrite($socket, "\x01" . "\0\0\0\0\0\0\0\0" . "\x00\xff\xff\x00\xfe\xfe\xfe\xfe\xfd\xfd\xfd\xfd\x12\x34\x56\x78");
        if (($data = fread($socket, 1024)) !== false) {
            if (isset(explode(";", substr($data, 35))[4]))
            {
                $online = explode(";", substr($data, 35))[4];
                return $online;
            } else {
                return 0;
            }
        }
    }
	
	public function getServer(){
		return Server::getInstance();
	}
	
	public function onRun($currentTick){
		
		static $cheker;
		
		if($cheker > 0){
			return false;
		}
		
		$cheker = 0;
		
		$smsru = new SMSRU('AAAAA-AAAAA-AAAAA-AAAAA-AAAAAAAAAAA'); // Ваш уникальный программный ключ, который можно получить на главной странице
		$data = new stdClass();
		$data->to = '888888888888'; //Ваш номер телефона
		
		if($this->getOnline("hypego.ru", 19133) == null){ //Укажите айпи и порт своего сервера
			$cheker = $cheker + 1;
			$data->text = 'Технические неполадки! Сервер 19133 вышел из строя.'; //Укажите порт своего сервера
			$sms = $smsru->send_one($data);
			if ($sms->status == "OK") {
				$this->getServer()->getLogger()->info("Сообщение об ошибке успешно отправлено на номер {$data->to}");
			}else{
				$this->getServer()->getLogger()->info("Сообщение не отправлено");
				$this->getServer()->getLogger()->info("Код ошибки: {$sms->status_code}");
				$this->getServer()->getLogger()->info("Текст ошибки: {$sms->status_text}");
			}
		}
		
		if($this->getOnline("hypego.ru", 19134) == null){ //Укажите айпи и порт своего сервера
			$cheker = $cheker + 1;
			$data->text = 'Технические неполадки! Сервер 19134 вышел из строя.'; //Укажите порт своего сервера
			$sms = $smsru->send_one($data);
			if ($sms->status == "OK") {
				$this->getServer()->getLogger()->info("Сообщение об ошибке успешно отправлено на номер {$data->to}");
			}else{
				$this->getServer()->getLogger()->info("Сообщение не отправлено");
				$this->getServer()->getLogger()->info("Код ошибки: {$sms->status_code}");
				$this->getServer()->getLogger()->info("Текст ошибки: {$sms->status_text}");
			}
		}
		
		if($this->getOnline("hypego.ru", 19135) == null){ //Укажите айпи и порт своего сервера
			$cheker = $cheker + 1;
			$data->text = 'Технические неполадки! Сервер 19135 вышел из строя.'; //Укажите порт своего сервера
			$sms = $smsru->send_one($data);
			if ($sms->status == "OK") {
				$this->getServer()->getLogger()->info("Сообщение об ошибке успешно отправлено на номер {$data->to}");
			}else{
				$this->getServer()->getLogger()->info("Сообщение не отправлено");
				$this->getServer()->getLogger()->info("Код ошибки: {$sms->status_code}");
				$this->getServer()->getLogger()->info("Текст ошибки: {$sms->status_text}");
			}
		}
		
		if($this->getOnline("hypego.ru", 19136) == null){ //Укажите айпи и порт своего сервера
			$cheker = $cheker + 1;
			$data->text = 'Технические неполадки! Сервер 19136 вышел из строя.'; //Укажите порт своего сервера
			$sms = $smsru->send_one($data);
			if ($sms->status == "OK") {
				$this->getServer()->getLogger()->info("Сообщение об ошибке успешно отправлено на номер {$data->to}");
			}else{
				$this->getServer()->getLogger()->info("Сообщение не отправлено");
				$this->getServer()->getLogger()->info("Код ошибки: {$sms->status_code}");
				$this->getServer()->getLogger()->info("Текст ошибки: {$sms->status_text}");
			}
		}
		
		if($this->getOnline("hypego.ru", 19137) == null){ //Укажите айпи и порт своего сервера
			$cheker = $cheker + 1;
			$data->text = 'Технические неполадки! Сервер 19137 вышел из строя.'; //Укажите порт своего сервера
			$sms = $smsru->send_one($data);
			if ($sms->status == "OK") {
				$this->getServer()->getLogger()->info("Сообщение об ошибке успешно отправлено на номер {$data->to}");
			}else{
				$this->getServer()->getLogger()->info("Сообщение не отправлено");
				$this->getServer()->getLogger()->info("Код ошибки: {$sms->status_code}");
				$this->getServer()->getLogger()->info("Текст ошибки: {$sms->status_text}");
			}
		}
		
		if($this->getOnline("hypego.ru", 19150) == null){ //Укажите айпи и порт своего сервера
			$cheker = $cheker + 1;
			$data->text = 'Технические неполадки! Сервер 19150 вышел из строя.'; //Укажите порт своего сервера
			$sms = $smsru->send_one($data);
			if ($sms->status == "OK") {
				$this->getServer()->getLogger()->info("Сообщение об ошибке успешно отправлено на номер {$data->to}");
			}else{
				$this->getServer()->getLogger()->info("Сообщение не отправлено");
				$this->getServer()->getLogger()->info("Код ошибки: {$sms->status_code}");
				$this->getServer()->getLogger()->info("Текст ошибки: {$sms->status_text}");
			}
		}
		
		if($this->getOnline("hypego.ru", 19151) == null){ //Укажите айпи и порт своего сервера
			$cheker = $cheker + 1;
			$data->text = 'Технические неполадки! Сервер 19151 вышел из строя.'; //Укажите порт своего сервера
			$sms = $smsru->send_one($data);
			if ($sms->status == "OK") {
				$this->getServer()->getLogger()->info("Сообщение об ошибке успешно отправлено на номер {$data->to}");
			}else{
				$this->getServer()->getLogger()->info("Сообщение не отправлено");
				$this->getServer()->getLogger()->info("Код ошибки: {$sms->status_code}");
				$this->getServer()->getLogger()->info("Текст ошибки: {$sms->status_text}");
			}
		}
		
		$this->getServer()->getLogger()->info("Количество серверов вышедших из строя - {$cheker}");
		
	}
	
}

class stdClass{
}