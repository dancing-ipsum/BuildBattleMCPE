<?php

namespace MCPEGamerJP\BuildBattleMCPE;

use pocketmine\player\player;
use pocketmine\tile\Sign
use pocketmine\plugin\pluginbase;
use pocketmine\player\playerjoinevent;
use fastransfer\playertransferevent;

class Main extends PluginBase(){
  public function sendMessage($player,$message){
     $player->sendMessage("§3Welcome§4to§5a§6Build§1Battle §8Server!")
  }
  
  public function transferPlayer($player, $destination)
     $player->sendMessage("You are being transferred to a BuildIt game!")
     $player->transferPlayer("BuildBattleLobby")
     $sender->getLogger(".$player. joined a BuildBattles game!")
  }
  
  public function priorGame($player, $message)
     $player->sendPopup("Waiting for game start...")
 }
 
  public function lobbyWait(
