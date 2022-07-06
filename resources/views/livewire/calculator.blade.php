<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="flex flex-col items-center">
        <div class="flex p-16 mx-auto justify-center items-center gap-4">
            <input type="number" wire:model='number1' placeholder="Number 1">
            <select class="w-24" wire:model='action'>
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>%</option>
            </select>
            <input type="number" wire:model='number2' placeholder="Number 2">
            <button wire:click='calculate'
                class="py-2 px-4 bg-blue-300 hover:bg-blue-400 disabled:cursor-not-allowed
                disabled:bg-opacity-80 rounded text-white {{ $disable ? 'disable' : '' }}">=</button>
        </div>
        <p style="text-3xl">{{ $result }}</p>
    </div>
</div>
