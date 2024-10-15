<?php

namespace App\Services;

use App\Models\Film;

class FilmService
{
    public function fill(array|object $data, Film $model): void
    {
        $data = (object)$data;

        if (isset($data->adult)) {
            $model->adult = $data->adult;
        }

        if (isset($data->backdrop_path)) {
            $model->backdrop_path = $data->backdrop_path;
        }

        if (isset($data->title)) {
            $model->title = $data->title;
        }

        if (isset($data->original_language)) {
            $model->original_language = $data->original_language;
        }

        if (isset($data->original_title)) {
            $model->original_title = $data->original_title;
        }

        if (isset($data->overview)) {
            $model->overview = $data->overview;
        }

        if (isset($data->poster_path)) {
            $model->poster_path = $data->poster_path;
        }

        if (isset($data->media_type)) {
            $model->media_type = $data->media_type;
        }

        if (isset($data->popularity)) {
            $model->popularity = $data->popularity;
        }

        if (isset($data->release_date)) {
            $model->release_date = $data->release_date;
        }

        if (isset($data->video)) {
            $model->video = $data->video;
        }

        if (isset($data->vote_average)) {
            $model->vote_average = $data->vote_average;
        }

        if (isset($data->vote_count)) {
            $model->vote_count = $data->vote_count;
        }
    }
}
