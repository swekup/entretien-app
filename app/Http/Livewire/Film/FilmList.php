<?php

namespace App\Http\Livewire\Film;

use App\Models\Film;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class FilmList extends Component
{

    public function __construct($id = null)
    {
        parent::__construct($id);
    }

    public function render(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.film.film-list', ['films' => Film::paginate(10)]);
    }
}
