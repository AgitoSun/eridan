@props(['error'])

@error($error)
<div class="invalid-tooltip">
    {{ $message }}
</div>
@enderror
