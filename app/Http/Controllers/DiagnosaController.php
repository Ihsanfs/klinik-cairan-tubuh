<?php

namespace App\Http\Controllers;

use App\Models\Cairan;
use App\Models\Form1;
use App\Models\Form2;
use App\Models\Suhu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class DiagnosaController extends Controller
{

    public function index(Request $id){
        // dd($id->id);
    return view('diagnosa.index',  ['id' => $id]);

    }

    public function hasil(Request $id){

        $hasil = Cairan::Join('suhu','cairan.suhu_id' ,'=' ,'suhu.id')
        ->join('form_data_2', 'suhu.id_form2', '=', 'form_data_2.id')->select('form_data_2.*','cairan.*', 'suhu.*') ->find($id);
        // dd($hasil);
    return view('hasil.index',  ['hasil' => $hasil]);

    }
    public function diagnosasimpan(Request $request)
    {
        $iwl = null;
        $cairan = null;
        $waktu = null;
        $berat = null;

        if ($request->isMethod('post')) {
            $request->validate([
                'total_cairan' => 'required|numeric',
                'waktu' => 'required|numeric',
                'berat_badan' => 'required|numeric', // Tambahkan validasi berat_badan
            ]);
            $suhu = $request->suhu_id;

            $cairan = new Cairan();
            $cairan->suhu_id = $suhu;
            $cairan->email = $request->email;
            $cairan->total_cairan = $request->total_cairan;
            $cairan->waktu = $request->waktu;
            $cairan->berat_badan = $request->berat_badan;

            $cairan->save();
        }

        return redirect()->route('diagnosa.hasil', ['id' => $cairan->id]);

    }
    
public function suhuid(Request $id){
    // dd($id->id);
    return view('diagnosa.suhu',  ['id' => $id]);
}


    public function suhu( Request $request){


        $iwl = null;
        $cairan_masuk = null;
        $suhu = null;
        $iwl_normal = null;


        if ($request->isMethod('post')) {
            $request->validate([
                'cairan_masuk' => 'required|numeric',
                'suhu' => 'required|numeric',
                'iwl_normal' => 'required|numeric',
            ]);
            $form2_id = $request->form2;

            $data = new Suhu();
            $data->id_form2 = $form2_id;
            $data->jumlah_cairan= $request->cairan_masuk;
            $data->jumlah_suhu_naik = $request->suhu;
            $data->iwl_normal = $request->iwl_normal;
            $data->save();
            // $cairan_masuk = $request->input('cairan_masuk');
            // $suhu= $request->input('suhu');
            // $iwl_normal = $request->input('iwl_normal');
            // $total = (0.10 * $cairan_masuk) / 24;
            // $iwl = $total + $iwl_normal;

        }
        return redirect()->route('diagnosa', ['id' => $data->id]);

        // return view('diagnosa.suhu', compact('iwl', 'suhu', 'cairan_masuk','iwl_normal'));
    }

    public function diagnosa(){


      return view('form.form-1');
    }

public function caregive(Request $id){

return view('form.form-2', ['id' => $id]);
}

    public function store(Request $request){


        try {
            $validatedData = $request->validate([
                'nama' => 'required|string',
                'alamat' => 'required|string',
                'agama' => 'required|string',
                'usia' => 'required|integer',
                'jk' => 'required|string',
                'pendidikan' => 'required|string',
                'suku' => 'required|string',
                'pekerjaan' => 'required|string',
                'pendapatan' => 'required|string',
                'hubungan' => 'required|string',
            ]);

            $data = new Form1();
            $data->nama = $validatedData['nama'];
            $data->alamat = $validatedData['alamat'];
            $data->agama = $validatedData['agama'];
            $data->usia = $validatedData['usia'];
            $data->jenis_kelamin = $validatedData['jk'];
            $data->pendidikan_terakhir = $validatedData['pendidikan'];
            $data->suku = $validatedData['suku'];
            $data->status_pekerjaan = $validatedData['pekerjaan'];
            $data->pendapatan = $validatedData['pendapatan'];
            $data->hubungan_pasien = $validatedData['hubungan'];
            $data->save();

            return redirect()->route('form.caregive', ['id' => $data->id]);
        } catch (\Exception $e) {
            return "Maaf, ada masalah dalam menyimpan data: " . $e->getMessage();
        }
      }


      public function simpan(Request $request){


        try {
            $validatedData = $request->validate([
                'nama' => 'required|string',
                'alamat' => 'required|string',
                'agama' => 'required|string',
                'usia' => 'required|numeric',
                'jk' => 'required|string',
                'pendidikan' => 'required|string',
                'suku' => 'required|string',
                'pekerjaan' => 'required|string',
                'pendapatan' => 'required|string',
                'hubungan' => 'required|string',
            ]);
            $form1_id = $request->input('form1');
            $data2 = new Form2();
            $data2->form1_id = $form1_id;
            $data2->nama = $validatedData['nama'];
            $data2->alamat = $validatedData['alamat'];
            $data2->agama = $validatedData['agama'];
            $data2->usia = $validatedData['usia'];
            $data2->jenis_kelamin = $validatedData['jk'];
            $data2->pendidikan_terakhir = $validatedData['pendidikan'];
            $data2->suku = $validatedData['suku'];
            $data2->status_pekerjaan = $validatedData['pekerjaan'];
            $data2->pendapatan = $validatedData['pendapatan'];
            $data2->hubungan_pasien = $validatedData['hubungan'];
            $data2->save();

            return redirect()->route('pertanyaan', ['id' => $data2->id]);
        } catch (\Exception $e) {
            return "Maaf, ada masalah dalam menyimpan data: " . $e->getMessage();
        }

      }
}
