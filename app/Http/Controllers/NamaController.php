<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamaController extends Controller
{
    public function hallo()
    {

        $f = 1;
        $total = $f * 100;
        if($total >= 1000){
            return 'Diatas Seribu';
        }else{
            return 'Dibawah Seribu';
        }
            return $total;
    }

    public function profile()
    {
        return view('pages.profile');
    }
    public function facebook($perkalian,$nama)
    {
        $calculator = 10 + 7;
        $hasilperkalian = $calculator * $perkalian;
        $jk = 10;
        return view ('about' , compact('nama','hasilperkalian','jk'));
    }

    public function siswa () {
        $a = [
            array('id' => 1, 'name' => 'dadang' , 'age' => '18 ','hobi'=>[
        'Membaca Novel','Push Rank','Bernyanyi']),
            array('id' => 2, 'name' => 'dadang' , 'age' => '15 ','hobi'=>[
                'Renang ','Mancing','Futsal','turu']),
        ];
        // dd($a);
        return view ('pages.siswa' , ['siswa' => $a]);
    }
   public function berat($berat,$tinggi)
   {
    $bmi = $berat/(($tinggi/100)*($tinggi/100));

    return view('pages.bb', compact('bmi','berat','tinggi'));
   }

   public function dosen()
   {
    $d =
            [
                [
                    'nama_dosen' => "Nazril",
                    'no_induk_dosen' => "001",
                    'nama_siswa' =>
                    [
                        [
                            'Nama_Siswa' => "firza",
                            'Nip' => "1",
                            'jurusan' => "it",
                            'matkul' => ['indonesia','matematika','inggris'],
                        ],

                        [
                            'Nama_Siswa' => "rendi",
                            'Nip' => "2",
                            'jurusan' => "it",
                            'matkul' => ['indonesia','matematika','inggris'],
                        ],

                        [
                            'Nama_Siswa' => "raka",
                            'Nip' => "3",
                            'jurusan' => "it",
                            'matkul' => ['indonesia','matematika','inggris'],
                        ],
                           [
                            'Nama_Siswa' => "gera",
                            'Nip' => "4",
                            'jurusan' => "it",
                            'matkul' => ['indonesia','matematika','inggris'],
                           ],
                           [
                            'Nama_Siswa' => "berli",
                            'Nip' => "5",

                            'jurusan' => "it",
                            'matkul' => ['indonesia','matematika','inggris'],
                           ],


                    ]


                ],
                [
                    'nama_dosen' => "daf",
                    'no_induk_dosen' => "002",
                    'nama_siswa' =>
                    [
                        [
                            'Nama_Siswa' => "firza",
                            'Nip' => "1",
                            'jurusan' => "it",
                            'matkul' => ['indonesia','matematika','inggris'],
                        ],

                        [
                            'Nama_Siswa' => "rendi",
                            'Nip' => "2",
                            'jurusan' => "it",
                            'matkul' => ['indonesia','matematika','inggris'],
                        ],

                        [
                            'Nama_Siswa' => "raka",
                            'Nip' => "3",
                            'jurusan' => "it",
                            'matkul' => ['indonesia','matematika','inggris'],
                        ],
                           [
                            'Nama_Siswa' => "gera",
                            'Nip' => "4",
                            'jurusan' => "it",
                            'matkul' => ['indonesia','matematika','inggris'],
                           ],
                           [
                            'Nama_Siswa' => "berli",
                            'Nip' => "5",

                            'jurusan' => "it",
                            'matkul' => ['indonesia','matematika','inggris'],
                           ],


                    ]


                        ],
                [
                    'nama_dosen' => "nando",
                    'no_induk_dosen' => "003",
                    'nama_siswa' =>
                    [
                        [
                            'Nama_Siswa' => "firza",
                            'Nip' => "1",
                            'jurusan' => "it",
                            'matkul' => ['indonesia','matematika','inggris'],
                        ],

                        [
                            'Nama_Siswa' => "rendi",
                            'Nip' => "2",
                            'jurusan' => "it",
                            'matkul' => ['indonesia','matematika','inggris'],
                        ],

                        [
                            'Nama_Siswa' => "raka",
                            'Nip' => "3",
                            'jurusan' => "it",
                            'matkul' => ['indonesia','matematika','inggris'],
                        ],
                           [
                            'Nama_Siswa' => "gera",
                            'Nip' => "4",
                            'jurusan' => "it",
                            'matkul' => ['indonesia','matematika','inggris'],
                           ],
                           [
                            'Nama_Siswa' => "berli",
                            'Nip' => "5",

                            'jurusan' => "it",
                            'matkul' => ['indonesia','matematika','inggris'],
                           ],


                    ]


                ]

            ];
                return view('pages.dosen', ['dosen' => $d]);
   }
   public function mahasiswa() {

    $a = [
        array(
            'id' => 1,
            'name' => 'Yusuf Batchtiar',
            'mata' => 'Pemrograman Web',
            'mahasiswa' => [
                [
                    'nama' => 'Muhammad Soleh',
                    'nilai' => 78
                ],
                [
                    'nama' => 'Jujun Junaedi',
                    'nilai' => 85
                ],
                [
                    'nama' => 'Mamat Alkatiri',
                    'nilai' => 90
                ]
            ]
        ),
        array(
            'id' => 2,
            'name' => 'Yaris Riyadi',
            'mata' => 'Pemrograman Moble',
            'mahasiswa' => [
                [
                    'nama' => 'Alfred McTominay',
                    'nilai' => 67
                ],
                [
                    'nama' => 'Bruno Kasmir',
                    'nilai' => 90
                ]
            ]
        ),
    ];
    // dd($a);
    return view('pages.mahasiswa', ['mahasiswa' => $a]);
}   
}
