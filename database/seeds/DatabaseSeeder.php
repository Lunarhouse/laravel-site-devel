<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Artist;
use App\Letter;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(PostsSeeder::class);
        $this->call(LettersSeeder::class);
    }
}

class LettersSeeder extends Seeder {

    public function run()
    {
        DB::table('letters')->delete();
        Letter::create([
            'letter' => 'A',
        ]);

        Letter::create([
            'letter' => 'B',
        ]);

        Letter::create([
            'letter' => 'C',
        ]);

        Letter::create([
            'letter' => 'D',
        ]);

        Letter::create([
            'letter' => 'E',
        ]);

        Letter::create([
            'letter' => 'F',
        ]);

        Letter::create([
            'letter' => 'G',
        ]);

        Letter::create([
            'letter' => 'H',
        ]);

        Letter::create([
            'letter' => 'I',
        ]);

        Letter::create([
            'letter' => 'J',
        ]);

        Letter::create([
            'letter' => 'K',
        ]);

        Letter::create([
            'letter' => 'L',
        ]);

        Letter::create([
            'letter' => 'M',
        ]);

        Letter::create([
            'letter' => 'N',
        ]);

        Letter::create([
            'letter' => 'O',
        ]);

        Letter::create([
            'letter' => 'P',
        ]);

        Letter::create([
            'letter' => 'Q',
        ]);

        Letter::create([
            'letter' => 'R',
        ]);

        Letter::create([
            'letter' => 'S',
        ]);

        Letter::create([
            'letter' => 'T',
        ]);

        Letter::create([
            'letter' => 'U',
        ]);
        ;
        Letter::create([
            'letter' => 'V',
        ]);

        Letter::create([
            'letter' => 'W',
        ]);

        Letter::create([
            'letter' => 'X',
        ]);

        Letter::create([
            'letter' => 'Y',
        ]);

        Letter::create([
            'letter' => 'Z',
        ]);

        Letter::create([
            'letter' => 'А',
        ]);

        Letter::create([
            'letter' => 'Б',
        ]);

        Letter::create([
            'letter' => 'В',
        ]);

        Letter::create([
            'letter' => 'Г',
        ]);

        Letter::create([
            'letter' => 'Д',
        ]);

        Letter::create([
            'letter' => 'Е',
        ]);

        Letter::create([
            'letter' => 'Ё',
        ]);

        Letter::create([
            'letter' => 'Ж',
        ]);

        Letter::create([
            'letter' => 'З',
        ]);

        Letter::create([
            'letter' => 'И',
        ]);

        Letter::create([
            'letter' => 'Й',
        ]);

        Letter::create([
            'letter' => 'К',
        ]);

        Letter::create([
            'letter' => 'Л',
        ]);

        Letter::create([
            'letter' => 'М',
        ]);

        Letter::create([
            'letter' => 'Н',
        ]);

        Letter::create([
            'letter' => 'О',
        ]);

        Letter::create([
            'letter' => 'П',
        ]);

        Letter::create([
            'letter' => 'Р',
        ]);

        Letter::create([
            'letter' => 'С',
        ]);

        Letter::create([
            'letter' => 'Т',
        ]);

        Letter::create([
            'letter' => 'У',
        ]);

        Letter::create([
            'letter' => 'Ф',
        ]);
        ;
        Letter::create([
            'letter' => 'Х',
        ]);

        Letter::create([
            'letter' => 'Ц',
        ]);

        Letter::create([
            'letter' => 'Ч',
        ]);

        Letter::create([
            'letter' => 'Ш',
        ]);

        Letter::create([
            'letter' => 'Щ',
        ]);

        Letter::create([
            'letter' => 'Ь',
        ]);

        Letter::create([
            'letter' => 'Ы',
        ]);

        Letter::create([
            'letter' => 'Ъ',
        ]);

        Letter::create([
            'letter' => 'Э',
        ]);

        Letter::create([
            'letter' => 'Ю',
        ]);

        Letter::create([
            'letter' => 'Я',
        ]);

        Letter::create([
            'letter' => '0',
        ]);

        Letter::create([
            'letter' => '1',
        ]);

        Letter::create([
            'letter' => '2',
        ]);

        Letter::create([
            'letter' => '3',
        ]);

        Letter::create([
            'letter' => '4',
        ]);

        Letter::create([
            'letter' => '5',
        ]);

        Letter::create([
            'letter' => '6',
        ]);

        Letter::create([
            'letter' => '7',
        ]);

        Letter::create([
            'letter' => '8',
        ]);

        Letter::create([
            'letter' => '9',
        ]);

    }
}
