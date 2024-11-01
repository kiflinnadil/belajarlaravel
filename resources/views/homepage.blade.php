@extends('components.template')

@section('title','homepage')

@section('content')
    <h1>Homepage</h1>
    <p>Welcome to the Contact App</p>

    <div>
        <table class="border">
            <thead>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </thead>
            <body>
                @foreach ($contact as $contact)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $contact['name'] }}</td>
                        <td>{{ $contact['email'] }}</td>
                        <td>{{ $contact['phobe'] }}</td>
                    </tr>
                @endforeach
            </body>
        </table>
    </div>
    
@endsection