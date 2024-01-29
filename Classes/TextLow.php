<?php

class TextLow
{
    protected string $text = "some text";

    public function print()
    {
        echo ucfirst($this->text) . PHP_EOL;
    }

}