<?php

namespace \App\Services\Import\Forecast;

use \App\Models\Datasource;

Abstract class AbstractImport {

    /**
     * class constructor
     * 
     * checks the database if the datasourceid exists
     */
    function __construct(string $id) {

        try {
            return Datasource::where('name' => $id);
            
        } catch (ModelNotFoundException $e) {
            throw new DatasourceNotFoundException($e->getMessage);
        }

    }

    abstract function import() {
        
    }
}