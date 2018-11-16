<?php

namespace App\Models;

class Common
{
    public static function mergeFromToAge($from, $to)
    {
        $value = '';
		if ($from) {
			$value = $from;
		}
		if ($to) {
			$value .= ' - ' . $to;
		}
		$value .= ' ' . __('common.years_old');
		if (!$from)
			$value = __('common.no');
        return $value;
	}

	public static function money($value)
	{
		return number_format($value, null, null, ',');
	}

	public static function months()
	{
		$months = [1=>1, 2=>2, 3=>3, 4=>4, 5=>5, 6=>6, 7=>7, 8>8 , 9=>9 , 10=>10, 11=>11, 12=>12];
		return $months;
	}

	public static function years()
	{
		$years = [];
		for ($i=(int)date("Y"); $i >= 1950 ; $i--) {
			$years[$i] = $i;
		}
		return $years;
	}

	public static function currencies()
	{
		return ['VND'=>'VND', 'USD'=>'USD'];
	}
}
