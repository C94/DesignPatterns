<?php

namespace DesignPatterns\Structural\Adapter;

// 电子书适配器
class EBookAdapter implements Book
{
    protected $eBook;

    // 初始化
    public function __construct(EBook $eBook)
    {
        $this->eBook = $eBook;
    }

    // 打开
    public function open()
    {
        // 解锁
        $this->eBook->unlock();
    }

    public function turnPage()
    {
        $this->eBook->pressNext();        
    }

    public function getPage()
    {
        return $this->eBook->getPage()[0];
    }
}
