<?php

namespace App\Services;

use Google\Cloud\Translate\V2\TranslateClient;

class TranslatorService
{
    protected $translate;

    public function __construct()
    {
        $this->translate = new TranslateClient([
            'key' => env('GOOGLE_API_KEY')
        ]);
    }
    public function translateText($text, $targetLanguage = 'en')
    {
        $translation = $this->translate->translate($text, [
            'target' => $targetLanguage,
        ]);
        
        return $translation['text'];
    }
    public function translateHtml($htmlContent, $targetLanguage = 'en')
    {
        $translatedContent = $this->translate->translate($htmlContent, [
            'target' => $targetLanguage,
        ]);
        
        return $translatedContent['text'];
    }
}
