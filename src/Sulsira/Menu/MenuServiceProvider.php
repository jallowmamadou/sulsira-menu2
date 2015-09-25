<?php namespace Sulsira\Menu;

use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// $this->mergeConfigFrom(
  //    __DIR__.'\config\config.php', 'menu'
		// );
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

	public function boot(){
// Publish a config file

		$this->publishes([
		    __DIR__.'\config\config.php' => config_path('menu/config.php'),
		]);
		$this->publishes([
		    __DIR__.'\config\nav.php' => config_path('menu/nav.php'),
		]);

	}

}
