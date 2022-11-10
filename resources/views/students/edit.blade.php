@extends('templates.default')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('students.update', $student->id) }}" method="post">
        @csrf
        @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Insert Name" value="{{ $student->name }}">
                @error('name')
                    <span class="invalid-feedback">{{ $message }} </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Telepon</label>
                <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Insert Phone Number" value="{{ $student->phone_number}}">
                @error('phone_number')
                    <span class="invalid-feedback">{{ $message }} </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Alamat</label>
                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Insert Address" value="{{$student->address}}">
                @error('address')
                    <span class="invalid-feedback">{{ $message }} </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Kelas</label>
                <input type="text" name="class" class="form-control @error('class') is-invalid @enderror" placeholder="Insert Class" value="{{$student->class}}">
                @error('class')
                    <span class="invalid-feedback">{{ $message }} </span>
                @enderror
            </div>
                <div class="mb-3">
                <input type="submit" value="Simpan" class="btn btn-info">
            </div>
        </form>
    </div>
</div>
@endsection
