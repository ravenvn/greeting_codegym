<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function new()
    {
        return view('dictionaries.new');
    }

    public function create(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:5',
            'age' => 'numeric|between:18,25',
            'email' => 'required|email'
        ]);
        return view('dictionaries.new');
    }

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
