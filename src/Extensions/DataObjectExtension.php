<?php

namespace NSWDPC\DataObjectEditable\Extensions;

use SilverStripe\ORM\DataExtension;
use SilverStripe\Security\Permission;
use SilverStripe\Security\PermissionProvider;
use SilverStripe\Security\Member;
use SilverStripe\Security\Security;


/**
 * An extension applied to DataObject classes to provide basic permissions to them via configuration
 */
class DataObjectExtension extends DataExtension implements PermissionProvider
{

    public function providePermissions()
    {
        return [
            'DATAOBJECT_VIEW' => [
                'name' => _t(__CLASS__ . '.VIEW_PERMISSION', 'View content data objects'),
                'category' => _t(__CLASS__ . '.CONTENT_PERMISSIONS', 'Content permissions'),
                'sort' => 400,
            ],
            'DATAOBJECT_EDIT' => [
                'name' => _t(__CLASS__ . '.EDIT_PERMISSION', 'Edit content data objects'),
                'category' => _t(__CLASS__ . '.CONTENT_PERMISSIONS', 'Content permissions'),
                'sort' => 200,
            ],
            'DATAOBJECT_DELETE' => [
                'name' => _t(__CLASS__ . '.DELETE_PERMISSION', 'Delete content data objects'),
                'category' => _t(__CLASS__ . '.CONTENT_PERMISSIONS', 'Content permissions'),
                'sort' => 300,
            ],
        ];
    }

    /**
     * Check view permission
     */
    public function canView($member = null) {
        if(!$member) {
            $member = Security::getCurrentUser();
        }
        if(!$member) {
            // anonymous users can view a dataobject
            return true;
        } else if (Permission::checkMember($member, 'DATAOBJECT_VIEW')) {
            return true;
        }
        return null;

    }

    /**
     * Check create (edit) permission
     */
    public function canCreate($member = null)
    {
        if (Permission::checkMember($member, 'DATAOBJECT_EDIT')) {
            return true;
        }
        return null;
    }

    /**
     * Check edit permission
     */
    public function canEdit($member = null)
    {
        if (Permission::checkMember($member, 'DATAOBJECT_EDIT')) {
            return true;
        }
        return null;
    }

    /**
     * Check delete permission
     */
    public function canDelete($member = null)
    {
        if (Permission::checkMember($member, 'DATAOBJECT_DELETE')) {
            return true;
        }
        return null;
    }

}
