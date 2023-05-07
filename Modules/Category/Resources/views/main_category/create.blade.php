@extends('backend.index')

@section('title', __('Create main category'))

@section('app-title-admin')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-list mr-2"></i>{{ __('Main category') }}</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.master') }}">{{ __('Dashboard') }}</a></li>
            <li class="breadcrumb-item"><a href="#">{{ __('Main category') }}</a></li>
        </ul>
    </div>
@endsection

@section('content-admin')
    <div class="text-right">
        <a href="{{ route('mainCategory.index') }}">
            <button class="btn btn-success"><i class="fa fa-list mr-2"></i>{{ __('List category') }}</button>
        </a>
    </div>
    <div class="row mt-2 d-flex justify-content-center">
        <div class="col-md-6 col-12">
            <div class="tile">
                <h3 class="tile-title">{{ __('Create main category') }}</h3>
                <form class="form__submit__ajax" action="{{ route('mainCategory.store') }}" method="post" enctype="multipart/form-data">
                <div class="tile-body">
                        @csrf
                        <x-form.input title="{{ __('Name Category') }}" type="text" name="name" val="{{ old('name') }}"/>
                        <x-form.input title="{{ __('Description') }}" type="text" name="description"/>
                        <x-form.input-file title="{{ __('Image category') }}"/>
                </div>
                <div class="tile-footer text-right">
                    <button type="submit" class="btn btn-primary btn__submit__form__ajax"><i class="fa fa-fw fa-lg fa-check-circle"></i>{{ __('Register') }}</button>
                    &nbsp;&nbsp;&nbsp;
                    <button class="btn btn-secondary clear__form"><i class="fa fa-fw fa-lg fa-times-circle"></i>{{ __('Cancel') }}</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection

