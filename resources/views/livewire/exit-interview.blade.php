<div>
    <form wire:submit.prevent="create">
        @foreach ($form->getComponents() as $component)
            <div>
                @if ($component instanceof \Filament\Forms\Components\TextInput)
                    <label for="{{ $component->getName() }}">{{ $component->getLabel() }}</label>
                    <input type="text" id="{{ $component->getName() }}" wire:model="{{ $component->getName() }}">
                @elseif ($component instanceof \Filament\Forms\Components\MarkdownEditor)
                    <label for="{{ $component->getName() }}">{{ $component->getLabel() }}</label>
                    {{-- Renderização do MarkdownEditor --}}
                @elseif ($component instanceof \Filament\Forms\Components\RichEditor)
                    <label for="{{ $component->getName() }}">{{ $component->getLabel() }}</label>
                    {{-- Renderização do RichEditor --}}
                @endif
            </div>
        @endforeach
        
        <button type="submit">
            Submit
        </button>
    </form>
    
    <x-filament-actions::modals />
</div>

