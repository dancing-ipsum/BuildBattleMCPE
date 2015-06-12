<?php

namespace MCPEGamerJP\BuildBattleMCPE;

use pocketmine\player\playerdata;
use pocketmine\tile\Sign
use pocketmine\plugin\pluginbase;
use pocketmine\player\playerjoinevent;

class BuildBattleMCPE extends PluginBase(){
  public function sendMessage($player,$message){
     $player->sendMessage("§3Welcome§4to§5a§6Build§1Battle §8Server!")
  }
  
  public function transferPlayer(Player $player, $address, $port = 19132, $message = "You are joining a BuildBattle game, please wait."){
    $ev = new PlayerTransferEvent($player, $address, $port, $message);
    $this->getServer()->getPluginManager()->callEvent($ev);
    if($ev->isCancelled()){
      return false;
    }
   
    $ip = $this->lookupAddress($ev->getAddress());
    
    if($ip === null){
      return false;
    }
    
    if($message !== null and $message !== ""){
      //Stopping code here for today xD
  }
 
