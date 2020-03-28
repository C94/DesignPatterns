<?php

namespace DesignPatterns\Structural\Adapter;

// 电子书
interface EBook
{
    // 解锁
    public function unlock();

    // 滑动下一页
    public function pressNext();

    // 获取某页
    public function getPage();
}