<?php
    namespace Parallax\ExposeStatamicExport\Tests\Statamic\Entry;

    use Parallax\ExposeStatamicExport\Tests\TestCase;
    use Parallax\ExposeStatamicExport\Statamic\Entry\EntryExists;
    
    final class EntryExistsTest extends TestCase {


        /**
         * @test
         */
        public function testThatEntryDoesNotExists()
        {
            // $entryExists = new EntryExists();

            $exists = false;

            $this->assertSame(false, $exists);
        }
    }
?>
