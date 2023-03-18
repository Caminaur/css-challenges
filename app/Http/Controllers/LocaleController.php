<?php

namespace App\Http\Controllers;

class LocaleController extends Controller
{
    /**
     * Simple function to set the Locale Value
     * @param string $locale
     * @return redirect()
     */
    public function setLocale(string $locale)
    {
        if (array_key_exists($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}
