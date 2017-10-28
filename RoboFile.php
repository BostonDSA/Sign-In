<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */


require_once(__DIR__.'/vendor/autoload.php');


class RoboFile extends \Robo\Tasks
{
    // define public methods as commands
    function compileScss() {
    	$this->taskScss([
	    	'resources/assets/sass/app.scss' => 'public/css/app.css'
	    ])
	    ->importDir('assets/styles')
	    ->run();
    }

}
