<?php
  $fp = fopen("words5.txt","r");
  $words=array();
  $five_words=array();
  while(!feof($fp))
  {
    $words[]=fgets($fp);
  }
  
  for($x=0;$x<5;$x++):
    $five_words[]=$words[rand(0,count($words)-1)];
   
  endfor;
  
  echo json_encode($five_words);
  fclose($fp);
?>
