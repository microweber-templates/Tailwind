<?php

namespace Templates\Tailwind\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use MicroweberPackages\LaravelTemplates\Providers\BaseTemplateServiceProvider;

class TailwindServiceProvider extends BaseTemplateServiceProvider
{
    protected string $moduleName = 'Tailwind';

    protected string $moduleNameLower = 'tailwind';

    /**
     * Boot the application events.
     */
    public function boot(): void
    {

    }


    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');


    }

}
