@props(['name'])
@error($name)
    <p {{$attributes->merge(['class'=>"text-sm text-semibold text-red-700"])}}>{{ $message }}</p>
@enderror
