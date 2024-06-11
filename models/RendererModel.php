<?php

declare(strict_types=1);

/**
 * Model for outputs
 */
class RendererModel
{
    /** @var array<string> $lat coordinat latitude*/
    public $lat;

    /** @var string $lon coordinate longitude */
    public $lon;

    /** @var string $format response format */
    public $format;

    /** @var array $data response data */
    public $data;

    /** @var array<string, string> $DEFAULTS */
    private $DEFAULTS = [
        "lat" => "",
        "lon" => "",
        "format" => "",
        "data"=>[]
    ];

    /**
     * Construct RendererModel
     *
     * @param string $template Path to the template file
     * @param array<string, string> $params request parameters
     */
    public function __construct($template, $params)
    {
        $this->DEFAULTS['lat']=$_ENV['DEFAULT_LAT'];
        $this->DEFAULTS['lon']=$_ENV['DEFAULT_LON'];
        $this->DEFAULTS['format']=$_ENV['DEFAULT_FORMAT'];
        $this->template = $template;
        $this->lat = $params["lat"] ?? $this->DEFAULTS["lat"];
        $this->lon = $params["lon"] ?? $this->DEFAULTS["lon"];
        $this->format = $this->sanitizeText($params["format"] ?? $this->DEFAULTS["format"]);
        $this->data = $this->fetchWeather($this->lat,$this->lon,$this->format);
    }
    /**
     * Validate style and return valid string
     *
     * @param string $style Style name parameter
     * @return string Sanitized style name
     */
    private function sanitizeText($style)
    {
        // return sanitized font name
        return preg_replace("/[^0-9A-Za-z\- ]/", "", $style);
    }
    /**
     * Fetch weather
     *
     * @param string $lat coordinate latitude
     * @param string $lon coordinate longitude
     * @param string $format The response format (JSON or CSV)
     * @return array The data return as array
     */
    private function fetchWeather($lat, $lon, $format)
    {
        $data = MeteoblueFetchWeather::fetchWeather($lat, $lon, $format);
        if ($data) {
            // return the data
            return json_decode( (string) $data);
        }
        
        return [];
    }
}
