<?php namespace Riasad\NumberConverter;

use Riasad\NumberConverter\ToWord;
use Riasad\NumberConverter\ToOrdinal;
use Riasad\NumberConverter\ToRoman;

class NumberConverter {
 
  	public function convert($number='',$type='')
  	{
  		$errors=$this->errors();

  		$type=strtoupper($type);
  		
  		$check=$this->check_params($number,$type);
  		
  		if($check!=0) 
  			return $errors[$check];

  		if($type=='W')
  		{
  			$convert=new ToWord;
  			return $convert->convert_to_word($number);
  		}
  		if($type=='O')
  		{
  			$convert=new ToOrdinal;
  			return $convert->convert_to_ordinal($number);
  		}
  		if($type=='R')
  		{
   			$convert=new ToRoman;
  			return $convert->convert_to_roman($number);
  		}
  	}

	private function check_params($number,$type)
	{
		if($number=='' || !is_numeric($number))	    
			return 101;
	    
	    if($type=='')  								
	    	return 102;
	    
	    if(!($type=='R' || $type=='W' || $type=='O'))  
	    	return 103;
	    
	    if($type=='R' && (!is_int($number) || $number<1 || $number>3999))  
	    	return 104;
        
        if($number > PHP_INT_MAX || $number < 0 - PHP_INT_MAX)
            return 105;

        if($type=='O' && $number<0)
        	return 106;
	    return 0;
	  }

  	private function errors()
  	{
  		return array(
	  			101=>"Error: Please insert a valid number.",
	  			102=>"Error: 2nd parameter is required. Ex. convert(21,R).",
	  			103=>"Error: Invalid 2nd parameter. Use 'R' for Roman, 'W' for Words and 'O' for Ordinal numbers.",
	  			104=>"Error: Only integers from 1 to 3999 are convertible into Roman.",
	  			105=>"Error: Word converter accepts numbers between -" . PHP_INT_MAX . " and " . PHP_INT_MAX,
	  			106=>"Error: Negetive numbers can't have ordinal suffix.",
  			);
  	}
 
}