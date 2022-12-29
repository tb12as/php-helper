<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Tb12as\PhpHelper\Str;

final class StrTest extends TestCase
{
    public function testStrContains(): void
    {
        $str = "This is random string";
        $c1 = Str::contains($str, "random");
        $this->assertSame(true, $c1);
    }

    public function testStrContainsFail()
    {
    	$str = "This is random string";
        $c1 = Str::contains($str, "noway!");
        $this->assertSame(false, $c1);	
    }

    public function testStrWord()
    {
    	$str = "syafiq afifuddin adalah anak yang baik dan rajin menabung";
    	$w = Str::words($str, 3);
    	$this->assertSame($w, "syafiq afifuddin adalah");
    }

    public function testStrWordEmptyString()
    {
    	$this->assertSame(Str::words(''), null);
    }
}
