<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $data = [
      [
        'type_name' => 'RENSTRA',
        'description' => 'Rencana Strategis (RENSTRA) Diskominfo yang berisi tujuan, sasaran, dan strategi untuk periode tertentu.'
      ],
      [
        'type_name' => 'RENJA',
        'description' => 'Rencana Kerja (RENJA) Diskominfo yang berisi program dan kegiatan tahunan untuk mencapai tujuan RENSTRA.'
      ],
      [
        'type_name' => 'DPA & DPPA',
        'description' => 'Dokumen Pelaksanaan Anggaran (DPA) dan Dokumen Pelaksanaan Perubahan Anggaran (DPPA) Diskominfo yang berisi alokasi anggaran untuk kegiatan tahun berjalan.'
      ],
      [
        'type_name' => 'PERJANJIAN KERJA',
        'description' => 'Dokumen Perjanjian Kerja yang berisi kesepakatan antara Diskominfo dengan pihak terkait dalam pelaksanaan proyek atau layanan.'
      ],
      [
        'type_name' => 'STANDAR PELAYANAN',
        'description' => 'Dokumen Standar Pelayanan yang berisi pedoman dan prosedur dalam memberikan layanan kepada masyarakat.'
      ],
    ];

    foreach ($data as $item) {
      DocumentType::create($item);
    }
  }
}
