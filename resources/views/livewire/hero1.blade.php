<div x-data="hero1()" x-init="component = @this">
    <x-modal>
        {{$html}}
    </x-modal>

    <div class="relative z-10">
        <x-buttons index="{{$index}}"></x-buttons>
        <div class="relative z-0">
            {!! $html !!}
        </div>
    </div>
</div>