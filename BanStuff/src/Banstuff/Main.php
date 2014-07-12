<?php
 
 namespace BanStuff;
 
use pocketmine\command\Command;
use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\player\PlayerItemHeldEvent;

class Main extends PluginBase implements Listener{
public function onEnable(){
$this->config = new Config($this->getDataFolder()."config.yml", Config::YAML, array());
}

