<?php

namespace MinesPlus;

use pocketmine\event\entity\EntityMoveEvent;
use pocketmine\event\Listener;
use pocketmine\level;
use pocketmine\level\Position;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\entity\Entity;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
class Main extends PluginBase implements Listener{
 private $true1;
 private $mine1;
 private $fire;
 private $true2;
 private $mine2;
 private $heal;
 private $true3;
 private $mine3;
 private $attak;
 private $true5;
 private $mine5;
 private $true6;
 private $mine6;
 private $kick;
 private $true7;
 private $mine7;
 private $sendMessage;
 private $true8;
 private $mine8;
 private $armor1;
 private $true9;
 private $mine9;
 private $armor2;
 private $true10;
 private $mine10;
 private $armor3;
 private $true11;
 private $mine11;
 private $armor4;
 private $true12;
 private $mine12;
 private $x;
 private $y; 
 private $z;
 private $true13;
 private $mine13;
 private $item
 private $true14;
 private $mine14;
 private $void;
 private $true15;
 private $mine15;
 private $high;
 public function onLoad(){
 $this->getLogger()->info("MinesPlus have been loaded!");
    }
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $config = $this->getConfig();
        $this->true1 = $config->get("true1");
        $this->mine1 = $config->get("mine1");
        $this->fire = $config->get("fire");
        $this->true2 = $config->get("true2");
        $this->mine2 = $config->get("mine2");
        $this->heal = $config->get("heal");
        $this->true3 = $config->get("true3");
        $this->mine3 = $config->get("mine3");
        $this->attak = $config->get("attak");
        $this->true5 = $config->get("true5");
        $this->mine5 = $config->get("mine5");
        $this->true6 = $config->get("true6");
        $this->mine6 = $config->get("mine6");
        $this->kick = $config->get("kick");
        $this->true7 = $config->get("true7");
        $this->mine7 = $config->get("mine7");
        $this->sendMessage = $config->get("sendMessage");
        $this->true8 = $config->get("true8");
        $this->mine8 = $config->get("mine8");
        $this->true9 = $config->get("true9");
        $this->mine9 = $config->get("mine9");
        $this->true10 = $config->get("true10");
        $this->mine10 = $config->get("mine10");
        $this->true11 = $config->get("true11");
        $this->mine11 = $config->get("mine11");
        $this->true12 = $config->get("true12");
        $this->mine12 = $config->get("mine12");
        $this->x = $config->get("x");
        $this->y = $config->get("y");
        $this->z = $config->get("z");
        $this->true13 = $config->get("true13");
        $this->mine13 = $config->get("mine13");
        $this->item = $config->get("item");
        $this->true14 = $config->get("true14");
        $this->mine14 = $config->get("mine14");
        $this->true15 = $config->get("true15");
        $this->mine15 = $config->get("mine15");
        $this->high = $config->get("high");
        $this->getLogger()->info("Claymores has been enabled.");
	}
	 public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		switch($cmd->getName()){
			case "mp":
				if($args[0] == "fire"){
				if($args[1] == ""){
				 $sender->sendMessage("Usage: /mp fire <ENABLE|DISABLE|SECONDS|BLOCK>");
				 }
			 if($args[1] == "enable"){
			 	if($this->true1 == "true"){
			 	      $sender->sendMessage("[MinesPlus] fire mines already been enabled!");	
			 	}
			  $config->set("true1", "true");
			  $config->save();
      $sender->sendMessage("[MinesPlus] fire mines have been enabled!");
 }
 if($args[1] == "disable"){
 	if($this->true1 == "false"){
 		$sender->sendMessage("[MinesPlus] fire mines already been disabled!");
 	}
  $config->set("true1", "false");
			  $config->save();
      $sender->sendMessage("[MinesPlus] fire mines have been disabled!");
 }
 if($args[1] == "block"){
 if($args[2] == ""){
 $sender->sendMessage("Usage: /mp fire block <ID>");
 }
 else {
  $config->set("mine1", $args[2]);
  $config->save();
  }
  }
  if($args[1] == "seconds"){
 if($args[2] == ""){
 $sender->sendMessage("Usage: /mp fire seconds <seconds>");
 }
 else {
  $config->set("fire", $args[2]);
  $config->save();
  }
  }
  }
  				if($args[0] == "heal"){
				if($args[1] == ""){
				 $sender->sendMessage("Usage: /mp fire <ENABLE|DISABLE|AMOUNT|BLOCK>");
				 }
			 if($args[1] == "enable"){
			 	if($this->true1 == "true"){
			 	      $sender->sendMessage("[MinesPlus] heal mines already been enabled!");	
			 	}
			  $config->set("true2", "true");
			  $config->save();
      $sender->sendMessage("[MinesPlus] healing mines have been enabled!");
 }
 if($args[1] == "disable"){
 	if($this->true1 == "false"){
			 	      $sender->sendMessage("[MinesPlus] heal mines already been disabled!");	
			 	}
  $config->set("true2", "false");
			  $config->save();
      $sender->sendMessage("[MinesPlus] healing mines have been disabled!");
 }
 if($args[1] == "block"){
 if($args[2] == ""){
 $sender->sendMessage("Usage: /mp healing block <ID>");
 }
 else {
  $config->set("mine2", $args[2]);
  $config->save();
  }
  }
  if($args[1] == "amount"){
 if($args[2] == ""){
 $sender->sendMessage("Usage: /mp healing amount <amount>");
 }
 else {
  $config->set("heal", $args[2]);
  $config->save();
  }
  }
  }
  				if($args[0] == "attak"){
				if($args[1] == ""){
				 $sender->sendMessage("Usage: /mp attak <ENABLE|DISABLE|AMOUNT|BLOCK>");
				 }
			 if($args[1] == "enable"){
			 	if($this->true1 == "true"){
			 	      $sender->sendMessage("[MinesPlus] attak mines already been enabled!");	
			 	}
			  $config->set("true3", "true");
			  $config->save();
      $sender->sendMessage("[MinesPlus] attak mines have been enabled!");
 }
 if($args[1] == "disable"){
 	if($this->true1 == "false"){
			 	      $sender->sendMessage("[MinesPlus] attak mines already been disabled!");	
			 	}
  $config->set("true3", "false");
			  $config->save();
      $sender->sendMessage("[MinesPlus] attak mines have been disabled!");
 }
 if($args[1] == "block"){
 if($args[2] == ""){
 $sender->sendMessage("Usage: /mp attak block <ID>");
 }
 else {
  $config->set("mine3", $args[2]);
  $config->save();
  }
  }
  if($args[1] == "amount"){
 if($args[2] == ""){
 $sender->sendMessage("Usage: /mp attak amount <seconds>");
 }
 else {
  $config->set("attak", $args[2]);
  $config->save();
  }
  }
  }
  				if($args[0] == "kill"){
				if($args[1] == ""){
				 $sender->sendMessage("Usage: /mp kill <ENABLE|DISABLE|BLOCK>");
				 }
			 if($args[1] == "enable"){
			 	if($this->true1 == "true"){
			 	      $sender->sendMessage("[MinesPlus] kill mines already been enabled!");	
			 	}
			 	if($this->true1 == "true"){
			 	      $sender->sendMessage("[MinesPlus] kill mines already been disabled!");	
			 	}
			  $config->set("true5", "true");
			  $config->save();
      $sender->sendMessage("[MinesPlus] kill mines have been enabled!");
 }
 if($args[1] == "disable"){
 	if($this->true1 == "false"){
			 	      $sender->sendMessage("[MinesPlus] fire mines already been disabled!");	
			 	}
  $config->set("true5", "false");
			  $config->save();
      $sender->sendMessage("[MinesPlus] kill mines have been disabled!");
 }
 if($args[1] == "block"){
 if($args[2] == ""){
 $sender->sendMessage("Usage: /mp kill block <ID>");
 }
 else {
  $config->set("mine5", $args[2]);
  $config->save();
  }
  }
  }
  				if($args[0] == "kick"){
				if($args[1] == ""){
				 $sender->sendMessage("Usage: /mp kick <ENABLE|DISABLE|REASON|BLOCK>");
				 }
			 if($args[1] == "enable"){
			 	if($this->true1 == "true"){
			 	      $sender->sendMessage("[MinesPlus] kick mines already been disabled!");	
			 	}
			  $config->set("true6", "true");
			  $config->save();
      $sender->sendMessage("[MinesPlus] kick mines have been enabled!");
 }
 if($args[1] == "disable"){
 	if($this->true1 == "false"){
			 	      $sender->sendMessage("[MinesPlus] kick mines already been disabled!");	
			 	}
  $config->set("true6", "false");
			  $config->save();
      $sender->sendMessage("[MinesPlus] kick mines have been disabled!");
 }
 if($args[1] == "block"){
 if($args[2] == ""){
 $sender->sendMessage("Usage: /mp kick block <ID>");
 }
 else {
  $config->set("mine6", $args[2]);
  $config->save();
  }
  }
  if($args[1] == "reason"){
 if($args[2] == ""){
 $sender->sendMessage("Usage: /mp kick seconds <seconds>");
 }
 else {
  $config->set("kick", $args[2]);
  $config->save();
  }
  }
  }
  				if($args[0] == "sendmassage"){
				if($args[1] == ""){
				 $sender->sendMessage("Usage: /mp sendmassage <ENABLE|DISABLE|MASSAGE|BLOCK>");
				 }
			 if($args[1] == "enable"){
			 	if($this->true1 == "true"){
			 	      $sender->sendMessage("[MinesPlus] sendmassage mines already been enabled!");	
			 	}
			  $config->set("true7", "true");
			  $config->save();
      $sender->sendMessage("[MinesPlus] sendmassage mines have been enabled!");
 }
 if($args[1] == "disable"){
 	if($this->true1 == "false"){
			 	      $sender->sendMessage("[MinesPlus] fire mines already been enabled!");	
			 	}
  $config->set("true7", "false");
			  $config->save();
      $sender->sendMessage("[MinesPlus] sendmassage mines have been disabled!");
 }
 if($args[1] == "block"){
 if($args[2] == ""){
 $sender->sendMessage("Usage: /mp massage block <ID>");
 }
 else {
  $config->set("mine7", $args[2]);
  $config->save();
  }
  }
  if($args[1] == "massage"){
 if($args[2] == ""){
 $sender->sendMessage("Usage: /mp sendmassage massege <massage>");
 }
 else {
  $config->set("sendMassage", $args[2]);
  $config->save();
  }
  }
  }
  
  //it's not done :)
  
 
 
 
 
 
 
 
 
 
 
 
 
 
