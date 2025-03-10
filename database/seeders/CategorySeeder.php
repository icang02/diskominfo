<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category; // Pastikan model Category di-import

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $data = [
      [
        'category_name' => 'Berita Resmi',
        'slug'          => 'berita-resmi',
        'description'   => 'Berita resmi dari Diskominfo mengenai kegiatan, pengumuman, dan informasi resmi.'
      ],
      [
        'category_name' => 'Layanan Publik',
        'slug'          => 'layanan-publik',
        'description'   => 'Informasi tentang layanan publik yang disediakan oleh Diskominfo.'
      ],
      [
        'category_name' => 'Teknologi Informasi',
        'slug'          => 'teknologi-informasi',
        'description'   => 'Berita dan artikel seputar perkembangan teknologi informasi dan komunikasi.'
      ],
      [
        'category_name' => 'Pengumuman',
        'slug'          => 'pengumuman',
        'description'   => 'Pengumuman resmi dari Diskominfo untuk masyarakat umum.'
      ],
      [
        'category_name' => 'Artikel Edukasi',
        'slug'          => 'artikel-edukasi',
        'description'   => 'Artikel edukasi tentang komunikasi, informasi, dan teknologi.'
      ],
      [
        'category_name' => 'Kegiatan Diskominfo',
        'slug'          => 'kegiatan-diskominfo',
        'description'   => 'Informasi tentang kegiatan, acara, dan program yang diselenggarakan oleh Diskominfo.'
      ],
      [
        'category_name' => 'Regulasi dan Kebijakan',
        'slug'          => 'regulasi-dan-kebijakan',
        'description'   => 'Informasi tentang regulasi dan kebijakan di bidang komunikasi dan informatika.'
      ],
      [
        'category_name' => 'Pengaduan Masyarakat',
        'slug'          => 'pengaduan-masyarakat',
        'description'   => 'Layanan pengaduan dan aspirasi masyarakat terkait layanan Diskominfo.'
      ],
      [
        'category_name' => 'Siaran Pers',
        'slug'          => 'siaran-pers',
        'description'   => 'Siaran pers resmi dari Diskominfo.'
      ]
    ];


    foreach ($data as $item) {
      Category::create($item);
    }
  }
}
