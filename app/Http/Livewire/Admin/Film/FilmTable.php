<?php

namespace App\Http\Livewire\Admin\Film;

use App\Models\Film;
use App\Services\FilmService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;
use Livewire\WithPagination;

class FilmTable extends Component
{
    use WithPagination;

    public ?int $editingFilmId = null;
    public string $title = '';
    public string $overview = '';
    public array $errors = [];
    public string $search = '';

    protected array $rules = [
        'title' => 'required',
        'overview' => 'nullable',
    ];


    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public function render(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $films = Film::query()
            ->where('title', 'like', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.admin.film.film-list', ['films' => $films]);
    }

    public function editFilm($filmId): void
    {
        $this->editingFilmId = $filmId;

        $film = Film::find($filmId);

        if ($film) {
            $this->title = $film->title;
            $this->overview = $film->overview;
        }
    }

    public function updateFilm(FilmService $filmService): void
    {
        if ($data = $this->validate()) {
            $film = Film::find($this->editingFilmId);

            $filmService->fill($data, $film);
            $film->save();
        }

        $this->resetForm();
    }

    public function cancelUpdate(): void
    {
        $this->editingFilmId = null;
        $this->resetForm();
    }

    private function resetForm(): void
    {
        $this->editingFilmId = null;
        $this->title = '';
        $this->overview = '';
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }
}
