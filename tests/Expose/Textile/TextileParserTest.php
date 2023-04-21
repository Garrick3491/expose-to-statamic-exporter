<?php 

namespace Parallax\ExposeStatamicExport\Tests\Expose\Textile;

use Netcarver\Textile\Parser;
use Parallax\ExposeStatamicExport\Expose\Textile\TextileParser;
use Parallax\ExposeStatamicExport\Tests\TestCase;
final class TextileParserTest extends TestCase {
    
    /**
     * @test
     */
    public function ItConvertsTextileToHtml()
    {
        $parser = new Parser();

        $textileParser = new TextileParser($parser);

        $textileText = 'h2. *Since its launch in June 2019, the CitiPark mobile app has proved extremely popular with customers, processing over 50,000 transactions to date across 16 sites.*';

        $expected = "<h2><strong>Since its launch in June 2019, the CitiPark mobile app has proved extremely popular with customers, processing over 50,000 transactions to date across 16 sites.</strong></h2>";

        $html = $textileParser->convertTextileToHtml($textileText);

        $this->assertEquals($expected, $html);
    }
}
?>