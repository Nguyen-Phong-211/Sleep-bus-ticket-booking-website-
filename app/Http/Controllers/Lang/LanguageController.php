<?php

namespace App\Http\Controllers\Lang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    /**
     * Thay đổi ngôn ngữ ứng dụng.
     *
     * @param  string  $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeLanguage($locale)
    {
        if (in_array($locale, ['vi', 'en'])) {
            App::setLocale($locale);  
            session(['locale' => $locale]); 
        }

        return redirect()->to(url()->previous());
    }
}
