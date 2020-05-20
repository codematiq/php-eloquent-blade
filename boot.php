<?php

use Jenssegers\Blade\Blade;
use eloquent\models\Page;

$blade = new Blade('views', 'cache');

$pages = Page::all();

echo $blade->make('pages', compact('pages'));
