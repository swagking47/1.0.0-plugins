<?php

namespace infinite-life;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class Main extends PluginBase{
    public function onEnable(){
         $this->getLogger()->info("infinite-life has been enabled.");
    }
     public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		switch($cmd->getName()){
			case "InfiniteLife":
				    if($args[0] == "on" and $sender->hasPermission("InfiniteLife.Give")){
				        $player = $this->getPlayer($args[0]);
				        $player->setMaxHealth(1000000000000000 * 100000000000000000 * 10000000000000 * 10000000000 * 100000000000000000000000000000000 * 1000000000000000000000000000000000000 * 1000000000000000000000000000000000000000000000000 * 1000000000000000000000000000000000000000000000000000000000000 * 1000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000 * 1000000000000000000000000000);
				        $player->setHealth($player->getMaxHealth());
				    }
				    if($args[0] == "off" and $sender->hasPermission("InfiniteLife.Give")){
				        $player->setMaxHealth(20);
				        $player->setHealth($player->getMaxHealth());
				    }
		}
     }
		 public function onEnable(){
         $this->getLogger()->info("infinite-life has been disabled.");
    }
     }

				         
			
				             
				             
				             
      
