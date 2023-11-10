<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = new Page();
        $pages->name = "Dana Abadi";
        $pages->content = "Ini adalah konten halaman Dana Abadi";
        $pages->save();

        $pages = new Page();
        $pages->name = "Cara Donasi";
        $pages->content = "Ini adalah konten halaman Cara Donasi";
        $pages->save();
    }
}
