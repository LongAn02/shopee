<div class="mb-3">
    <label for="" class="form-label">{{ $label }}</label>
    <select class="form-control" name="{{$name}}">
        @forelse($dataOption as $item)
            <option value="{{$item[$value]}}">{{$item[$title]}}</option>
        @empty
        @endforelse
    </select>
</div>
