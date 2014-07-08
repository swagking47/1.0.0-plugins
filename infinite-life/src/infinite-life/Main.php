<?php

namespace infinite-life;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;

class Main extends PluginBase{
    public function onEnable(){
         $this->getLogger()->info("infinite-life has been enabled.");
         $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
     public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		switch($cmd->getName()){
			case "godemode":
if($args[0] == "on" and $sender->hasPermission("godmode.give"){
$player = $this->getPlayer($args[1]);
	$this->getConfig->set($player->getName(), true);
	$this->getConfig->save();
	$sender->sendMasssge("godemode have been enabled for $args[1]");
}
if($args[0] == "off" and $sender->hasPermission("godmode.give"){
$player = $this->getPlayer($args[1]);
	$this->getConfig->set($player->getName(), false);
	$this->getConfig->save();
	$sender->sendMasssge("godemode have been disabled for $args[1]");
}
}
}
/** 
     * @param EntityDamageEvent $data
     * 
     * @priority NORMAL
     * @ignoreCalcelled false
     */
public function onEntityDamageEvent(EntityDamageEvent $event, Entity $entity){
	if(($player = $event->getEntity()) instanceof Player){
		if($this->getConfig->exists($player->getName())){
		if($this->getConfig->get($player->getName()) = true){
			$event->setCancelled(true);
		}	
		}
	}
}
}
