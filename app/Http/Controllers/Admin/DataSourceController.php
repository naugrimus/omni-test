<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class DataSourceController extends Controller
{
    /**
    Shows a list of different datasources
    Whe a flash 
     */
    Public function index()
    {
        
    }

    /**
    Show an input form for a datasource
    When posted the datasource is put in the database. When succesfull, a flash message is set and the user is returned to the overall index page
    When errored, show the flash message and let the user correct it self
     */
    Public function add()
    {
        
    }

    /**
    Show an input form for a datasource, with filled in data
    When posted the datasource is editted in the database. When succesfull, a flash message is set and the user is returned to the overall index page
    When errored, show the flash message and let the user correct it self
     */
    Public function edit()
    {
        
    }

}