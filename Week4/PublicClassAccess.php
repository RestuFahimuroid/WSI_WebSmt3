<?php
echo "HASIL ACCESS PUBLIC CLASS PHP";
require_once('Enskapsulasi.php');

echo "properti dapat diakses : <br>";

$person1 = new PublicPerson();
echo "Haiiii " . $person1->name = "Restu Fahimuroid";

echo "Method tidak dapat diakses secara langsung : <br>";
echo "Haii2 " . $person1->get_name();

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";
echo "HASIL ACCESS PRIVATE CLASS PHP <br>";

$person2 = new PrivatePerson();
echo "Properti bisa diakses secara langusng : <br>";
echo "Haiii " . $person2->name2 = "Restu Fahimuroid 2222 <br>";
echo "Method tidak bisa diakses secara langusng <br>";
echo "Haiiiii" . $person2->get_name2();


echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";
echo "HASIL ACCESS PROTECTED CLASS PHP <br>";

$person3 = new ProtectedPerson();
//Set value properti name 
$person3->set_name3("Restu Fahimuroid3");
echo " Akses value dari properti name <br>";
echo $person3->get_name3();
echo " properti tidak bisa di akses secara langsung, kana muncul error <br>";
echo "Haiiii" . $person3->name3 = " Nama Saya Restu Fahim12345 <br>";
