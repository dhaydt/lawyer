<div class="text-center" wire:loading @if($target != null) wire:target="{{ $target }}" @endif>
    <img src="{{ asset('/assets_metronic/image/loading.svg') }}" alt="amaradvokat" style="height: 50px; width: 50px; object-fit: contain">
    <span class="d-block">{{ $message }}</span>
</div>
