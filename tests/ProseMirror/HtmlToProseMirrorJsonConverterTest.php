<?php

namespace Garrick3491\ExposeStatamicExport\Tests\ProseMirror;

use Garrick3491\ExposeStatamicExport\ProseMirror\HtmlToProseMirrorJsonConverter;
use Garrick3491\ExposeStatamicExport\Tests\TestCase;
use Tiptap\Editor;

final class HtmlToProseMirrorJsonConverterTest extends TestCase
{
    /**
     * @test
     */
    public function ItShouldReturnProseMirrorJsonForAGivenHtmlString()
    {
        $htmlToJsonConverter = new HtmlToProseMirrorJsonConverter(new Editor());

        $expected = json_encode(
            [
            "type" => "doc",
            "content" => [
              [
                "type" => "paragraph",
                "content" => [
                  [
                    "type" => "text",
                    "text" => "Hello World"
                  ]
                ]
              ]
            ]
        ]
        );

        $json = $htmlToJsonConverter->convertHtmlToProseMirrorJson('<p>Hello World</p>');

        $this->assertJsonStringEqualsJsonString($expected, $json);
    }
}
