@extends('layouts.app')

@section('content')
    <div>
        <h1>Students</h1>
        <a href="{{ route('students.create') }}">Add new Student</a>
        <table class="table table-bordered table-responsive-lg">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>email</th>
                <th>address</th>
                <th>phone</th>
                <th> </th>
                <th> </th>
            </tr>

            @foreach ($students as $student)

                <tr>

                    <td>{{ $student->id}}</td>
                    <td>{{ $student->name}}</td>
                    <td>{{ $student->email}}</td>
                    <td>{{ $student->address}}</td>
                    <td>{{ $student->phone}}</td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}">
                            <span>Edit</span>
                        </a>
                    </td>

                    <td>
                        <form action="{{ route('students.destroy', $student->id) }}" method="post">

                            @csrf
                            @method('DELETE')

                            <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                <span>Delete</span>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>


    </div>
@endsection
