<?php

namespace MobSpawner;
use pocketmine\entity\Entity;
use pocketmine\entity\ProjectileSource;
use pocketmine\level\Position;
use pocketmine\math\Vector3;
use pocketmine\network\protocol
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;



class Main extends PluginBase implements Listener{
   private $ticks;
    private $Mob;
  public function onEnable(){
		$this->getServer()->getScheduler()->scheduleRepeatingTask(new Mob($this), *20);
		 $config = $this->getConfig();
        $this->ticks = $config->get("ticks");
        $this->Mob = $config->get("Mob");
        $this->getLogger()->info("MobSpawner has been enabled.");
  }
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		switch($cmd->getName()){
			case "ms":
			  

  
