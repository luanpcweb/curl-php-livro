<?php
namespace src\Store;

error_reporting(E_ALL);
ini_set("display_errors", 1);


class DocumentStore
{
	
	protected $data = [];

	public function addDocument(Documentable $document)
	{
		$key = $document->getId();
		$value = $document->getContent();
		$this->data[$key] = $value;
	}

	public function getDocuments()
	{
		return $this->data;
	}
}