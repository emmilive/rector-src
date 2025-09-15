<?php

namespace Rector\Tests\Php73\Rector\FuncCall\RegexDashEscapeRector\Fixture;

class SkipInsideSquareBrackets
{
    public function run(string $string)
    {
        preg_match('#\.(fa-[\w-]+)\s{\s--fa:#i', $string);
    }
}

?>
