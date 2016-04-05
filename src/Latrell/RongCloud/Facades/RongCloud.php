<?php
namespace Latrell\RongCloud\Facades;

use Illuminate\Support\Facades\Facade;

class RongCloud extends Facade
{

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'rcloud';
	}
}