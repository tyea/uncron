<?php

namespace Tyea\Uncron;

use Illuminate\Console\Command;

class ScheduleRepeatCommand extends Command
{
	protected $signature = "schedule:repeat";

	protected $description = "Repeatedly run the scheduled commands";

	public function handle()
	{
		while (true) {
			if (Timer::getSeconds() == 0) {
				$this->call("schedule:run");
			}
			$delay = 1000000 - Timer::getMilliseconds();
			usleep($delay);
		}
	}
}
