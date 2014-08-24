<?php
namespace Rocketeer\Console\Commands\Plugins;

use Rocketeer\Abstracts\AbstractCommand;

class ListCommand extends AbstractCommand
{
	/**
	 * The default name
	 *
	 * @var string
	 */
	protected $name = 'deploy:plugin-list';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Lists the currently enabled plugins';

	/**
	 * Whether the command's task should be built
	 * into a pipeline or run straight
	 *
	 * @type boolean
	 */
	protected $straight = true;

	/**
	 * Run the tasks
	 *
	 * @return void
	 */
	public function fire()
	{
		!dd(class_exists('Rocketeer\Plugins\Slack\RocketeerSlack'));
		$plugins = $this->laravel['rocketeer.tasks']->getRegisteredPlugins();
		!dd($plugins);
	}
}
