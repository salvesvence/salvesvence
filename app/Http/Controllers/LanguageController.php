<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LanguageController extends Controller
{
    /**
     * Change the current app locale variable
     *
     * @param $locale
     * @return mixed
     */
    public function switchLang($locale)
    {
        if( array_key_exists($locale, Config::get('translatable')['locales']) ) {

            App::setLocale($locale);
        }

        return Redirect::back();
    }
}
