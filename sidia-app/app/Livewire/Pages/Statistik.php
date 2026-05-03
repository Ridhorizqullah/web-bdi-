<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Url;

class Statistik extends Component
{
    #[Url]
    public $tab = 'sebaran';

    public function render()
    {
        return view('livewire.pages.statistik');
    }
}
