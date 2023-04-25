# Expose to Statamic Exporter

---
This package can be used to assist with the export of Expose CMS data into a Statamic CMS project.

Example Step by Step.
- Get News Articles from DB
- Loop through Each Article:
    - Check if Entry Exists
    - If not Create, else fetch
    - build a data array (title, template, published and any other fields you might require)
    - For the Entry body you can start building up HTML body, then add to this using the Textile Parser.
    - if an image is required use the AssetFactory to create one. and add this to the data array using the filename.
    - If an image is to be displayed in the body of the post add `<img src='asset::container_name::fileName'/>` to the HTML body
    - If any terms are Required use the TermFactory to create one by passing the Taxonomy and the Slug.
    - the html body can be passed to the HtmlToProseMirrorJsonConverter and then added ot the Data.
    - Once finished call save on any Entries
---


## Installation

You can install the package via composer:

```bash
composer require  garrick3491/expose-statamic-export
```

## Usage

1. Create a new blank Entry using the EntryFactory by passing the Collection, Slug and Blueprint
2. AssetExists can be used to check if any Assets exist in a given Asset Container name with a given File Name
3. AssetFactory can be used to generate Assets when given a filepath, filename and Asset Container name
4. EntryRetriever can be used to fetch Entries rather than creating them from scratch.
5. TextileParser can be used to convert Textile into HTML.
6. HtmlToProseMirrorJsonConverter can be used to convert HTML into Prose Mirror JSON that Statamic Accepts.

```php
$entryFactory = new EntryFactory();
$entryFactory->createNewEntry('news', 'article_one', 'news') // returns entry;
```

```php
$assetExists = new AssetExists();
echo $assetExists->doesAssetExist('asset', 'article_one_header_image') //bool;
```

```php
$assetFactory = new AssetFactory();
echo $assetFactory->createNewAsset('asset', 'article_one_header_image', self::IMAGE_PATH  . '/' . $fileName) // returns saved Asset;
```

```php
$entryRetriever = new EntryRetriever();
echo $entryRetriever->getSingleEntry('news', '********-****-****-****-********') // returns Entry if exists, Throws DoesNotExistException if no entry found;
```

```php
$textileParser = new TextileParser();
echo $entryRetriever->convertTextileToHtml('h2. *Some Text*') // returns string HTML;
```

```php
$proseMirrorConverter = new HtmlToProseMirrorJsonConverter();
echo $proseMirrorConverter->convertHtmlToProseMirrorJson('<p>Hello World</p>') // returns array of data that can be added to entry;
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Parallax](https://github.com/parallax)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
