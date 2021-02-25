<?php
require_once 'src/entities/comptable.php';
require_once 'src/entities/RespoTech.php';
require_once 'src/entities/Users.php';

$respo = new RespoTech("diallo","mood","technicien");
$respo2 = new RespoTech("bah","taibou","belle");
 
$compta1 = new Comptable("sow","alpha","master");
$compta2 = new Comptable("bah","alimou","licence");

$user1 = new Users(1,"diallomoud72@gmail.com","passer","celibataire",$respo);

 echo "<pre>";
 var_dump($respo);
 var_dump($respo2);
echo "</pre>";

echo "<pre>";
 var_dump($compta1);
 var_dump($compta2);
echo "</pre>";

echo "<pre>";
 var_dump($user1);
echo "</pre>";

$persons = [$respo, $compta1];

foreach ($persons as $person){
    echo "<pre>";
    var_dump($person);
    echo "</pre>";
}

