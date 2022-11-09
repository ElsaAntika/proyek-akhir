@extends('layouts.main')

@section('first-content')


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
@endif

<div class="card my-3>
        <div class="card-header">
            Form Tambah Data
</div>
<div class="card-body">
    <form action="{{ route('person.save') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" placeholder="Elsa Antika" class="form-contol">
</div>
<div class="form-group">
            <label for="email">Emain</label>
            <input type="email" name="email" class="form-contol" laceholder="Elsa@mail.com">
</div>

<div class="form-group">
            <input type="submit" value="Simpan" class="btn btn-success">
        </div>
    </form>
        </div>
</div>

@endsection

    

