<php
namespace swagboy\ArmorPerWorld

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\event\entity\EntityLevelChangeEvent;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{
public function onEnable(){
$this->config = new Config($this->getDataFolder()."Armors.yml", Config::YAML, array());
$this->getServer()->getPluginManager()->registerEvents($this, $this);
		}
		public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		switch($cmd->getName()){
			case "ArmorPerWorld":
			$level = isset($args[3]) ? $this->getServer()->getLevelByName($args[0]) : $this->getServer()->getDefaultLevel();
			if($level == null){
			$sender->sendMessage("[ArmorPerWorld] ERROR: Invalid Level.");
			}
			else{
			$this->config->set($args[0]);
			}
			 if($args[1] != "298" or "302" or "306" or "310" or "314"){
			  $sender->sendMessage("[ArmorPerWorld] ERROR: Invalid Helmet ID."
			 }
			 else{
			 $this->config->set($args[0]"helemet", $args[1]);
			 }
			 if($args[2] != "303" or "307" or "311" or "299" or "315"){
			  $sender->sendMessage("[ArmorPerWorld] ERROR: Invalid ChestPlate ID."
			 }
			 else{
			 $this->config->set($args[0]"chestplate", $args[2]);
			 }
			 if($args[3] != "304" or "308" or "312" or "300" or "316"){
			  $sender->sendMessage("[ArmorPerWorld] ERROR: Invalid Leggings ID."
			 }
			 else{
			 $this->config->set($args[0]"leggings", $args[3]);
			 }
			 if($args[3] != "305" or "309" or "313" or "301" or "317"){
			  $sender->sendMessage("[ArmorPerWorld] ERROR: Invalid Boots ID."
			 }
			 else{
			 $this->config->set($args[0]"boots", $args[4]);
			 }
		}
		}
		public function onLevelChange(EntityLevelChangeEvent $event){
    if(($player = $event->getEntity()) instanceof Player){
    $target = $event->getTarget()
    if($this->config->exists($target)){
    
    $player->getInventory()->setHelmet(Item::get($this->config->get($target"helemet")));
$player->getInventory()->setChestplate(Item::get($this->config->get($target"chestplate")));
$player->getInventory()->setLeggings(Item::get($this->config->get($target"leggings")));
$player->getInventory()->setBoots(Item::get($this->config->get($target"boots")));
$player->getInventory()->sendArmorContents($player)
}}}

			 
			 
			 
			 
			 
			 
			 
