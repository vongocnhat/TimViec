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
	
}
