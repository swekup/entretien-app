<?php

namespace App\Http\Livewire\Film;

use App\Models\Film;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class FilmShow extends Component
{

    private Film $film;

    public function mount(Film $film)
    {
        $this->film = $film;
    }

    public function render(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.film.film-show', ['film' => $this->film]);
    }
}
