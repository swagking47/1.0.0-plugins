<?php

<?php

namespace StepForArmor;

use pocketmine\event\entity\EntityMoveEvent;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\level;
use pocketmine\player
use pocketmine\level\Position;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{
    private $laggings;
    private $chestplate;
    private $helmet;
    private $boots;
    private $block;
    private $laggings1;
    private $chestplate1;
    private $helmet1;
    private $boots1;
    private $block1;
    private $laggings2;
    private $chestplate2;
    private $helmet2;
    private $boots2;
    private $block2;
    private $laggings3;
    private $chestplate3;
    private $helmet3;
    private $boots3;
    private $block3;
    private $laggings4;
    private $chestplate4;
    private $helmet4;
    private $boots4;
    private $block4;
    private $laggings5;
    private $chestplate5;
    private $helmet5;
    private $boots5;
    private $block5;
    private $laggings6;
    private $chestplate6;
    private $helmet6;
    private $boots6;
    private $block6;
    private $laggings7;
    private $chestplate7;
    private $helmet7;
    private $boots7;
    private $block7;
    private $laggings8;
    private $chestplate8;
    private $helmet8;
    private $boots8;
    private $block8;
    private $laggings9;
    private $chestplate9;
    private $helmet9;
    private $boots9;
    private $block9;
    private $laggings10;
    private $chestplate10;
    private $helmet10;
    private $boots10;
    private $block10;
    
    public function onLoad(){
      $this->getLogger()->info("[StepForArmor] has been loaded.");
    }
     public function onEnable() {
     	$this->saveDefaultConfig();
     	 $this->getResource("config.yml");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $config = $this->getConfig();
        $this->laggings = $config->get("Laggings");
        $this->chestplate = $config->get("chestplate");
        $this->helmet = $config->get("helemet");
        $this->boots = $config->get("boots");
        $this->block = $config->get("block");
        $this->laggings1 = $config->get("Laggings1");
        $this->chestplate1 = $config->get("chestplate1");
        $this->helmet1 = $config->get("helemet1");
        $this->boots1 = $config->get("boots1");
        $this->block1 = $config->get("block1");
        $this->laggings2 = $config->get("Laggings2");
        $this->chestplate2 = $config->get("chestplate2");
        $this->helmet2 = $config->get("helemet2");
        $this->boots2 = $config->get("boots2");
        $this->block2 = $config->get("block2");
        $this->laggings3 = $config->get("Laggings3");
        $this->chestplate3 = $config->get("chestplate3");
        $this->helmet3 = $config->get("helemet3");
        $this->boots3 = $config->get("boots3");
        $this->block3 = $config->get("block3");
        $this->laggings4 = $config->get("Laggings4");
        $this->chestplate4 = $config->get("chestplate4");
        $this->helmet4 = $config->get("helemet4");
        $this->boots4 = $config->get("boots4");
        $this->block4 = $config->get("block4");
        $this->laggings5 = $config->get("Laggings5");
        $this->chestplate5 = $config->get("chestplate5");
        $this->helmet5 = $config->get("helemet5");
        $this->boots5 = $config->get("boots5");
        $this->block5 = $config->get("block5");
        $this->laggings6 = $config->get("Laggings6");
        $this->chestplate6 = $config->get("chestplate6");
        $this->helmet6 = $config->get("helemet6");
        $this->boots6 = $config->get("boots6");
        $this->block6 = $config->get("block6");
        $this->laggings7 = $config->get("Laggings7");
        $this->chestplate7 = $config->get("chestplate7");
        $this->helmet7 = $config->get("helemet7");
        $this->boots7 = $config->get("boots7");
        $this->block7 = $config->get("block7");
        $this->laggings8 = $config->get("Laggings8");
        $this->chestplate8 = $config->get("chestplate8");
        $this->helmet8 = $config->get("helemet8");
        $this->boots8 = $config->get("boots8");
        $this->block8 = $config->get("block8");
        $this->laggings9 = $config->get("Laggings9");
        $this->chestplate9 = $config->get("chestplate9");
        $this->helmet9 = $config->get("helemet9");
        $this->boots9 = $config->get("boots9");
        $this->block9 = $config->get("block9");
        $this->laggings10 = $config->get("Laggings10");
        $this->chestplate10 = $config->get("chestplate10");
        $this->helmet10 = $config->get("helemet");
        $this->boots10 = $config->get("boots10");
        $this->block10 = $config->get("block10");
        $this->getLogger()->info("[StepForArmor] has been enabled.");
	}
	/** 
     * @param EntityMoveEvent $data
     * 
     * @priority NORMAL
     * @ignoreCalcelled false
     */
     
     public function onMove(EntiyMoveEvent $event){
    if(($player = $event->getEntity()) instanceof Player){
         $block1 = $player->getLevel()->getBlockIdAt($player->x, ($player->y -1), $player->z);
    if($block1 == $this->block){
$player->getInventory()->setHelmet(Item::get($this->helmet));
$player->getInventory()->setChestplate(Item::get($this->chestplate));
$player->getInventory()->setLeggings(Item::get($this->laggings));
$player->getInventory()->setBoots(Item::get($this->boots));
$player->getInventory()->sendArmorContents($player);
}
 if($block1 == $this->block1){
   $player->getInventory()->setHelmet(Item::get($this->helmet1));
$player->getInventory()->setChestplate(Item::get($this->chestplate1));
$player->getInventory()->setLeggings(Item::get($this->laggings1));
$player->getInventory()->setBoots(Item::get($this->boots1));
$player->getInventory()->sendArmorContents($player);
}
if($block1 == $this->block2){
   $player->getInventory()->setHelmet(Item::get($this->helmet2));
$player->getInventory()->setChestplate(Item::get($this->chestplate2));
$player->getInventory()->setLeggings(Item::get($this->laggings2));
$player->getInventory()->setBoots(Item::get($this->boots2));
$player->getInventory()->sendArmorContents($player);
}
if($block1 == $this->block3){
   $player->getInventory()->setHelmet(Item::get($this->helmet3));
$player->getInventory()->setChestplate(Item::get($this->chestplate3));
$player->getInventory()->setLeggings(Item::get($this->laggings3));
$player->getInventory()->setBoots(Item::get($this->boots3));
$player->getInventory()->sendArmorContents($player);
}
if($block1 == $this->block4){
$player->getInventory()->setHelmet(Item::get($this->helmet4));
$player->getInventory()->setChestplate(Item::get($this->chestplate4));
$player->getInventory()->setLeggings(Item::get($this->laggings4));
$player->getInventory()->setBoots(Item::get($this->boots4));
$player->getInventory()->sendArmorContents($player);
}
if($block1 == $this->block5){
$player->getInventory()->setHelmet(Item::get($this->helmet5));
$player->getInventory()->setChestplate(Item::get($this->chestplate5));
$player->getInventory()->setLeggings(Item::get($this->laggings5));
$player->getInventory()->setBoots(Item::get($this->boots5));
$player->getInventory()->sendArmorContents($player);
}
if($block1 == $this->block6){
$player->getInventory()->setHelmet(Item::get($this->helmet6));
$player->getInventory()->setChestplate(Item::get($this->chestplate6));
$player->getInventory()->setLeggings(Item::get($this->laggings6));
$player->getInventory()->setBoots(Item::get($this->boots6));
$player->getInventory()->sendArmorContents($player);
}
if($block1 == $this->block7){
$player->getInventory()->setHelmet(Item::get($this->helmet7));
$player->getInventory()->setChestplate(Item::get($this->chestplate7));
$player->getInventory()->setLeggings(Item::get($this->laggings7));
$player->getInventory()->setBoots(Item::get($this->boots7));
$player->getInventory()->sendArmorContents($player);
}
if($block1 == $this->block8){
$player->getInventory()->setHelmet(Item::get($this->helmet8));
$player->getInventory()->setChestplate(Item::get($this->chestplate8));
$player->getInventory()->setLeggings(Item::get($this->laggings8));
$player->getInventory()->setBoots(Item::get($this->boots8));
$player->getInventory()->sendArmorContents($player);
}
if($block1 == $this->block9){
$player->getInventory()->setHelmet(Item::get($this->helmet9));
$player->getInventory()->setChestplate(Item::get($this->chestplate9));
$player->getInventory()->setLeggings(Item::get($this->laggings9));
$player->getInventory()->setBoots(Item::get($this->boots9));
$player->getInventory()->sendArmorContents($player);
}
if($block1 == $this->block10){
$player->getInventory()->setHelmet(Item::get($this->helmet10));
$player->getInventory()->setChestplate(Item::get($this->chestplate10));
$player->getInventory()->setLeggings(Item::get($this->laggings10));
$player->getInventory()->setBoots(Item::get($this->boots10));
$player->getInventory()->sendArmorContents($player);
}
    }
     }
public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
      	switch($cmd->getName()){
			case "stepforarmor":
if($args[0] == "1" and  $sender->hasPermission("stepforarmor.set")){
$this->getConfig()->set("helmet", $args[1]);
$this->getConfig()->set("chestplate", $args[2]);
$this->getConfig()->set("laggings", $args[3]);
$this->getConfig()->set("boots", $args[4]);
$this->getConfig()->set("block", $args[5]);
$this->getConfig()->save();
}
if($args[0] == "2" and  $sender->hasPermission("stepforarmor.set")){
$this->getConfig()->set("helmet1", $args[1]);
$this->getConfig()->set("chestplate1", $args[2]);
$this->getConfig()->set("laggings1", $args[3]);
$this->getConfig()->set("boots1", $args[4]);
$this->getConfig()->set("block1", $args[5]);
$this->getConfig()->save();
}
if($args[0] == "3" and  $sender->hasPermission("stepforarmor.set")){
$this->getConfig()->set("helmet2", $args[1]);
$this->getConfig()->set("chestplate2", $args[2]);
$this->getConfig()->set("laggings2", $args[3]);
$this->getConfig()->set("boots2", $args[4]);
$this->getConfig()->set("block2", $args[5]);
$this->getConfig()->save();
}
if($args[0] == "4" and  $sender->hasPermission("stepforarmor.set")){
$this->getConfig()->set("helmet3", $args[1]);
$this->getConfig()->set("chestplate3", $args[2]);
$this->getConfig()->set("laggings3", $args[3]);
$this->getConfig()->set("boots3", $args[4]);
$this->getConfig()->set("block3", $args[5]);
$this->getConfig()->save();
}
if($args[0] == "5" and  $sender->hasPermission("stepforarmor.set")){
$this->getConfig()->set("helmet4", $args[1]);
$this->getConfig()->set("chestplate4", $args[2]);
$this->getConfig()->set("laggings4", $args[3]);
$this->getConfig()->set("boots4", $args[4]);
$this->getConfig()->set("block4", $args[5]);
$this->getConfig()->save();
}
if($args[0] == "6" and  $sender->hasPermission("stepforarmor.set")){
$this->getConfig()->set("helmet5", $args[1]);
$this->getConfig()->set("chestplate5", $args[2]);
$this->getConfig()->set("laggings5", $args[3]);
$this->getConfig()->set("boots5", $args[4]);
$this->getConfig()->set("block5", $args[5]);
$this->getConfig()->save();
}
if($args[0] == "7" and  $sender->hasPermission("stepforarmor.set")){
$this->getConfig()->set("helmet6", $args[1]);
$this->getConfig()->set("chestplate6", $args[2]);
$this->getConfig()->set("laggings6", $args[3]);
$this->getConfig()->set("boots6", $args[4]);
$this->getConfig()->set("block6", $args[5]);
$this->getConfig()->save();
}
if($args[0] == "8" and  $sender->hasPermission("stepforarmor.set")){
$this->getConfig()->set("helmet7", $args[1]);
$this->getConfig()->set("chestplate7", $args[2]);
$this->getConfig()->set("laggings7", $args[3]);
$this->getConfig()->set("boots7", $args[4]);
$this->getConfig()->set("block7", $args[5]);
$this->getConfig()->save();
}
if($args[0] == "9" and  $sender->hasPermission("stepforarmor.set")){
$this->getConfig()->set("helmet8", $args[1]);
$this->getConfig()->set("chestplate8", $args[2]);
$this->getConfig()->set("laggings8", $args[3]);
$this->getConfig()->set("boots8", $args[4]);
$this->getConfig()->set("block8", $args[5]);
$this->getConfig()->save();
}
if($args[0] == "10" and  $sender->hasPermission("stepforarmor.set")){
$this->getConfig()->set("helmet9", $args[1]);
$this->getConfig()->set("chestplate9", $args[2]);
$this->getConfig()->set("laggings9", $args[3]);
$this->getConfig()->set("boots9", $args[4]);
$this->getConfig()->set("block9", $args[5]);
$this->getConfig()->save();
}
if($args[0] == "11" and  $sender->hasPermission("stepforarmor.set")){
$this->getConfig()->set("helmet10", $args[1]);
$this->getConfig()->set("chestplate10", $args[2]);
$this->getConfig()->set("laggings10", $args[3]);
$this->getConfig()->set("boots10", $args[4]);
$this->getConfig()->set("block10", $args[5]);
$this->getConfig()->save();
}
}
}
 public function onDisable(){
        $this->getLogger()->log("[StepForArmor] StepForArmor Unloaded!");
    }
}
?>
