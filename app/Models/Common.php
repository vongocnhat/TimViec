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
		$months = [1, 2, 3, 4, 5, 6, 7, 8 ,9 , 10, 11, 12];
		return $months;
	}

	public static function years()
	{
		$years = [];
		for ($i=(int)date("Y"); $i >= 1950 ; $i--) {
			array_push($years, $i);
		}
		return $years;
	}
}
