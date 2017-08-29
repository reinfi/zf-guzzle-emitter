[![Build Status](https://travis-ci.org/reinfi/zf-dependency-injection.svg?branch=master)](https://travis-ci.org/reinfi/zf-dependency-injection)
[![Code Climate](https://codeclimate.com/github/reinfi/zf-dependency-injection/badges/gpa.svg)](https://codeclimate.com/github/reinfi/zf-dependency-injection)
[![Coverage Status](https://coveralls.io/repos/github/reinfi/zf-dependency-injection/badge.svg?branch=master)](https://coveralls.io/github/reinfi/zf-dependency-injection?branch=master)

Configure guzzle emitter subscriber via configuration.

1. [Installation](#installation)
2. [Usage](#usage)

### Installation

1. Install with Composer: `composer require reinfi/zf-guzzle-emitter`.
2. Enable the module via ZF2 config in `appliation.config.php` under `modules` key:

```php
    return [
        'modules' => [
            'Reinfi\GuzzleEmitter',
            // other modules
        ],
    ];
```

### Usage
To use it you need to register your subscriber under the following config key.
```php
'guzzle_emitter' => [
    'subscriber' => [
        YourSubscriber::class,
    ],
]
```
All your subscribers must be registered within the service locator.

When you need to get a new guzzle client you just pass the following options
```php
$options = [
    'emitter' => $container->get(\Reinfi\GuzzleEmitter\Emitter::class);,
    '...'     => '',
];

$client = new Client($options);
```

### FAQ
Feel free to ask any questions or open own pull requests.