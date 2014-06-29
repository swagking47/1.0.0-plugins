<?php

 namespace MinesPlus;

use pocketmine\level\Position;
use pocketmine\math\Vector3;
use pocketmine\network\protocol;
use pocketmine\entity\Entity;
use pocketmine\entity\ProjectileSource;

class zombie extends Position implements ProjectileSource{
  /** @var int */
	protected $eid;
	/** @var float */
	protected $yaw, $pitch;
	/** @var Main */
	protected $plugin;
	public function __construct(Main $plugin, Position $pos, $yaw = 0, $pitch = 0){
	  $this->eid = Entity::$entityCount++;
		$this->plugin = $plugin;
		$this->yaw = $yaw;
		$this->pitch = $pitch;
	}
	public function spawnTo(Entity $entity){
	$pk = new protocol\AddMobPacket;
		$pk->eid = $this->eid;
		$pk->type = 32;
		$pk->x = $player1->getX()+1;
		$pk->y = $player1->getY();
		$pk->z = $player1->getZ();
		$pk->yaw = $this->yaw;
		$pk->pitch = $this->pitch;
		$pk->metadata = $this->getMetadata();
	}
	public function spawnTo(Entity $entity){
	$pk = new protocol\AddMobPacket;
		$pk->eid = $this->eid;
		$pk->type = 32;
		$pk->x = $player1->getX()-1;
		$pk->y = $player1->getY();
		$pk->z = $player1->getZ();
		$pk->yaw = $this->yaw;
		$pk->pitch = $this->pitch;
		$pk->metadata = $this->getMetadata();
	}
	public function spawnTo(Entity $entity){
	$pk = new protocol\AddMobPacket;
		$pk->eid = $this->eid;
		$pk->type = 32;
		$pk->x = $player1->getX();
		$pk->y = $player1->getY()+1;
		$pk->z = $player1->getZ();
		$pk->yaw = $this->yaw;
		$pk->pitch = $this->pitch;
		$pk->metadata = $this->getMetadata();
	}
	public function spawnTo(Entity $entity){
	$pk = new protocol\AddMobPacket;
		$pk->eid = $this->eid;
		$pk->type = 32;
		$pk->x = $player1->getX()-1;
		$pk->y = $player1->getY();
		$pk->z = $player1->getZ();
		$pk->yaw = $this->yaw;
		$pk->pitch = $this->pitch;
		$pk->metadata = $this->getMetadata();
	}
}
