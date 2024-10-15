<?php

namespace App\Console\Commands\Import;

use App\Models\Film;
use App\Services\Api\GuzzleHttpClient;
use App\Services\Api\Themoviedb\Films\TrendingDayService;
use App\Services\FilmService;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Console\Command;

class TrendingDayFilmsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:trending-films';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import themoviedb API Films Trending day';

    public function __construct(private readonly TrendingDayService $filmsTrendingDayService, private readonly FilmService $filmService)
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     * @throws GuzzleException
     */
    public function handle(): void
    {
        $filmExists = Film::exists();
        $dataApi = $this->filmsTrendingDayService->getDataByPage(1);
        try {
            for ($i = 1; $i <= $dataApi->total_pages; $i++) {
                $dataApi = $i === 1 ? $dataApi : $this->filmsTrendingDayService->getDataByPage($i);

                foreach ($dataApi->results as $film) {
                    //TODO find all ids one time
                    if ((!$filmExists || !Film::find($film->id)) && $film->media_type === 'movie') {
                        $model = $this->createModelFilm($film);
                        $model->save();
                    }
                }
                //TODO énoncer prendre que la premiere page.
                break;
            }
        } catch (\Exception $e) {
            //TODO create element in logs.
            var_dump($e);
            die();
        }
    }

    private function createModelFilm(object $film): Film
    {
        $model = new Film;
        $model->id = $film->id;

        $this->filmService->fill($film, $model);

        return $model;
    }
}
