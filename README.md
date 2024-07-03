# Onfido PHP Library

The official PHP library for integrating with the Onfido API.

Documentation can be found at <https://documentation.onfido.com>.

This version uses Onfido API v3.6. Refer to our [API versioning guide](https://developers.onfido.com/guide/api-versioning-policy#client-libraries) for details of which client library versions use which versions of the API.

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

[![Latest release](https://badge.fury.io/ph/onfido%2Fonfido-php.svg)](https://badge.fury.io/ph/onfido%2Fonfido-php)
![Build Status](https://github.com/onfido/onfido-php/actions/workflows/php.yml/badge.svg)

### Installation

#### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/onfido/onfido-php.git"
    }
  ],
  "require": {
    "onfido/onfido-php": "*@dev"
  }
}
```

Then run `composer install`

#### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$configuration = Onfido\Configuration::getDefaultConfiguration();
$configuration->setApiToken($_ENV['ONFIDO_API_TOKEN']);
$configuration->setRegion(Onfido\Region::EU);   // Supports `EU`, `US` and `CA`

$onfidoApi = new Onfido\Api\DefaultApi(
              new \GuzzleHttp\Client([
                  'timeout'  => 30,
                  'connect_timeout' => 30,
                  'read_timeout' => 30
              ]), $configuration);

```

### Making a call to the API

```php
try {
  $applicant = $onfidoApi->createApplicant(
      new Onfido\Model\ApplicantBuilder(
          [
              'first_name' => 'First',
              'last_name' => 'Last'
          ])
  );

  // To access the information use the getter for the desired property on the object, for example:
  $applicant->getFirstName();

  // ...

} catch (Onfido\ApiException $ex) {
  // Handle API exception
  echo 'Caught exception: ',  $ex->getMessage(), "\n";
}
```

### Webhook event verification

Webhook events payload needs to be verified before it can be accessed. Library allows to easily decode the payload and verify its signature before returning it as an object for user convenience:

```php
try {
  $verifier = new Onfido\WebhookEventVerifier(getenv('ONFIDO_WEBHOOK_SECRET_TOKEN'));

  $signature = 'a0...760e';

  $event = $verifier->readPayload('{"payload":{"r...3"}}', $signature);
} catch (Onfido\OnfidoInvalidSignatureError $ex) {
  // Invalid webhook signature
}
```

### Recommendations

#### Do not use square bracket syntax

Except for accessing Task object's outputs, retain from using the square bracket syntax (i.e. `[]`) to access not defined properties to avoid breaking changes when these fields will appear.

## Contributing

This library is automatically generated using [OpenAPI Generator](https://openapi-generator.tech) (version: 7.6.0); therefore all the contributions, except tests files, should target [Onfido OpenAPI specification repository](https://github.com/onfido/onfido-openapi-spec/tree/master) instead of this repository.

For contributions to the tests instead, please follow the steps below:

1. [Fork](https://github.com/onfido/onfido-php/fork) repository
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Make your changes
4. Commit your changes (`git commit -am 'Add some feature'`)
5. Push to the branch (`git push origin my-new-feature`)
6. Create a new Pull Request

## Versioning policy

[Semantic Versioning](https://semver.org) policy is used for library versioning, following guidelines and limitations below:

- MAJOR versions (x.0.0) might:
  - target a new API version
  - include non-backward compatible change
- MINOR versions (0.x.0) might:
  - add a new functionality, non-mandatory parameter or property
  - deprecate an old functionality
  - include non-backward compatible change to a functionality which is:
    - labelled as alpha or beta
    - completely broken and not usable
- PATCH version (0.0.x) might:
  - fix a bug
  - include backward compatible changes only

## More documentation

More documentation and code examples can be found at <https://documentation.onfido.com>.

## Support

Should you encounter any technical issues during integration, please contact Onfido's Customer Support team via the [Customer Experience Portal](https://public.support.onfido.com/) which also includes support documentation.
