<?php

namespace \Services\Import\Forecast\OpenweatherMap;

use \Services\Import\Forecast\AbstractImport;
use Config;
use Illuminate\Support\Facades\Http;
use Logger;


class ImportService extends AbstractImport {


    protected $apiKey;

    /**
     * @inheritdoc
     */
    public function __construct(string $id) {
        parent::__construct($id);
    }
    

    protected function checkEnv() {
        $apikey = config::get('OPENWEATHERMAP_APIKEY');
        // check weather the api key is filled
        if(!$apikey) {
            throw new Excepetion('Openweathermap api key not set');
        }
    }

    /**
     * see https://openweathermap.org/bulk
     */
    public function import() {
        $this->checkEnv();

        // detect filenmae

        
 
        try {
            $response = Http::get('https://bulk.openweathermap.org/snapshot/weather_16.json.gz?appid=' . $this->apiKey);
        } catch ( clientExcpetion $e) {
            throw new DatasourceException($e->getMessage());
        )

        $data = $response->body();
        foreach($data as $json) {
            // if one of the sections fail, throw an exception
            // fetch city data, query database or insert
            // fetch weather data
            $rating = $this->predictRating($json['main'], $json['wind']]);
            // fetch the rating based on weather id and temperature and wind
            // push all the data in the rating database and proceed to the next line
            
        }
    }

    // calculate the rating based on the temperature, wind etc
    protected function predictRating($temperature, $wind) {

        $rating = Rating::findRating($temperature, $wind);
        return $rating->rating;
    }
}