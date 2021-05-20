<?php namespace psagnataf\TesseractOCR\Tests\Unit;

use psagnataf\TesseractOCR\Command;

class TestableCommand extends Command
{
	public function __construct($image=null, $version='3.05')
	{
		parent::__construct($image, 'tmpfile');
		$this->version = $version;
	}

	public function getTesseractVersion() { return $this->version; }
}
