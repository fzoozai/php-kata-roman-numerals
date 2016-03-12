<?php

class RomanNumeralsConverter
{
    public function convert( $number )
    {
        $solution = '';

        while ($number >= 100) {
            $solution .= 'C';
            $number -= 100;
        }

        while ($number >= 50) {
            $solution .= 'L';
            $number -= 50;
        }

        while ( $number >= 10 ) {
            $solution .= 'X';
            $number -= 10;
        }

        while ( $number >= 5 ) {
            $solution .= 'V';
            $number -= 5;
        }

        $solution .= str_repeat('I', $number);
        return $solution;
    }
}



