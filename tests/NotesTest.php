<?php

use App\Note;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NotesTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_notes_list()
    {
        // Having
        Note::create(['note' => 'My first note']);
        Note::create(['note' => 'Second note']);

        // When
        $this->visit('/notes')
            // Then
            ->see('My first note')
            ->see('Second note');
    }

    public function test_notes_create()
    {
        $this->visit('/notes') // 1
            ->click('Create a note') // 2
            ->seePageIs('/notes/create') // 3
            ->see('Create a note') // 4
            ->type('My first note', 'note') // 5
            ->press('Add a note') // 6 
            ->seePageIs('/notes') // 7
            ->see('My first note') // 8
            ->seeInDatabase('notes', ['note' => 'My first note']); // 9
    }
}
