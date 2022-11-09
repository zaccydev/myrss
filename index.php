<?php
error_reporting(-1);
ini_set("display_errors", 1);

$flux_rss = "./rss.xml"; 
//"https://www.courrierinternational.com/feed/all/rss.xml";

$xml = simplexml_load_file($flux_rss);


print $xml->channel->title;
echo "<br/>";
print $xml->channel->pudDate;
echo "<br/>";
foreach ($xml->channel->item as $elt => $art) {
    $ns = $art->getNamespaces(true);
    $childM = $art->children($ns['media']);
    print $art->title;
    echo "<br/>";
    print "<a href=" . $art->link . ">lire</a>";
    echo "<br/>";
    print $art->description;
    
    echo "<br/>";
    echo "<img src=" . $childM->content->attributes()->url . ">";
   
    echo "<br/>";
}
