<div>
    <label>{{ $title }}</label>
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input name="image" class="d-none" type='file' id="image-upload"
                   accept=".png,.jpg,.jpeg"/>
            <label for="image-upload">
                <div class="btn btn-primary icon-btn">
                    <i class="fa fa-plus"></i>{{ __('Choose file') }}
                </div>
            </label>
        </div>
        <div class="avatar-preview mt-2 mb-1">
            <img class="profile-user-img img-responsive img-circle object-fit-cover {{ !empty($product->avatar) ?: 'd-none' }}"
                 height="150" width="150" id="image-preview" alt="User profile picture" src="{{ $product->avatar ?? '' }}">
        </div>
    </div>
</div>
<span class="text-danger error-message error_image"></span>
