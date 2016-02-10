<?php namespace Riasad\NumberConverter;
 
class ToOrdinal {
 
  	public function convert_to_ordinal($number)
  	{
        if (!in_array(($number % 100),array(11,12,13))){
          switch ($number % 10) {
            case 1:  return $number.'st';
            case 2:  return $number.'nd';
            case 3:  return $number.'rd';
          }
        }
        return $number.'th';
  	}
}