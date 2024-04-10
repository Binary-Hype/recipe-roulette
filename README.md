# Rezept Roulette
Recipe Roulette is a random recipe picker which is answering the question "what should I eat today?".
It's based on the TALL stack and is using [daisyUI](https://github.com/saadeghi/daisyui) for faster - and more important more beautiful - frontend development. 

## Local Setup

### Requirements
- Docker (recommending [OrbStack](https://orbstack.dev/))
- [ddev](https://ddev.readthedocs.io/en/stable/)

### Getting Started
1. Clone the repo
2. Start the ddev container
```
ddev start
```
3. Install composer and node packages
```
ddev composer install && ddev npm install
```
4. Run migrations - you can leave out the seeding
```
ddev artisan migrate:fresh --seed
```
5. (optional) If you don't seed the DB you need to create a filament user
```
ddev artisan make:filament-user
```


The admin panel is provided by [filament](https://github.com/filamentphp/filament) and can be reached on `/binary-admin`
