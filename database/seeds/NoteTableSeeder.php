<?php

use Illuminate\Database\Seeder;

class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = App\Category::all();

        $notes = factory(App\Note::class)->times(100)->make();
        //factory(Note::class)->times(100)->create();
        foreach ($notes as $note) {
            $categories->random()->notes()->save($note);
        }
    }
}
