# Permission extension for DataObjects

Adds handy permissions to allow certain groups and roles to access dataobject records, based on configuration.

This allows, for instance, content administrators access to create/edit and delete records not managed by the core CMS module permissions

## Permissions

### Edit / Create

Permission: Edit content data objects

Edit and create are bundled into one permission, if you can create you can edit.

### Delete

Permission: Delete content data objects

This specific permission is provided allowing members to delete dataobject records

### View

Permission: View content data objects

Anonymous users can view a dataobject, this allows permission checks to pass in your project controllers for published URLs and preview links.

When adding access to administration areas that list the relevant dataobjects, ensure you check this permission as well.

## Overriding permissions

This extension is suitable for content-related dataobjects where adding access does not have implications for the privacy of any data.

If you have data records that require specific permissions, specify these within those DataObjects rather than using this extension.


## Requirements

See composer.json

## Installation

```composer require nswdpc/silverstripe-dataobject-editable```

## Configuration

Extend your DataObject to add the Edit/Create/View permissions as part of your project yaml configuration

```yaml
---
Name: 'app-content-permissions'
----
My\Content\DataObject:
  extensions:
    - 'NSWDPC\DataObjectEditable\Extensions\DataObjectExtension'
```

After building and flushing, you will see Edit/View/Create content dataobjects permission in the Permissions tab of the Security section.

Checking one or more of these will provide that permission to the configured dataobject(s)

## License

[BSD-3-Clause](./LICENSE.md)

## Maintainers

+ [dpcdigital@NSWDPC:~$](https://dpc.nsw.gov.au)

## Bugtracker

We welcome bug reports, pull requests and feature requests on the Github Issue tracker for this project.

Please review the [code of conduct](./code-of-conduct.md) prior to opening a new issue.

## Security

If you have found a security issue with this module, please email digital[@]dpc.nsw.gov.au in the first instance, detailing your findings.

## Development and contribution

If you would like to make contributions to the module please ensure you raise a pull request and discuss with the module maintainers.

Please review the [code of conduct](./code-of-conduct.md) prior to completing a pull request.
