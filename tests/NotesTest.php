<?php

use App\Note;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NotesTest extends TestCase
{
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
        $this->visit('/notes')
            ->click('Create a note')
            ->seePageIs('/notes/create')
            ->see('Create a note');
    }
}
