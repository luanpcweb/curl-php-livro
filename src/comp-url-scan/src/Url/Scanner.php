<?php
namespace Oreilly\ModernPHP\Url;
class Scanner
{
	/**
	 * @var array  Um array de URLs
	 */
	protected $urls;
	/**
	 * @var  \GuzzleHttp\Client
	 */
	protected $httpClient;
	/**
	 * Construtor
	 * @param  array $urls Um array de Urls para o Scan
	 */
	puclic function __construct(array $urls)
	{
		$this->urls = $urls;
		$this->httpClient = new \GuzzleHttp\Client();
	}
	/**
	 * Obtem Urls Invalidos
	 * @return array
	 */
	public function getInvalidUrls()
	{
		$invalidUrls = [];
		foreach ($this->urls as $url) {
			try {
				$statusCode = $this->getStatusCodeForUrl($url);
			} catch (\Exception $e) {
				$statusCode = 500;
			}
			if ($statusCode >= 400) {
				array_push($invalidUrls, [
					'url' => $url,
					'status' => $statusCode
					]);
			}
		}
		return $invalidUrls;
	}
	/**
	 * Obtem o codigo de status HTTP para o URl 
	 * @param  string $url O URL remoto
	 * @return int   O codigo de status HTTP
	 */
	public function getStatusCodeForUrl($url)
	{
		$httpResponse = $this->httpClient->options($url);
		return $httpResponse->getStatusCode();
	}
}