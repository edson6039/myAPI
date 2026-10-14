<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{
    //
    function getAll()
    {

        $bands = $this->getBands();

        return response()->json([$bands]);
    }

    function getById(int $id)
    {
        $getBands = $this->getBands();

        foreach ($getBands as $band) {
            if ($band['id'] == $id) {
                return response()->json([$band]);
            }
        }

        return abort(404);
    }

    function getGenderById(int $id)
    {
        $getBands = $this->getBands();

        foreach ($getBands as $band) {
            if ($band['id'] == $id) {
                return response()->json([$band['genre']]);
            }
        }

        return abort(404);
    }

    function store(request $request)
    {

        $validate = $request->validate([
            'name' => 'required'
        ]);

        return response()->json([
            'message' => 'Band created successfully',
            'data' => $validate
        ]);
    }

    protected function getBands()
    {
        return [
            [
                'id' => 1,
                'name' => 'The Beatles',
                'genre' => 'Rock',
                'year_formed' => 1960
            ],
            [
                'id' => 2,
                'name' => 'Nirvana',
                'genre' => 'Grunge',
                'year_formed' => 1987
            ],
            [
                'id' => 3,
                'name' => 'Queen',
                'genre' => 'Rock',
                'year_formed' => 1970
            ]
        ];
    }

}
