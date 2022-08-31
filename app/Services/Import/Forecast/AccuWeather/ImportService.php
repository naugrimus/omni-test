<?php

namespace \Services\Import\Forecast\OpenweatherMap;

use \Services\Import\Forecast\AbstractImport;
use Config;
use Illuminate\Support\Facades\Http;
use Logger;


class ImportService extends AbstractImport {


    protected $apiKey;

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

        

       // loop through the json data


       // fetch the city id from the database

       //fetch the 
    }
}