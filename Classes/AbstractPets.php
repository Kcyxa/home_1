<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kcyxa
 * Date: 28.10.12
 * Time: 20:59
 * To change this template use File | Settings | File Templates.
 */

namespace Classes;

abstract class AbstractPets
{
    public $size;

    abstract public function language();

    public function sleep()
    {
        echo "Pet sleep! <br/>";
    }

}
