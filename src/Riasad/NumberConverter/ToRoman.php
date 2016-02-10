<?php namespace Riasad\NumberConverter;
 
class ToRoman {
 
  	public function convert_to_roman($number)
  	{
            $roman_number = "";
 
            while ($number >= 1000)
            {
                $roman_number .= "M";
                $number -= 1000;
            }
            while ($number >= 900)
            {
                $roman_number .= "CM";
                $number -= 900;
            }
            while ($number >= 500)
            {
                $roman_number .= "D";
                $number -= 500;
            }
            while ($number >= 400)
            {
                $roman_number .= "CD";
                $number -= 400;
            }
            while ($number >= 100)
            {
                $roman_number .= "C";
                $number -= 100;
            }
            while ($number >= 90)
            {
                $roman_number .= "XC";
                $number -= 90;
            }
            while ($number >= 50)
            {
                $roman_number .= "L";
                $number -= 50;
            }
            while ($number >= 40)
            {
                $roman_number .= "XL";
                $number -= 40;
            }
            while ($number >= 10)
            {
                $roman_number .= "X";
                $number -= 10;
            }
            while ($number >= 9)
            {
                $roman_number .= "IX";
                $number -= 9;
            }
            while ($number >= 5)
            {
                $roman_number .= "V";
                $number -= 5;
            }
            while ($number >= 4)
            {
                $roman_number .= "IV";
                $number -= 4;
            }
            while ($number >= 1)
            {
                $roman_number .= "I";
                $number -= 1;
            }

            return $roman_number;
  	}
}