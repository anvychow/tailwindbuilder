<div x-data="cta1()" x-init="component = @this">
    <x-modal>
        {{$html}}
    </x-modal>
    <div class="relative z-10">
        <x-buttons></x-buttons>
        <div class="relative z-0">
            {!! $html !!}
        </div>
    </div>
</div>