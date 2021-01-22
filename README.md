# Permission extension for DataObjects

Adds handy permissions to allow certain groups and roles to access dataobject records, based on configuration.

This allows, for instance, content administrators access to create/edit and delete records not handled by the core CMS module permissions

## Permissions

View, Edit and Delete permission handling is provided

### Edit / Create

> Edit content data objects

Edit and create are bundled into one permission, if you can create you can edit.

### Delete

> Delete content data objects

This specific permission is provided allowing members to delete dataobject records

### View

Anonymous users can view a dataobject, this allows permission checks to pass in your project controllers for published URLs and preview links.

When adding access to administration areas that list the relevant dataobjects, ensure you check this permission as well.

## Overriding permissions

It's always wise to specify granular permissions on specific dataobjects. This extension is suitable for content-related dataobjects where adding access does not have implications for the privacy of any data.


## Requirements

See composer.json

## Installation

```composer require nswdpc/silverstripe-dataobject-editable```

## Use

Extend your DataObject to add permissions (via Security/Member)

```
Your\Funky\DataObject:
  extensions:
    - NSWDPC\DataObjectEditable\Extensions\DataObjectEditable
```

## License

[BSD-3-Clause](./LICENSE.md)

## Maintainers

+ [dpcdigital@NSWDPC:~$](https://dpc.nsw.gov.au)

## Bugtracker

We welcome bug reports, pull requests and feature requests on the Github Issue tracker for this project.

Please review the [code of conduct](./code-of-conduct.md) prior to opening a new issue.

## Development and contribution

If you would like to make contributions to the module please ensure you raise a pull request and discuss with the module maintainers.

Please review the [code of conduct](./code-of-conduct.md) prior to completing a pull request.
