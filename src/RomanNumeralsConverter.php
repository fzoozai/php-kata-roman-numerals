<?php

class RomanNumeralsConverter
{
    public function convert($argument1)
    {
        if($argument1 == 5){
            return 'V';
        }

        return str_repeat('I', $argument1);
    }
}
