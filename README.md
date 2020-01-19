Bulding a package for easier use of bootstrap components in Blade.

composer.json:

    "autoload": {
        "psr-4": {
            "App\\": "app/",
            "dzonibg\\bladecomponents\\": "packages/dzonibg/bladecomponents/src"
        },
        "classmap": [
            "database/seeds",
            "database/factories"
        ]
    },
    "autoload-dev": {
        "psr-4": {
            "Tests\\": "tests/",
            "dzonibg\\bladecomponents\\": "packages/dzonibg/bladecomponents/src"
        }
        
config/app.php:

        dzonibg\bladecomponents\BladeComponentsServiceProvider::class,

