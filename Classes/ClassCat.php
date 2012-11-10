<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kcyxa
 * Date: 28.10.12
 * Time: 21:34
 * To change this template use File | Settings | File Templates.
 */

namespace Classes;

use Classes\AbstractPets;
use Classes\InterfaceState;

class ClassCat extends AbstractPets implements InterfaceState

{
    public function language()
    {
        echo "nav-nav! <br/>";
    }

    public function game()
    {
        echo "Game with bat! <br/>";
    }

    public function eat()
    {
        echo "Cat food <br/>";
    }
}
