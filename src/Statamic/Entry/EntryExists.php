<?php

namespace Garrick3491\ExposeStatamicExport\Statamic\Entry;

use Statamic\Facades\Entry;

class EntryExists
{
    public function doesEntryExist(string $collection, string $id)
    {
        $entry = Entry::query()
            ->where('collection', $collection)
            ->where('id', $id);

        if ($entry) {
            return true;
        }

        return false;
    }
}
