<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Resources\Datasource;

class RatingController extends Controller
{
    /**
    Shows a list of different ratings
    Whe a flash 
     */
    Public function index()
    {
        
    }

    /**
    Show an input form for a rating
    A rating a minimum_temperature, a maximum_temprature, wind and a weathertype
    based on that data, a user can give a description, based on those data
     */
    Public function add()
    {
        
    }

    /**
    Show an input form for a rating, with filled in data

    When posted the rating is editted in the database. When succesfull, a flash message is set and the user is returned to the overall index page
    When errored, show the flash message and let the user correct it self

    @param Rating id The rating with the id from the database
     */
    Public function edit(Datasource id)
    {
        
    }

}