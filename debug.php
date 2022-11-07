<?php
  error_reporting(-1);
  ini_set("display_errors", 1);

  $flux_rss = "./rss.xml"; 
//"https://www.courrierinternational.com/feed/all/rss.xml";

  $xml = simplexml_load_file($flux_rss);

echo "<pre>";
  var_dump($xml);
echo "<pre>";
  

  print $xml['rss']['channel']['title'];
