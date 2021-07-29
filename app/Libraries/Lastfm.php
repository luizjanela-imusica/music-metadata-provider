<?php

namespace App\Libraries;

class Lastfm 
{
	// TODO: Generate custom api key for Last.fm API
	private $apiKey = '0592ad31249201dd89c250fa7062af4a';
	private $endpoint = 'https://ws.audioscrobbler.com/2.0/?';
	private $format = 'json';

	private function getBaseUrl() {
		return $this->endpoint . 
			'api_key=' . $this->apiKey . 
			'&format=' . $this->format . 
			'&';
	}

	// TODO: Customize method to search for multiple words
	public function searchAlbum($value) {

		$url = $this->getBaseUrl() . "method=album.search&album=$value&limit=1";

		$client = \Config\Services::curlrequest();

		$response = $client->request('GET', $url);
		$responseArray = json_decode($response->getBody());

		$responseParsed = [];

		if (!$responseArray || 
			!$responseArray->results ||
			!$responseArray->results->albummatches || 
			!$responseArray->results->albummatches->album)
			return $albumsParsed;

		$responseParsed = $responseArray->results->albummatches->album;

		return $responseParsed;
	}	
}