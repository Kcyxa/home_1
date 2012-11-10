<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kcyxa
 * Date: 29.10.12
 * Time: 22:42
 * To change this template use File | Settings | File Templates.
 */

require_once 'autoload.php';

use Classes\ClassCat;
use Classes\ClassDog;

$lina = new ClassCat();
$lina -> sleep();

$kuza = new ClassDog();
$kuza -> language();

$bora = new ClassCat();
$bora -> game();