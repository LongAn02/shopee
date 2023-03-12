@extends('backend.frame')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row mb-3">
            <div class="col-lg-6 col-md-6 col-12">
                <h1 class="h3 text-gray-800">Tables category</h1>
            </div>
            <div class="col-lg-6 col-md-6 col-12 d-flex justify-content-end">
                <div class="w-50">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Name sub category">
                        <button type="button" class="btn btn-outline-secondary bg-info" >
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-end">
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <a href="{{ route('category.create') }}">
                            <button type="button" class="btn btn-success">Create</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive" style="display:block; height: 500px; overflow: auto">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center text-light bg-dark">
                                <th>No</th>
                                <th>Name</th>
                                <th>Sub category</th>
                                <th>Description</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="text-center text-light bg-dark">
                                <th>No</th>
                                <th>Name</th>
                                <th>Sub category</th>
                                <th>Description</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @forelse($categories as $index => $item)
                                <tr>
                                    <td class="text-center"></td>
                                    <td>{{ $item->name }}</td>
                                    <td class="text-center">{{ $item->number_sub_category }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td class="text-center">
                                        <a href="">
                                            <button class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="">
                                            <button class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
