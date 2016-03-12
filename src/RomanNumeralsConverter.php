<?php

class RomanNumeralsConverter
{
    public function convert( $argument1 )
    {
        $solution = '';

        if ( $argument1 >= 10 ) {
            $solution .= 'X';
            $argument1 -= 10;
        }

        if ( $argument1 >= 5 ) {
            $solution .= 'V';
            $argument1 -= 5;
        }

        $solution .= str_repeat('I', $argument1);
        return $solution;
    }
}



