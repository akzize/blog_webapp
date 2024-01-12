@props(['color' => 'primary'])
@php
    $style = '';
    switch ($color) {
        case 'danger':
            $style = 'bg-red-800 hover:bg-red-700 focus:bg-red-700 active:bg-red-900';
            break;
        case 'warn':
            $style = 'bg-orange-800 hover:bg-orange-700 focus:bg-orange-700 active:bg-orange-900';
            break;
        
        default:
            $style = 'bg-gray-800 hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 ';
            break;
    }
@endphp
<button class="inline-flex items-center px-4 py-2 {{$style}} border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:ring-offset-2 transition ease-in-out duration-150">
    {{$slot}}
</button>