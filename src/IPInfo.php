<?php
class IPInfo {
	
	private $ip;
	private $json;

	private $as;
	private $city;
	private $country;
	private $countryCode;
	private $isp;
	private $lat;
	private $lon;
	private $org;
	private $query;
	private $region;
	private $regionName;
	private $status;
	private $timezone;
	private $zip;

	public function __construct($ip) {
		$this->ip = $ip;

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, "http://ip-api.com/json/" . $this->ip);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_TIMEOUT, 5);
		$result = curl_exec($curl);
		curl_close($curl);

		$this->json = json_decode($result, true);
	}

	public function getAs() {
		return $this->json["as"];
	}

	public function getCity() {
		return $this->json["city"];
	}

	public function getCountry() {
		return $this->json["country"];
	}

	public function getCountryCode() {
		return $this->json["countryCode"];
	}

	public function getIsp() {
		return $this->json["isp"];
	}

	public function getLat() {
		return $this->json["lat"];
	}

	public function getLon() {
		return $this->json["lon"];
	}

	public function getOrg() {
		return $this->json["org"];
	}

	public function getQuery() {
		return $this->json["query"];
	}

	public function getRegion() {
		return $this->json["region"];
	}

	public function getRegionName() {
		return $this->json["regionName"];
	}

	public function getStatus() {
		return $this->json["status"];
	}

	public function getTimeZone() {
		return $this->json["timezone"];
	}

	public function getZip() {
		return $this->json["zip"];
	}

}
?>
