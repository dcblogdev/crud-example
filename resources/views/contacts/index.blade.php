<div>
    <h1>Contacts</h1>

    <p><a href="contacts/create">Create</a></p>

    <ul>
        @foreach ($contacts as $contact)
            <li>
                <a href="contacts/{{ $contact->id }}">{{ $contact->name }} ({{ $contact->email }})</a>
            </li>
        @endforeach
    </ul>

</div>
