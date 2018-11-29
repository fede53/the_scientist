<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class ListaArticlesController extends Controller
{
    public function __invoke()
    {
        return response()->json([]);
    }
}


git add app/Http/Controllers/ListArticlesController.php
git add tests/Features/ListArticlesTest.php
fatal: pathspec 'tests/Features/ListArticlesTest.php' did not match any files
git add tests/Feature/ListArticlesTest.php
git add routes/api.php
git commit -m "feat(Articles)"

git push origin features/list_articles