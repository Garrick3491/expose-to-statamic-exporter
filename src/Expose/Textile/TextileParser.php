<?php 

    namespace Parallax\ExposeStatamicExport\Expose\Textile;

    use Netcarver\Textile\Parser;

    class TextileParser {
        public function __construct(private Parser $parser)
        {
            
        }

        public function convertTextileToHtml(string $textile)
        {
            return $this->parser->parse($textile);
        }
    }

?>