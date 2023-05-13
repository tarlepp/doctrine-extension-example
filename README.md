# What is this?

Someone did have some problems to configure [Doctrine Behavioral Extensions](https://github.com/doctrine-extensions/DoctrineExtensions)
`timestampable`with Symfony. This is a simple example how to configure it.

## How to test this?

1. Clone this repository
2. Run `composer install`
3. Run `php bin/console doctrine:schema:create`
4. Run `symfony seve`
5. Open `http://localhost:8000/` in your browser
6. In each request you should be adding new entity to database with current timestamps (created_at, updated_at)

## License

[The MIT License (MIT)](LICENSE)

Copyright © 2023 Tarmo Leppänen
