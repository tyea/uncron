<?php

namespace Tyea\Uncron;

use DateTime;
use DateTimeZone;

class Timer
{
	private function __construct()
	{
	}
	
	public static function getSeconds(): Int
	{
		$now = new DateTime("now", new DateTimeZone("UTC"));
		$seconds = intval($now->format("s"));
		return $seconds;
	}
	
	public static function getMicroseconds(): Int
	{
		$now = new DateTime("now", new DateTimeZone("UTC"));
		$microseconds = intval($now->format("v"));
		return $microseconds;
	}
	
	public static function getMilliseconds(): Int
	{
		$now = new DateTime("now", new DateTimeZone("UTC"));
		$milliseconds = intval($now->format("u"));
		return $milliseconds;
	}
}
