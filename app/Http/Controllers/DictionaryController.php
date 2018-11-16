<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    function translation(Request $request)
    {
        $dictionaries = [
            "hello" => 'xin chao',
            "how" => 'nhu the nao',
            "book" => 'sach',
            "computer" => 'may tinh'
        ];
        $searchTranslation = '';
        foreach ($dictionaries as $word => $translation) {
            if ($request->search == $word) {
                $searchTranslation = $translation;
                break;
            }
        }
    
        return view('translation', [
            'translation' => $searchTranslation,
            'age' => $request->age
        ]);
    }
}
