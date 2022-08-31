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
        $this->apikey = config::get('OPENWEATHERMAP_APIKEY');
        // check weather the api key is filled
        if(!$this->apikey) {
            throw new Excepetion('Openweathermap api key not set');
        }

        $this->url = config::get('OPENWEATHERMAP_URL');
        // check weather the api key is filled
        if(!$this->url) {
            throw new Excepetion('Openweathermap url not set');
        }
    }

    /**
     * see https://openweathermap.org/bulk
     */
    public function import() {
        $this->checkEnv();

        

        
 
        try {
            $response = Http::get($this->url . $this->apiKey);
        } catch ( clientExcpetion $e) {
            throw new DatasourceException($e->getMessage());
        }

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