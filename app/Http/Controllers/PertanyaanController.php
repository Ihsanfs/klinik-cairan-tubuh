<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{

    public function index(Request $id){

        $pertanyaan = Pertanyaan::all();

        return view('pertanyaan.index',  ['pertanyaan' => $pertanyaan,'id' => $id]);
    }

    public function store(Request $request){
        $pertanyaan_id = $request->input('id_pertanyaan');
        $jawaban = $request->input('jawaban');

        foreach ($jawaban as $index => $answer) {
            // Pastikan nilai jawaban tidak kosong atau null sebelum menyimpan
            if ($answer !== null && $answer !== '') {
                $jawaban = new Jawaban();
                $jawaban->form2_id = $pertanyaan_id;
                $jawaban->questions_id = $index + 1; // Menyesuaikan nomor pertanyaan
                $jawaban->jawaban = $answer;

                $jawaban->save();
            }

        }
        return redirect()->route('suhu.diagnosa', ['id' => $jawaban->form2_id]);


    }
}
