<?php

if($words = getWordsArray()){
  if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // if(isset($_POST['triedLetter'])){
        //     if(strlen($_POST['triedLetter'])==1){
        //         if(ctype_alpha($_POST['triedLetter'])){
                    include 'postController.php';
                    
        //         }
        //     }
        // }
  }else if($_SERVER['REQUEST_METHOD'] === 'GET'){
      include 'getController.php';
  }else{
      die("tu n'a rien à faire ici avec cette méthode HTTP");
  }
} else {
    die("il n'a pas été possible de recupérer les mots depuis la base de données");
};





//definition des données utiles




//$s = '';

//for($i=0;$i<$wordLenth;$i++){
//    $s.=REPLACEMENT_CHAR;
//}
//
//$replacementString = $s;