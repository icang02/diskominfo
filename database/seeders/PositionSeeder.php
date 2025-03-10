<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Position; // Pastikan model Position di-import

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'position_name' => 'Kepala Dinas',
                'description'   => 'Bertanggung jawab atas seluruh kegiatan dan kebijakan di Diskominfo.'
            ],
            [
                'position_name' => 'Sekretaris Dinas',
                'description'   => 'Membantu Kepala Dinas dalam mengkoordinasikan administrasi dan keuangan.'
            ],
            [
                'position_name' => 'Kepala Bidang Informasi dan Komunikasi',
                'description'   => 'Mengelola bidang informasi dan komunikasi publik.'
            ],
            [
                'position_name' => 'Kepala Bidang Teknologi Informasi',
                'description'   => 'Mengelola bidang teknologi informasi dan infrastruktur TIK.'
            ],
            [
                'position_name' => 'Kepala Bidang Persandian dan Keamanan Informasi',
                'description'   => 'Mengelola bidang persandian dan keamanan informasi.'
            ],
            [
                'position_name' => 'Kepala Seksi Layanan Informasi',
                'description'   => 'Mengelola layanan informasi publik dan media.'
            ],
            [
                'position_name' => 'Kepala Seksi Infrastruktur TIK',
                'description'   => 'Mengelola infrastruktur teknologi informasi dan komunikasi.'
            ],
            [
                'position_name' => 'Kepala Seksi Pengembangan Aplikasi',
                'description'   => 'Mengelola pengembangan aplikasi dan sistem informasi.'
            ],
            [
                'position_name' => 'Kepala Seksi Keamanan Informasi',
                'description'   => 'Mengelola keamanan informasi dan data.'
            ],
            [
                'position_name' => 'Staf Administrasi',
                'description'   => 'Melakukan tugas administrasi dan pendukung operasional.'
            ],
            [
                'position_name' => 'Staf Teknisi TIK',
                'description'   => 'Melakukan pemeliharaan dan perbaikan infrastruktur TIK.'
            ],
            [
                'position_name' => 'Staf Pengembangan Sistem',
                'description'   => 'Mengembangkan dan memelihara sistem informasi.'
            ],
            [
                'position_name' => 'Staf Media dan Informasi',
                'description'   => 'Mengelola konten media dan informasi publik.'
            ],
            [
                'position_name' => 'Staf Keamanan Data',
                'description'   => 'Melakukan pemantauan dan pengamanan data.'
            ]
        ];

        foreach ($data as $item) {
            Position::create($item);
        }
    }
}
