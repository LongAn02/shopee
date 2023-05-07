<div class="form-group">
    <label class="control-label">{{ $title }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ $val }}" class="form-control" placeholder="Enter {{ $title }}">
    <span class="text-danger error-message error_{{$name}}"></span>
</div>
