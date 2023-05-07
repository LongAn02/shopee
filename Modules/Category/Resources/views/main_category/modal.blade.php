{{--@extends('backend.index')--}}

{{--@section('content-admin')--}}
{{--    --}}
{{--@endsection--}}

<!-- Modal -->
<div class="modal fade" id="modalShowCategory{{$category_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{ __('Show info category') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" alt="">
                <ul>
                    <li>{{__('Category id')}}: #{{ $category_id }}</li>
                    <li>{{ __('Category name') }}: {{ $name }}</li>
                    <li>{{ __('Number sub category') }}: {{ $numberSubCategory }}</li>
                    <li>{{ __('Description') }}: {{ $description }}</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
