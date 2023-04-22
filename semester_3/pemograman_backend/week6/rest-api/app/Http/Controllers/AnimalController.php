<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    private $animals;

    public function __construct()
    {
        $this->animals = ['ayam', 'bebek', 'burung', 'kucing'];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "Menampilkan data animals";
        echo "<br>";
        foreach ($this->animals as $animal) {
            echo $animal . "<br>";
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "Nama hewan: $request->nama";
        echo "<br>";
        echo "Menambahkan hewan baru";
        array_push($this->animals, $request->nama);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo "Nama hewan: $request->nama";
        echo "<br>";
        echo "Mengupdate data hewan id $id";

        $this->animals[$id] = $request->nama;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "Menghapus data hewan id $id";
        echo "<br>";
        unset($this->animals[$id]);
    }
}
