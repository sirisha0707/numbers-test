<?php
class NumberGenerator
{
	/**
	* Prints "Linio" for multiplies of 3, "IT" for multiplies of 5 and "Linianos" for multiplies of both 3 & 5
	*
	* @param int $start
	* @param int $end
	*
	* @return void
	*/
	public static function numberPrint(int $start, int $end): void 
	{
		for ($num = $start; $num <= $end; $num++) {
			switch($num) {
				case ($num % 3 == 0 && $num % 5 == 0):
					echo " Linianos ";
					break;
				case ($num % 3 == 0):
					echo " Linio ";
					break;
				case ($num % 5 == 0):
					echo " IT ";
					break;
				default:
					echo " $num ";
			}
		}
	}
}

NumberGenerator::numberPrint(1, 100);	// Calling the method
