<?php

namespace Garrick3491\ExposeStatamicExport\Statamic\Entry;

use Statamic\Facades\Entry;

class EntryFactory
{
    public function createNewEntry(string $collection, string $slug, string $blueprint)
    {
        $entry = Entry::make();

        $entry->collection($collection)
            ->slug($slug)
            ->blueprint($blueprint);

        return $entry;
    }


}
