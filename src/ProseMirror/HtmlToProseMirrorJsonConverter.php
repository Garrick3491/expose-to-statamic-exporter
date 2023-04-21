<?php

namespace Parallax\ExposeStatamicExport\ProseMirror;

use ProseMirror\ProseMirror;

class HtmlToProseMirrorJsonConverter
{
    public function convertHtmlToProseMirrorJson(string $html)
    {
        return ProseMirror::htmlToJson($html);
    }
}
