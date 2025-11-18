@props([
    'name',
    'label',
    'type',
    'placeholder'=>null
])
<div>
    <label for="{{$name}}" style="color: blue">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" placeholder="{{$placeholder}}">
</div>