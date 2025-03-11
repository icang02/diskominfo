<?php

namespace Database\Seeders;

use App\Models\OrganizationDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationDetailSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $data = [
      [
        'type'    => 'visi',
        'title'   => 'Visi Diskominfo Kota Kendari',
        'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, quaerat vero quasi voluptatem assumenda beatae omnis, error itaque odit hic enim laborum aut eius quis debitis natus! Nostrum, rem sunt!'
      ],
      [
        'type'    => 'misi',
        'title'   => 'Misi Diskominfo Kota Kendari',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum magni sit non nam magnam, enim, unde ipsa rem officia temporibus maxime et vitae dolor nostrum excepturi eius? Voluptatibus minus obcaecati odit est, fugiat sed quos mollitia ratione voluptate dolor ab nam, cupiditate cumque eveniet officiis provident distinctio error alias quod.'
      ],
      [
        'type'    => 'struktur',
        'title'   => 'Struktur Diskominfo Kota Kendari',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        'image'   => 'https://picsum.photos/640/480?random=609'
      ],
    ];


    foreach ($data as $item) {
      OrganizationDetail::create($item);
    }
  }
}
