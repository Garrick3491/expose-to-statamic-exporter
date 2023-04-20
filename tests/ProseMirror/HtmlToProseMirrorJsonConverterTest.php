<?php 

namespace Parallax\ExposeStatamicExport\Tests\ProseMirror;

use Parallax\ExposeStatamicExport\ProseMirror\HtmlToProseMirrorJsonConverter;
use Parallax\ExposeStatamicExport\Tests\TestCase;
final class HtmlToProseMirrorJsonConverterTest extends TestCase {

    /**
     * @test
     */
    public function ItShouldReturnProseMirrorJsonForAGivenHtmlString()
    {
        $htmlToJsonConverter = new HtmlToProseMirrorJsonConverter();

        $expected = [
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
        ];

        $json = $htmlToJsonConverter->convertHtmlToProseMirrorJson('<p>Hello World</p>');

        $this->assertJsonStringEqualsJsonString(json_encode($expected), json_encode($json));
    }
}

?>