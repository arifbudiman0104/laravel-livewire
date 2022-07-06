<div class="p-16 flex justify-center gap-6 items-center">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <button wire:click='inrement' class="py-2 px-4 bg-blue-500 hover:bg-blue-600 rounded text-white">+</button>
    <span>{{ $counter }}</span>
    <button wire:click='decrement' class="py-2 px-4 bg-blue-500 hover:bg-blue-600 rounded text-white">-</button>
</div>
