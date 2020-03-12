<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UncronServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->commands([
			"Tyea\\Uncron\\ScheduleRepeatCommand"
		]);
	}
}
