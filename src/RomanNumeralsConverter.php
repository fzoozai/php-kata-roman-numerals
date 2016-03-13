<?php

class RomanNumeralsConverter{

    protected static $lookup = [
        100 => 'C',
        50 => 'L',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I'
    ];

    public function convert( $number )
    {
        /*We set a variable as a empty '' for concatenation reasons*/

        $solution = '';


        /*For the lines 11 - 40 we use the same pattern. We do the condition request.
        Then set our $solution variable to the exact value of the condition request in the roman numerals form.
        Then we substract the same number of the condition request
        from our $number variable */

/*        while ($number >= 100) {
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

        while ( $number >= 9 ) {
            $solution .= 'IX';
            $number -= 9;
        }

        while ( $number >= 5 ) {
            $solution .= 'V';
            $number -= 5;
        }

        while ( $number >= 4 ) {
            $solution .= 'IV';
            $number -= 4    ;
        }


//        Instead of :
//        $solution .= str_repeat('I', $number);
//        return $solution;
//        We can do the following:


        while($number >= 1){
            $solution .= 'I';
            $number -= 1;
        }*/

        /*Now we do some refactoring after we understood the underlying pattern.*/

        foreach (static::$lookup as $limit => $glyph)
        {
            while($number >= $limit)
            {
                $solution .= $glyph;
                $number -= $limit;
            }
        }

        return $solution;

    }
}



