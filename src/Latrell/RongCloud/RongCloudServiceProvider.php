<?php
namespace Latrell\RongCloud;

use Illuminate\Support\ServiceProvider;

class RongCloudServiceProvider extends ServiceProvider
{

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__ . '/../../config/config.php' => config_path('latrell-rcloud.php')
		], 'config');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->mergeConfigFrom(__DIR__ . '/../../config/config.php', 'latrell-rcloud');

		$this->app->singleton('rcloud', function ($app) {
			$config = $app->config->get('latrell-rcloud');
			return new RongCloud($config);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [
			'rcloud'
		];
	}
}
