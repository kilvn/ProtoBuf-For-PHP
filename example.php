<?php
/**
 * @title    : example.php
 * @author   : kilvn
 * @dateTime : 2022-01-05 16:31:01
 */

require 'src/GPBMetadata/Person.php';
require 'src/Test/Person.php';

$person = new Test\Person();
$person->setName('隔壁老王');
$person->setAge(30);
$person->setSex(1);

$data = $person->serializeToJsonString();
echo $data;
