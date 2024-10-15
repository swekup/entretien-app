<?php

namespace App\Services\Api\Themoviedb\Films;

use App\Services\Api\Themoviedb\AbstractCrudService;

class TrendingDayService extends AbstractCrudService
{
    const API_URL_TRENDING_DAY_FILMS = 'trending/all/day';

    protected function getAdditionalUrl(): string
    {
        return self::API_URL_TRENDING_DAY_FILMS;
    }
}
