<?php namespace Tasks\Providers;

use Illuminate\Routing\FilterServiceProvider as ServiceProvider;

class FilterServiceProvider extends ServiceProvider {

	/**
	 * The filters that should run before all requests.
	 *
	 * @var array
	 */
	protected $before = [
		'Tasks\Http\Filters\MaintenanceFilter',
	];

	/**
	 * The filters that should run after all requests.
	 *
	 * @var array
	 */
	protected $after = [
		//
	];

	/**
	 * All available route filters.
	 *
	 * @var array
	 */
	protected $filters = [
		'auth' => 'Tasks\Http\Filters\AuthFilter',
		'auth.basic' => 'Tasks\Http\Filters\BasicAuthFilter',
		'csrf' => 'Tasks\Http\Filters\CsrfFilter',
		'guest' => 'Tasks\Http\Filters\GuestFilter',
	];

}