<?php namespace Pankaj\Options;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class OptionsServiceProvider extends ServiceProvider {

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

        $this->app->bind('options',function(){

            return new Options();
        });
	}

    public function boot(){

        $this->package('Pankaj/Options');

        AliasLoader::getInstance()->alias('Option', 'Pankaj\Options\Option');

    }
	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
