<?php

include 'Peperzaken/Ios/DecodeImage.php';

$processor = new Peperzaken_Ios_DecodeImage('football@2x.png');
$processor->decode('football@2x.regular.png');