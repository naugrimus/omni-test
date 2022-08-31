<?php

namespace \Services\Import;

class ImportFactory {

    /**
     * Load the class with the given datasource
     * 
     * param string $datasource
     */
    public function loadImportDatasourceClass(string $datasource) {

        $class = '\Services\Import\Forecast';
        return new $class($datasource);
    }
}