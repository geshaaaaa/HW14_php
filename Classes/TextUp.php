<?php

class TextUp extends TextLow
{
    public function print()
    {
         echo strtoupper($this->text) . PHP_EOL;
    }

}