<?php

namespace Phpactor\CodeTransform\Domain\Refactor;

use Phpactor\CodeTransform\Domain\Refactor\ImportClass\NameImport;
use Phpactor\CodeTransform\Domain\SourceCode;
use Phpactor\TextDocument\ByteOffset;
use Phpactor\TextDocument\TextEdits;

interface ImportName
{
    public function importName(SourceCode $source, ByteOffset $offset, NameImport $nameImport): TextEdits;
}
