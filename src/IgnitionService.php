<?php
declare (strict_types = 1);

namespace think\ignition;

use think\facade\Config;
class IgnitionService extends \think\Service
{
    /**
     * 注册服务
     *
     * @return mixed
     */
    public function register()
    {
        $this->app->bind('ignition', \Spatie\Ignition\Ignition::class);
    }

    /**
     * 执行服务
     *
     * @return mixed
     */
    public function boot()
    {
        $config = Config::get('ignition');
        $this->app->ignition
            ->applicationPath($this->app->getBasePath())
            ->theme($config['useDarkMode']?'dark':'light')
            ->shouldDisplayException(Config::get('app.show_error_msg'))
            ->setEditor($config['editor'])
            ->register();
    }
}
