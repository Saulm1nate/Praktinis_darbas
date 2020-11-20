@extends('layouts.teacher')

@section('content')

    <div class="container form-container">
        <form class="p-4" method="POST" action="{{ url('/store-task') }}">
            @csrf
            <div class="form-group row">
                <label for="assign_to" class="col-sm-2 col-form-label">Mokinio Vardas: </label>
                <div class="col-sm-10">
                    <input id="assign_to" type="text" class="form-control" placeholder="Jonas" name="assign_to">
                    @error('assign_to')
                    <span class="text-danger"></span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="task" class="col-sm-2 col-form-label">Užduotis: </label>
                <div class="col-sm-10">
                    <input id="task" type="text" class="form-control" placeholder="Biologinis Tyrimas" name="task">
                    @error('task')
                    <span class="text-danger"></span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="due" class="col-sm-2 col-form-label">Atlikimo Data: </label>
                <div class="col-sm-10">
                    <input id="due" type="date" class="form-control" name="due">
                    @error('due')
                    <span class="text-danger"></span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="desc" class="col-sm-2 col-form-label">Aprašymas: </label>
                <div class="col-sm-10">
                    <input id="desc" type="text" class="form-control" placeholder="Tyrimas apie klimato kaita"
                           name="desc">
                    @error('desc')
                    <span class="text-danger"></span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary">Sukurti</button>
                </div>
            </div>
        </form>
    </div>

@endsection
