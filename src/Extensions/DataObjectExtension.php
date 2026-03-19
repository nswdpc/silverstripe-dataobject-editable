<?php

namespace NSWDPC\DataObjectEditable\Extensions;

use SilverStripe\Core\Extension;
use SilverStripe\Security\Permission;
use SilverStripe\Security\PermissionProvider;
use SilverStripe\Security\Member;
use SilverStripe\Security\Security;


/**
 * An extension applied to DataObject classes to provide basic permissions to them via configuration
 * @extends \SilverStripe\Core\Extension<static>
 */
class DataObjectExtension extends Extension implements PermissionProvider
{

    /**
     * @return array
     */
    public function providePermissions()
    {
        return [
            'DATAOBJECT_VIEW' => [
                'name' => _t(self::class . '.VIEW_PERMISSION', 'View content data objects'),
                'category' => _t(self::class . '.CONTENT_PERMISSIONS', 'Content permissions'),
                'sort' => 400,
            ],
            'DATAOBJECT_EDIT' => [
                'name' => _t(self::class . '.EDIT_PERMISSION', 'Edit content data objects'),
                'category' => _t(self::class . '.CONTENT_PERMISSIONS', 'Content permissions'),
                'sort' => 200,
            ],
            'DATAOBJECT_DELETE' => [
                'name' => _t(self::class . '.DELETE_PERMISSION', 'Delete content data objects'),
                'category' => _t(self::class . '.CONTENT_PERMISSIONS', 'Content permissions'),
                'sort' => 300,
            ],
        ];
    }

    /**
     * Check view permission
     */
    public function canView($member = null): ?bool {
        if(!$member) {
            $member = Security::getCurrentUser();
        }

        if (!$member) {
            // anonymous users can view a dataobject
            return true;
        } elseif (Permission::checkMember($member, 'DATAOBJECT_VIEW')) {
            return true;
        }

        return null;

    }

    /**
     * Check create (edit) permission
     */
    public function canCreate($member = null): ?bool
    {
        if (Permission::checkMember($member, 'DATAOBJECT_EDIT')) {
            return true;
        }

        return null;
    }

    /**
     * Check edit permission
     */
    public function canEdit($member = null): ?bool
    {
        if (Permission::checkMember($member, 'DATAOBJECT_EDIT')) {
            return true;
        }

        return null;
    }

    /**
     * Check delete permission
     */
    public function canDelete($member = null): ?bool
    {
        if (Permission::checkMember($member, 'DATAOBJECT_DELETE')) {
            return true;
        }

        return null;
    }

}
