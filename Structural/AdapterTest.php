<?php

namespace Structural\Adapter;

$book = new PaperBook();

$book->open();

$book->turnPage();

echo $book->getPage();