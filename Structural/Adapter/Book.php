<?php

namespace DesignPatterns\Structural\Adapter;

// 普通书
interface Book
{
    // 翻页
    public function turnPage();

    // 打开
    public function open();

    // 获取某页
    public function getPage();
}