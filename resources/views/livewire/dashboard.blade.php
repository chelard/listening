<?php

use App\Models\ListeningParty;
use Livewire\Volt\Component;

new class extends Component {
    public string $name = '';

    public function createListeningParty()
    {

    }

    public function with()
    {
        return [
            'listening_parties' => ListeningParty::all(),
        ];

    }
}; ?>

<div class="flex items-center justify-center min-h-screen bg-slate-50" >
    <div class="max-w-lg w-1/2 px-4">
        <form wire:submit="createListeningParty" class="space-y-6">
            <x-input wire:model="name" placeholder="Listening Party Name" />
            <x-datetime-picker wire:model="starTime" placeholder="Start Time" />
            <x-button primary label="Create Listening Party" />
        </form>

    </div>


</div>
