<div class="mb-3">
    <label for="input-{{$name}}" class="form-label">{{ $label }}</label>
    <input type="{{$type}}"
           name="{{$name}}"
           class="form-control @error("{$name}") is-invalid @enderror"
           value="{{ old("{$name}") }}"
    >
</div>
