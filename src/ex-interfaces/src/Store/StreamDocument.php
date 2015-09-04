<?php
namespace src\Store;

/**
* 
*/
class StreamDocument implements Documentable
{
	
	public function __construct($resource, $buffer = 4096)
	{
		$this->resource = $resource;
		$this->buffer = $buffer;
	}

	public function getId()
	{
		return 'resource - '. (int)$this->resource;
	}

	public function getContent()
	{
		$streamContent = '';
		rewind($this->resource);
		while (feof($this->resource) === false) {
			$streamContent .= fread($this->resource, $this->buffer);
		}

		return $streamContent;

	}
}