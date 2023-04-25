<?php

namespace Garrick3491\ExposeStatamicExport\Statamic\Entry;

use Statamic\Facades\Entry;

class EntryExists
{
    public function doesEntryWithIdExist(string $collection, string $id)
    {
        $entry = Entry::query()
            ->where('collection', $collection)
            ->where('id', $id);

        if ($entry) {
            return true;
        }

        return false;
    }

    public function doesEntryWithSlugExist(string $collection, string $slug)
    {
        $entry = Entry::query()
        ->where('collection', $collection)
        ->where('slug', $slug);

        if ($entry) {
            return true;
        }

        return false;
    }
}
