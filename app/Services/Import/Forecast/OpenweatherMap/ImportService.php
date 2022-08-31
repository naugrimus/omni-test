<?php

namespace \Services\Import\Forecast\OpenweatherMap;

use \Services\Import\Forecast\AbstractImport;

class ImportService extends AbstractImport {


    public function __construct(string $id) {
        parent::__construct($id);
    }
    
}