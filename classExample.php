<?php

class TextInput
{
    public $value;
    public function add($text) {
        $this->value = $this->value + $text;
    }
    
    public function getValue() {
        echo "called get value - " . $this->value;
        return $this->value;
    }
}

class NumericInput extends TextInput
{
    public function add($numeric) {
        if(is_numeric($numeric)) {
            $this->value = $this->value . $numeric;
        }
    }
}

$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');
echo $input->getValue();
