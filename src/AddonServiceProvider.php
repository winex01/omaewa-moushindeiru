<?php

namespace Omaewa\Moushindeiru;

use Illuminate\Support\ServiceProvider;

class AddonServiceProvider extends ServiceProvider
{
    use AutomaticServiceProvider;

    protected $vendorName = 'omaewa';
    protected $packageName = 'moushindeiru';
    protected $commands = [];
}
