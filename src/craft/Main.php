<?php

namespace Craft;

use Craft\Commands\CraftCommand;

use pocketmine\plugin\PluginBase;
use pocketmine\block\Block;
use pocketmine\block\BlockFactory;
use pocketmine\entity\Entity;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\EnchantmentInstance;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;

use pocketmine\tile\Tile;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

class Main extends PluginBase { 
	
	/** @var array */
	public $plugin;
  
  public function onEnable(): void{
  	$this->getServer()->getCommandMap()->register("craft", new CraftCommand("craft", $this));
  	}

}
