<?php

declare(strict_types=1);

namespace Mitasych\OtusComposerHw;

class WordCounter
{
    public function count(string $text): int
    {
        return count(preg_split('/[^\p{L}\p{N}\']+/u',$text));
    }
}