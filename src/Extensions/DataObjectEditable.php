<?php

namespace NSWDPC\DataObjectEditable\Extensions;

use SilverStripe\ORM\DataExtension;
use SilverStripe\Security\Permission;
use SilverStripe\Security\PermissionProvider;
use SilverStripe\Security\Member;

class DataObjectEditable extends DataExtension implements PermissionProvider
{

    public function providePermissions()
    {
        return [
            'DATAOBJECT_EDIT' => [
                'name' => 'Edit content data objects',
                'category' => 'Content permissions',
                'sort' => 200,
            ],
            'DATAOBJECT_DELETE' => [
                'name' => 'Delete content data objects',
                'category' => 'Content permissions',
                'sort' => 300,
            ],
        ];
    }

    public function canView($member = null)
    {
        if(!$member instanceof Member) {
            $member = Member::currentUser();
        }
        if (Permission::checkMember($member, 'DATAOBJECT_EDIT')) {
            return true;
        }
        return null;
    }

    public function canCreate($member = null)
    {
        if (Permission::checkMember($member, 'DATAOBJECT_EDIT')) {
            return true;
        }
        return null;
    }

    public function canEdit($member = null)
    {
        if(!$member instanceof Member) {
            $member = Member::currentUser();
        }
        if (Permission::checkMember($member, 'DATAOBJECT_EDIT')) {
            return true;
        }
        return null;
    }

    public function canDelete($member = null)
    {
        if(!$member instanceof Member) {
            $member = Member::currentUser();
        }
        if (Permission::checkMember($member, 'DATAOBJECT_DELETE')) {
            return true;
        }
        return null;
    }

}
