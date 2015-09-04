<?php

namespace src\Store;

interface Documentable
{
	public function getId();
	public function getContent();
}