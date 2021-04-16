@extends('layouts.app')

@section('content')
    <div class="card">

    <h1 class="card-title">Courses</h1>
        <div class="card-header">
            <a href="{{ route('courses.create') }}">Add new course</a>
        </div>
    <div class="card-body">
        <table class="table table-bordered table-responsive-lg"  style="text-align: center;" >
            <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>hourse</th>
                <th>instructor name</th>
                <th> </th>
            </tr>
            </thead>
<tbody>
@foreach ($courses as $course)

    <tr>

        <td>{{ $course->id}}</td>
        <td>{{ $course->name}}</td>
        <td>{{ $course->houres}}</td>
        <td>{{ $course->instructor_name}}</td>

        <td>
            <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                {{--                    <a href="{{ route('students.show', $student->id) }}" title="show">--}}
                {{--                        <span>show</span>--}}
                {{--                    </a>--}}

                <a href="{{ route('courses.edit', $course->id) }}">
                    <span>Edit</span>
                </a>
                <span>  | </span>
                @csrf
                @method('DELETE')

                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                    <span>Delete</span>
                </button>
            </form>
        </td>
    </tr>
@endforeach
</tbody>

            <tfoot style="text-align: left">
            <tr>
                <td colspan="4"> <h4> Count Of Data {{ count($courses) }} </h4> </td>
            </tr>
            </tfoot>

        </table>
    </div>


    </div>
@endsection
