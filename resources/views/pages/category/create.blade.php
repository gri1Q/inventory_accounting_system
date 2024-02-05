@extends('templates.main')
@include('components.alert')

@section('main')
<form action="{{route('categories.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">{{__('Название категории')}}</label>
        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"  >
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">{{__('Добавить')}}</button>
</form>
@endsection
