<?php
namespace src\Store;


class CommandOutputDocument implements Documentable
{
	
	public function __construct($command)
	{
		$this->command = $command;
	}

	public function getId()
	{
		return $this->command;
	}

	public function getContent()
	{
		return shell_exec($this->command);
	}

}