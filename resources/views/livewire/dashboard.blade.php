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

<div>
    Hola mundo desde Livewire
</div>
