<?php
 
 namespace swagboy47\EventManger;
 
use pocketmine\command\Command;
use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\item;
use pocketmine\block;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerDropItemEvent;

class Main extends PluginBase implements Listener{
public function onEnable(){
$this->config = new Config($this->getDataFolder()."config.yml", Config::YAML, array());
 $this->enable = true;
 $this->getServer()->getPluginManager()->registerEvents($this, $this);
		}
		public function onCommand(CommandSender $sender, Command $cmd, $label){
		switch($cmd->getName()){
			case "ID":
			if(!$this->config->exists($sender->getName())){
			 $this->config->set($sender->getName());
          $this->config->save();
           $sender->sendMessage(" has been remopved.");
			else{
			$this->config->remove($sender->getName());
          $this->config->save();
          }
			
