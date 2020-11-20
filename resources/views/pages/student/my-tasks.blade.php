@extends('layouts.student')

@section('content')

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Užduotis</th>
            <th scope="col">Atlikti Iki</th>
            <th scope="col">Aprašymas</th>
            <th scope="col">Statusas</th>
            <th scope="col">Veiksmai</th>
        </tr>
        </thead>
        <tbody>
        @foreach($myTasks as $task)
            <tr>
                <th scope="row">{{ $task->id }}</th>
                <td>{{ $task->task }}</td>
                <td>{{ $task->due }}</td>
                <td>{{ $task->desc }}</td>
                <td>{{ $task->status }}</td>
                <td>
                    <a class="py-1 mx-1" href="{{ url('mano-uzduotys/complete-task', $task->id) }}">Atlikta</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
