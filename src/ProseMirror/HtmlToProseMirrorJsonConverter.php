<?php

namespace Parallax\ExposeStatamicExport\ProseMirror;

use Tiptap\Editor;

class HtmlToProseMirrorJsonConverter
{
    public function __construct(protected Editor $editor)
    {

    }
    public function convertHtmlToProseMirrorJson(string $html)
    {
        return $this->editor->setContent($html)
            ->getJSON();
    }
}
