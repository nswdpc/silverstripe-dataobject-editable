<?php

namespace NSWDPC\DataObjectEditable\Tests;

use SilverStripe\Dev\SapphireTest;
use SilverStripe\Security\Member;

class DataObjectExtensionTest extends SapphireTest
{
    protected $usesDatabase = true;

    protected static $fixture_file = './DataObjectExtensionTest.yml';

    protected static $extra_dataobjects = [
        TestDataObject::class,
    ];

    public function testPermissions(): void
    {
        $user = $this->objFromFixture(Member::class, 'memberwith');
        $this->loginAs($user);
        $test = TestDataObject::create(['Title' => 'Test']);
        $this->assertTrue($test->canCreate($user));
        $this->assertTrue($test->canEdit($user));
        $this->assertTrue($test->canDelete($user));
        $this->assertTrue($test->canView($user));
    }

    public function testNegatedPermissions(): void
    {
        $user = $this->objFromFixture(Member::class, 'memberwithout');
        $this->loginAs($user);
        $test = TestDataObject::create(['Title' => 'Test negated']);
        $this->assertFalse($test->canCreate($user));
        $this->assertFalse($test->canEdit($user));
        $this->assertFalse($test->canDelete($user));
        $this->assertFalse($test->canView($user));
    }
}
