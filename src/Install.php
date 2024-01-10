<?php

namespace think\ignition;

use think\App;
use think\Env;

use Composer\Script\Event;

class Install
{
	public static function config($event){
		$io = $event->getIO();
		$io->write('in install');
		$io->write('version:'. App::VERSION);
		$app = new App();
		$io->write('config_path:'.$app->getConfigPath());
		$io->write(__DIR__.'/../config/config.php');
	}

}