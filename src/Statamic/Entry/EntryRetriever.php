<?php

namespace Parallax\ExposeStatamicExport\Statamic\Entry;

use Parallax\ExposeStatamicExport\Statamic\Entry\Exception\DoesNotExistException;
use Statamic\Facades\Entry;

class EntryRetriever
{
    public function getSingleEntry(string $collection, string $id)
    {
        $entry = Entry::query()
            ->where('collection', $collection)
            ->where('id', $id)->first();

        if (!$entry) {
            throw new DoesNotExistException("Entry does not exist for collection: $collection with id: $id");
        }

        return $entry;
    }
}