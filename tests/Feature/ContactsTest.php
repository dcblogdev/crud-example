<?php

namespace Tests\Feature;

use App\Models\Contact;
use Tests\TestCase;

class ContactsTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->authenticate();
    }

    public function test_contacts_index_loads_correctly(): void
    {
        $contact = Contact::factory()->create();

        $this
            ->get(route('contacts.index'))
            ->assertOk()
            ->assertViewIs('contacts.index')
            ->assertSee('Contacts')
            ->assertSee($contact->name)
            ->assertSee($contact->email)
            ->assertSee('<a href="contacts/create">Create</a>', false);
    }
}
