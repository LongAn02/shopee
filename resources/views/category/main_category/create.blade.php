@extends('backend.frame')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-0 text-center">Create category</h1>
        <div class="container">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <x-form.input name="name" type="text" label="Category name"/>
                <x-form.input name="description" type="text" label="Description"/>
                <div class="d-flex justify-content-end">
                    <x-form.submit title="Submit" name="submit_create_category" color="primary"/>
                </div>
            </form>
            @include('errors.erro-form')
        </div>
    </div>
@endsection

