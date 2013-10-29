<?php namespace Promo\Repositories;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

	public function register()
	{
		// App::bind('Promo\Repositories\UserRepository', 'Promo\Repositories\EloquentUserRepository');
		$this->app->bind('Promo\Repositories\UserRepository',
			'Promo\Repositories\EloquentUserRepository'
			);
	}
}