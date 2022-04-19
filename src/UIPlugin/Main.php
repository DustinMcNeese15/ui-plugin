<?php 
namespace UIPlugin;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\PluginBase; 

use pocketmine\command\Command;
use pocketmine\command\CommandSender; 

use pocketmine\event\Listener;

class main extends PluginBase implements Listener {

   public function onEnable(){
       $this->getlogger()->info("plugin enabled uwu"); 
   } 

   public function onDisable(){ 
       $this->getlogger()->info("plugin disabled •^•");
   }

}
      



