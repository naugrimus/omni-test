<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Resources\Datasource;

class DataSourceController extends Controller
{
    /**
    Shows a list of different datasources
    Whe a flash 
     */
    Public function indexAction()
    {
        
        return response()
        ->view('\Admin\Datasources\List' 200)
    }

    /**
    Show an input form for a datasource
    When posted the datasource is put in the database. When succesfull, a flash message is set and the user is returned to the overall index page
    When errored, show the flash message and let the user correct it self
     */
    Public function addAction()
    {
        return response()
        ->view('\Admin\Datasources\Add' 200)
    }

    Public function save()
    {
        // succesfull
        if($saved) {
            return redirect(self::indexAction)->with('status', 'saved!');
        } else {
            return response()
                ->view('\Admin\Datasources\Add', $errormessage, 400)
        }
    }

    /**
    Show an input form for a datasource, with filled in data

    When posted the datasource is editted in the database. When succesfull, a flash message is set and the user is returned to the overall index page
    When errored, show the flash message and let the user correct it self

    @param Datasource id The datasource with the id from the database
     */
    Public function editAction(Datasource id)
    {
        
    }

}