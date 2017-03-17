<?php
  class Player{
  	public $blood = 100;
  	public $mana = 40;
  	public $name;
  }
  
  $curr=0;
  $max_player=[];
  
  do{
  	echo "\n# ============================== #\n";
  	echo "# Welcome to the Battle Arena #\n";
  	echo "# ------------------------------------------------- ---- #\n";
  	echo "# Description: #\n";
  	echo "# 1. type 'new' to create a character #\n";
  	echo "# 2. type 'start' to begin the fight #\n";
  	echo "# ------------------------------------------------- ---- #\n";
  	echo "# Current Player: $curr #\n";
    foreach($max_player as $key => $value) {
      echo "#- " . $value . "\t\t#\n";
  	}
  	echo "# * Max player 2 or 3 #\n";
  	echo "# ------------------------------------------------- ---- #\n";
  	echo "Choose menu : "; fscanf(STDIN, "%s\n", $pilih);
  	
  	switch ($pilih) {
  	  case 'new':
  	    if ($curr==3) {
  		  echo "\nplayer has max\n";
  		}else{
  		  echo "\n# ============================== #\n";
  		  echo "# Welcome to the Battle Arena #\n";
  		  echo "# ------------------------------------------------- ---- #\n";
  		  echo "# Description: #\n";
  		  echo "# 1. type 'new' to create a character #\n";
  		  echo "# 2. type 'start' to begin the fight #\n";
  		  echo "# ------------------------------------------------- ---- #\n";
  		  echo "# Put Player Name: ";  fscanf(STDIN, "%s", $name);
  		  echo "# - #\n";
  		  echo "# * Max player 2 or 3 #\n";
  		  echo "# ------------------------------------------------- ---- #\n";
  		  $curr++;	
  		  array_push($max_player, $name);
  		}  		
  		break;

  	  case 'start':
  	  	if ($curr<=0) {
  	  	  echo "\nPlayer not found!\n";
  	  	}elseif ($curr==1) {
          echo "\nInsert Player 2!\n";
        }else{
  	  	  $player = new Player;
  		    $mana = $player->mana;
          $blood = $player->blood;
          echo "\n# ============================== #\n";
  		  echo "# Welcome to the Battle Arena #\n";
  		  echo "# ------------------------------------------------- ---- #\n";
  		  echo "Battle Start: \n";
  		  echo "who will attack: "; echo $max_player[0];
  		  echo "\nwho will defend: "; echo $max_player[1];	
  		  echo "\nDescription:";
  		  do{  
  		    if ($mana != 0 && $blood != 0) {
  		      echo "\n$max_player[0] : manna = ".$mana.", blood = ".$player->blood;
              echo "\n$max_player[1] : manna = ".$player->mana.", blood = ".$blood."\n";
              $mana-= 10;
              $blood-= 25;
              if($mana == 0 && $blood == 0){
                echo "\n$max_player[0] : manna = ".$mana.", blood = ".$player->blood;
                echo "\n$max_player[1] : manna = ".$player->mana.", blood = ".$blood."\n";
              }
            }
  		  }while ($blood != 0 || $mana != 0);
  		  echo "\nGame Over\n";
  		  exit();
  		}
  		break;

  	  case 'keluar':
  	    exit();
  	    break;

  	  default:
  		echo "\nRe-enter\n";
  		break;
  	}
  }while ($pilih != "keluar");
?>