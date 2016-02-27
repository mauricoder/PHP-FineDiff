<?php

/**
 * Created by PhpStorm.
 * User: mauricio
 * Date: 27/02/16
 * Time: 01:57 PM
 */

use MauriCoder\FineDiff\FineDiff;

class FineDiffTest extends PHPUnit_Framework_TestCase
{
    protected $from = "<h1>Esto es el titlo</h1>h1>
Acá un alínea
Acá otra línea loco!";

    protected $to = "<h1>Esto es el título</h1>h1>
[b]Acá una línea[/b]
¡Acá otra línea loco!";

    public function testEstatico()
    {
        $fineDiff = new FineDiff($this->from, $this->to);
        print $fineDiff->renderDiffToHTML();
/*        $opcodes = FineDiff::getDiffOpcodes($this->from, $this->to);
        print FineDiff::renderDiffToHTMLFromOpcodes($this->from, $opcodes);*/
    }
}
