<?php
class App {
	protected $routes = array();
	protected $responseStatus = '200 OK';
	protected $responseContentType = 'text/html';
	protected $responseBody = 'Hello world';


	public function addRoute($routePath, $routeCallback)
	{
		$this->routes[$routePath] = $routeCallback->bindTo($this, __CLASS__);
	}


	public function dispatch($currentPath)
	{


		foreach ($this->routes as $routePath => $callBack) {
			if ($routePath === $currentPath) {
				$callBack();
			}
		}
	


		header('HTTP/1.1'. $this->responseStatus);
		header('Content-Type: ' . $this->responseContentType);
		header('Content-Lenght: ' . mb_strlen($this->responseBody));


		echo $this->responseBody;

	}

}