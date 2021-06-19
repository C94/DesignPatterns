<?php

namespace DesignPatterns\Structural\Adapter;

// 纸质书
class PaperBook implements Book
{
    private $page;

    public function open()
    {
        $this->page = 1;
    }

    public function turnPage()
    {
        $this->page++;
    }

    public function getPage()
    {
        return $this->page;
    }
}