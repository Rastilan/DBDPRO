<?php
$ch = curl_init();
$runfile = 'https://dbd-stats.info/api';


curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_URL, $runfile);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
$content = curl_exec ($ch);

if($e = curl_error($ch)){
  echo $e;
}
else {
  echo $content;
  var_dump($content);

  print_r(json_decode($content));
}



?>
