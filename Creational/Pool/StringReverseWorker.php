<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Pool;

use DateTime;

class StringReverseWorker
{
    private DateTime $createdAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

   /**
    * Undocumented function
    *
    * @param string $text
    * @return void
    * @Description
    * @Example
    * @Author 古一
    * @DateTime 2020-01-20 18:15
    */
    public function run(string $text)
    {
        return strrev($text);
    }
}