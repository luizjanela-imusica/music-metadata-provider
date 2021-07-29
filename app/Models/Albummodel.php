<?php

namespace App\Models;

use App\Models\Dal\Albumdal;

class Albummodel {
	
	private $name;
	private $artist;
	private $url;
	private $cover;

	public function setName($name) {
		$this->name = $name;
	}

	public function setArtist($artist) {
		$this->artist = $artist;
	}

	public function setUrl($url) {
		$this->url = $url;
	}

	public function setCover($cover) {
		$this->cover = $cover;
	}

	public function toArray() {
		return [
			'name'		=> $this->name,
			'artist' 	=> $this->artist,
			'url' 		=> $this->url,
			'cover' 	=> $this->cover,
		];
	}

	// Return an array of albums or a empty array
	public function search($value) {

		// Access data access layer
		$albumdal = new Albumdal();
		return $albumdal->search($value);
	}
}