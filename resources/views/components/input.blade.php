<div>
    @if ($type != "checkbox")
        <label class="form-label" for="{{ $name }}"> {{ ucfirst($label) }} </label>
        <input class="{{ $class }}" id="{{ $name }}" type="{{ $type }}" value="{{ $value }}" name="{{ $name }}">
    @else
        <input class="{{ $class }}" id="{{ $name }}" type="{{ $type }}" value="1" name="{{ $name }}">
        <input class="{{ $class }}" id="{{ $name }}" type="hidden" value="0" name="{{ $name }}">
        <label class="form-label" for="{{ $name }}"> {{ ucfirst($label) }} </label>
    @endif 
</div>