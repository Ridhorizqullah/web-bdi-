<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Url;

class Infrastruktur extends Component
{
    #[Url]
    public $tab = 'overview';

    public function render()
    {
        return view('livewire.pages.infrastruktur');
    }
}
