<?php

namespace Iracode\GitCommitChecker\Providers;

use Iracode\GitCommitChecker\Commands\InstallHooks;
use Iracode\GitCommitChecker\Commands\InstallPhpCs;
use Iracode\GitCommitChecker\Commands\PreCommitHook;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallHooks::class,
                PreCommitHook::class,
                InstallPhpCs::class,
            ]);
        }
    }
}
