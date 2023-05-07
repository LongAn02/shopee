@extends('backend.index')

@section('app-title-admin')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-list mr-2"></i>Main category</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.master') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Main category</a></li>
        </ul>
    </div>
@endsection

@section('content-admin')
    <div class="text-right">
        <a href="{{ route('mainCategory.create') }}">
            <button class="btn btn-success"><i class="fa fa-plus mr-2"></i>Create</button>
        </a>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            @if(!empty($mainCategories))
                <div class="tile" id="vip">
                    <h3 class="tile-title">Main Category Table</h3>
                    <table class="table table-bordered" id="OKVIP">
                        <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Name main category</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th class="w-25">Handle</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($mainCategories as $category)
                            <tr class="text-center">
                                <td><span>1</span></td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <img src="{{ optional($category->getMedia('image')->first())->getUrl() ?? asset('assets/common/img/img_null.png')}}"
                                         alt="" style="width: 70px; height: 70px">
                                </td>
                                <td>{{ $category->description }}</td>
                                <td class="w-25">
                                    <div class="d-flex flex-lg-row justify-content-center flex-column w-100">
                                        <div>
                                            <button class="btn {{ $category->status ? 'btn-success' : 'btn-secondary' }} w-100 h-50"><i class="fa fa-television" aria-hidden="true"></i>Display</button>
                                            <button class="btn btn-warning btn__show_modal w-100 h-50"
                                                    data-href="{{ route('mainCategory.show', ['id' => $category->category_id]) }}"><i class="fa fa-eye" aria-hidden="true"></i>Show</button>
                                        </div>
                                        <div>
                                            <button class="btn btn-info w-100 h-50"><i class="fa fa-pencil-square" aria-hidden="true"></i>Update</button>
                                            <button class="btn btn-danger w-100 h-50"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <x-erro
                    msg="{{ \App\View\Components\Erro::EMPTY_TABLE }}"
                    desc="{{ \App\View\Components\Erro::DESC }}"
                />
            @endif
            </div>
        </div>
    </div>
@endsection

