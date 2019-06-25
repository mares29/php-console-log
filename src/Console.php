<?php


namespace Mares29\Console;


/**
 * Class Console
 *
 * @package Mares29\Console
 */
class Console
{

	/**
	 *
	 */
	public static function log()
	{
		array_map(function ($data) {
			echo "<script>console.log(JSON.parse('" . json_encode($data) . "'));</script>";
		}, func_get_args());
	}
}
