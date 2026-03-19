<?php

namespace NSWDPC\DataObjectEditable\Tests;

use NSWDPC\DataObjectEditable\Extensions\DataObjectExtension;
use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\DataObject;

class TestDataObject extends DataObject implements TestOnly
{

    private static string $table_name = "DataObjectEditableTestDataObject";

    private static array $db = [
        'Title' => 'Varchar',
    ];

    private static array $extensions = [
        DataObjectExtension::class
    ];

}
