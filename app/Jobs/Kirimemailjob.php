<?php

namespace App\Jobs;

use App\Mail\KirimEmail;
use App\Models\Cairan;
use App\Models\jobs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class Kirimemailjob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // protected $waktu;
    protected $waktuPerId = [];
    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        // $this->waktu = $waktu;

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        // $waktuSekarang = now();
        // $pagi = now()->setHour(8)->setMinute(0)->setSecond(0);
        // $siang = now()->setHour(14)->setMinute(0)->setSecond(0);
        // $malam = now()->setHour(20)->setMinute(0)->setSecond(0);
        // if ($waktuSekarang->equalTo($pagi) || $waktuSekarang->equalTo($siang) || $waktuSekarang->equalTo($malam)) {
            $cairan = Cairan::all();

            foreach ($cairan as $waktu) {
                $totalWaktu = $waktu->waktu * 24; // total waktu yang dibutuhkan
                $interval = $waktu->waktu * 24 / 3; // interval (3 menit dalam 24 jam)
                $cairanku = $waktu->total_cairan / $waktu->waktu;
                $job = new jobs();
                $job->cairan_id = $waktu->id;
                $job->save();

                // Ambil data dari database berdasarkan id
                $savedData = jobs::where('cairan_id', $waktu->id)->get();

                // jumlah data yang sudah tersimpan dan tambahkan waktu
                if ($totalWaktu > $interval) {
                    $count = $savedData->count();
                    $newWaktu = $interval * $count;
                    $cairans = $cairanku * $count;
                    // Hanya tambahkan informasi ke dalam array atau variabel untuk setiap email yang akan dikirim
                    $emails[] = [
                        'email' => $waktu->email,
                        'subject' => 'Jadwal Minum Obat Kamu ' . $newWaktu. ' dan Cairan tubuh kamu ' . $cairans
                    ];

                    if ($newWaktu >= $totalWaktu) {
                        // Hentikan job dengan ID yang sudah mencapai batas totalWaktu
                        jobs::where('cairan_id', $waktu->id)->delete();
                    }
                }
            }

            // Kirim email ke semua entitas dalam satu waktu
            foreach ($emails as $email) {
                Mail::to($email['email'])->send(new KirimEmail($email['subject']));
            }

            // Tunggu 24 jam sebelum melakukan kirim email lagi
            sleep(86400);
        // }
    }
}
