<?php

namespace Haste;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;
use pocketmine\command\ConsoleCommandSender;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;
class Main extends PluginBase{

	public function onEnable(){
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
		
		switch($cmd->getName()){
			
			case "haste":
			if($player->hasPermission("haste.command")){
        if(!$sender instanceof Player){
			$sender->sendMessage("Hiệu Ứng Haste ON !");
			$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "effect " . $sender->getName() . " haste 100000");
		}
		return true;
	}

}