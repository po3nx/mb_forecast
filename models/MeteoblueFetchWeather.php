<?php

/**
 * Class for Fetch Weather API
 */
class MeteoblueFetchWeather
{
    public static function fetchWeather($lat, $lon, $format)
    {
        /*$url =
            "https://my.meteoblue.com/packages/basic-1h?" .
            http_build_query([
                "apikey" => $_ENV['API_KEY'],
                "lat" => $lat,
                "lon" => $lon,
                "format"=>$format
            ]);*/
        $url = "https://my.meteoblue.com/packages/basic-10min_basic-1h_basic-day?".
            http_build_query([
                "lat" => "47.56",
                "lon" => "7.57",
                "apikey" =>"DEMOKEY",
                "sig"=>"6dc30666add97137e75d10d98debedbb"
            ]);
        try {
            $response = self::curlGetContents($url);
            
            return $response;
        } catch (InvalidArgumentException $error) {
            return "";
        }
    }

    private static function curlGetContents($url): string
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_VERBOSE, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($httpCode != 200) {
            throw new InvalidArgumentException("Failed to fetch Google Font from API.");
        }
        return $response;
    }
}