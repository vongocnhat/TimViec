<?php

namespace App\Models;

class Common
{
    public static function mergeFromTo($from, $to, $message)
    {
        $value = '';
		if ($from) {
			$value = $from;
		}
		if ($to) {
			$value .= ' - ' . $to;
		}
		if ((!$from && $to) || !($from && $to))
			$value = $message;
        return $value;
	}
}
