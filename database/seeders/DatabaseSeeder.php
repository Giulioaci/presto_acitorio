<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $categories = [
        'elettroinica',
        'abbigliamento',
        'salute e bellezza',
        'casa e giardino',
        'giocattoli',
        'sport',
        'animali domestici',
        'libri e riviste',
        'accessori',
        'motori',

    ];


    public function run(): void
    {
        foreach ($this->categories as $category){
            Category::create([
                'name'=> $category
            ]);
        }
       
    }
}
