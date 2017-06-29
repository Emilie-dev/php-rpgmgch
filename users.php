<?php
require_once('User.php');

// $client1
$client1 = new User();
echo $client1->getId();
$client1->setId("lulu");
echo $client1->getId();

echo $client1->getEmail();
$client1->setEmail("1234@lulu");
echo $client1->getEmail();

echo $client1->getCreatedAt();
$client1->setCreatedAt("29-06-2017");
echo $client1->getCreatedAt();


// $client2
$client2 = new User();
echo $client2->getId();
$client2->setId("titi");
echo $client2->getId();

echo $client2->getEmail();
$client2->setEmail("titi@bird");
echo $client2->getEmail();

echo $client2->getCreatedAt();
$client2->setCreatedAt("29-06-2017");
echo $client2->getCreatedAt();

return [$client1, $client2];

?>	