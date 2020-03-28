<?php declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter\Tests;

use DesignPatterns\Structural\Adapter\PaperBook;
use Structural\Adapter\EBookAdapter;
// use Structural\Adapter\Kindle;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }

    // public function testCanTurnPageOnKindleLikeInANormalBook()
    // {
    //     $kindle = new Kindle();
    //     $book = new EBookAdapter($kindle);

    //     $book->open();
    //     $book->turnPage();

    //     $this->assertSame(2, $book->getPage());
    // }
}