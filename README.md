# NSW DPC Silverstripe module skeleton

This is a skeleton used for NSWDPC published Silverstripe modules. It is based on [The official 'Silverstripe supported module skeleton'](https://github.com/silverstripe/silverstripe-module) with added defaults based on the [recommended structure](https://docs.silverstripe.org/en/4/getting_started/directory_structure/#custom-code-structure).

### Usage

- Clone this repository into a directory and cd into it
- Remove the ```.git``` directory and run a ```git init``` to create a repo
- Rename the working directory to reflect your module
- Update required module files to reflect your intentions
- Remove .gitkeep files as required
- Update this README.md with relevant changes for your project
- Update docs/en/001_index.md as required, add more docs if required
- Add your name/organisation to `LICENSE.md`
- Edit [composer.json](./composer.json) with your requirements including package name and description.
- Update/remove `require`,`require-dev`,`suggest`,`replace`,`authors`,`support`,`keywords` as required
- Edit [phpunit.xml.dist](./phpunit.xml.dist) and update the testsuite name attribute to be your project name
- Add and push to a VCS repository
- Either [publish](https://getcomposer.org/doc/02-libraries.md#publishing-to-packagist) the module on packagist.org, or add a [custom repository](https://getcomposer.org/doc/02-libraries.md#publishing-to-a-vcs) to your project's `composer.json`
- Require the module using composer to include it in your project

## Requirements

The recommended way of installing this module is via [composer](https://getcomposer.org/download/)

> You should detail any specific module requirements here and point to the composer.json file

## Installation

> Add any specific installation requirements here beyond composer, such as configuration of API keys, Admin activities and the like

## License

[BSD-3-Clause](./LICENSE.md)

## Documentation

* [Documentation](./docs/en/001_index.md)

> Further English language documentation should be included in the file above or linked to from that file

## Configuration

> Add project configuration examples

## Maintainers

+ [dpcdigital@NSWDPC:~$](https://dpc.nsw.gov.au)

> Add additional maintainers here and/or include [authors in composer](https://getcomposer.org/doc/04-schema.md#authors)

## Bugtracker

We welcome bug reports, pull requests and feature requests on the Github Issue tracker for this project.

Please review the [code of conduct](./code-of-conduct.md) prior to opening a new issue.

## Development and contribution

If you would like to make contributions to the module please ensure you raise a pull request and discuss with the module maintainers.

Please review the [code of conduct](./code-of-conduct.md) prior to completing a pull request.
