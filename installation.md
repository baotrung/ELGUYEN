* install symfony project:
    [cmd]: composer create-project symfony/framwork-standard-edition elguyen.info

* config autoload:
    [mod]: composer.json
        "autoload": {
            "psr-4": {
                 "": "src/"
            },
            "classmap": [ "app/AppKernel.php", "app/AppCache.php" ]
        },

    [cmd]: composer dump-autoload

* install extension:
    -jquery:
        [cmd]: composer require components/jquery
    - bootstrap:
        [cmd]: composer require twbs/bootstrap:4.0.0-alpha.6
    - assetic:
        [cmd]: composer require symfony/assetic-bundle
        + filter scssphp:
            [cmd]: composer require leafo/scssphp
        + filter jsqueeze:
            [cmd]: composer require patchwork/jsqueeze
