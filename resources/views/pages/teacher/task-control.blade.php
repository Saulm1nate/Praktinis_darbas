@extends('layouts.teacher')

@section('content')

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Užduoties Mokinys</th>
            <th scope="col">Užduotis</th>
            <th scope="col">Atlikti Iki</th>
            <th scope="col">Aprašymas</th>
            <th scope="col">Status</th>
            <th scope="col">Veiksmai</th>
        </tr>
        </thead>
        <tbody>
        @foreach($allTasks as $task)
        <tr>
            <th scope="row">{{ $task->id }}</th>
            <td>{{ $task->assign_to }}</td>
            <td>{{ $task->task }}</td>
            <td>{{ $task->due }}</td>
            <td>{{ $task->desc }}</td>
            <td>{{ $task->status }}</td>
            <td>
                <a class="py-1 mx-1" href="{{ url('uzduociu-valdymas/destroy-task', $task->id) }}">Pašalinti</a>
                <a class="py-1 mx-1" href="{{ url('uzduociu-valdymas/redaguoti-uzduoti', $task->id) }}">Redaguoti</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
