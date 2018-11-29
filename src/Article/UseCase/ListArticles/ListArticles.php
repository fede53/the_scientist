<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: federicogermi
 * Date: 29/11/2018
 * Time: 15:07.
 */

namespace LaravelDay\Article\UseCase\ListArticles;

class ListArticles
{
    public function __invoke(): array
    {
        // TODO: Implement __invoke() method.

        return [
            [
                'title' => 'Articolo di prova',
                'body' => 'Questo è il testo di un articolo di prova',
                'creationDate' => '2018-11-29 00:00:00',
            ],
        ];
    }
}
