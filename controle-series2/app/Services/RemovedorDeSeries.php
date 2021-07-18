<?php

namespace App\Services;

use App\Episodio;
use App\Serie;
use App\Temporada;
use Illuminate\Support\Facades\DB;

class RemovedorDeSeries
{
    public function removerSerie(int $serieId): string
    {
        DB::beginTransaction();

        $serie = Serie::find($serieId);
        $nomeSerie = $serie->nome;
        $this->removerSerieTemporadas($serie);
        $serie->delete();

        DB::commit();

        return $nomeSerie;
    }

    /**
     * @param $serie
     * @throws \Exception
     */
    public function removerSerieTemporadas(Serie $serie): void
    {
        $serie->temporadas->each(function (Temporada $temporada) {
            $this->removerEpisodios($temporada);
            $temporada->delete();
        });
    }

    /**
     * @param Temporada $temporada
     * @throws \Exception
     */
    public function removerEpisodios(Temporada $temporada): void
    {
        $temporada->episodios()->each(function (Episodio $episodio) {
            $episodio->delete();
        });

    }
}
