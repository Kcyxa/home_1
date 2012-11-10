<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kcyxa
 * Date: 28.10.12
 * Time: 21:35
 * To change this template use File | Settings | File Templates.
 */

namespace Classes;

use Classes\AbstractPets;
use Classes\InterfaceState;

class ClassDog extends AbstractPets implements InterfaceState
{
    public $size;

    public function language()
    {
        echo "gav-gav! <br/>";
    }

    public function game()
    {
        echo "Game with stick! <br/>";
    }

    public function eat()
    {
        echo "Dog food <br/>";
    }
}
