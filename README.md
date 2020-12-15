# Add permissions to allow non-admins to edit DataObjects
Required to allow

## Requirements

See composer.json

## Installation

```composer require nswdpc/silverstripe-dataobject-editable```

## Use

Extend your DataObject to add permissions (via Security/Member)

```Your\Funky\DataObject:
  extensions:
    - NSWDPC\DataObjectEditable\Extensions\DataObjectEditable```

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
