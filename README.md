<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# LaravelBookmarkDB

A bookmark organization database, written in Laravel to store any kind of bookmarks you can think of!

## Build Setup

```bash
# Arch Linux - required packages
$ sudo pacman -Syu
$ sudo pacman -S php composer

# Ubuntu - required packages
$ sudo apt update && sudo apt upgrade -y
$ sudo apt install software-properties-common apt-transport-https php-cli unzip -y
$ sudo add-apt-repository ppa:ondrej/php -y
$ sudo apt update
$ sudo apt install php8.1
$ sudo php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer

# Clone repository
$ git clone git@github.com:ncklinux/LaravelBookmarkDB.git
$ cd LaravelBookmarkDB
$ git checkout -b YOUR_BRANCH_NAME

# Check versions
$ php -v && composer -V

# List & install PHP extensions
$ php -m
$ sudo pacman -S PACKAGE_NAME # Arch Linux PHP packages https://archlinux.org/packages/?sort=&q=php&maintainer=&flagged=
$ sudo apt install PACKAGE_NAME # Ubuntu Ondrej PHP packages https://launchpad.net/~ondrej/+archive/ubuntu/php

# Sail
$ php artisan sail:install # Select MariaDB (recommended for performance) or MySQL
$ sail up
$ sail yarn install && sail yarn dev # On new (2nd) CLI tab
$ sail artisan migrate # On new (3rd) CLI tab
```

## Motivation

For a long time I've been looking for a bookmark database/manager that does all kinds of bookmarks, URLs, books, files, flags, tags, icons, you name it. In order to clean up my Box (of keeping and maintaining multiple packages and even services), I decided to go ahead and create my own bookmark database/manager. I made a list of my needs and as I looked through the list, I discovered some breakthrough ideas and features that I would like to share through this project.

## Laravel Debugbar

Add (and star) the project [laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) with composer `composer require barryvdh/laravel-debugbar --dev`, is one of the most useful Laravel packages, for and **only during development**.
![Screenshot](https://user-images.githubusercontent.com/973269/79428890-196cc680-7fc7-11ea-8229-189f5eac9009.png)

## Docker Compose & PHPMyAdmin

If you want to manage the MariaDB/MySQL database with free software, you can use [MySQL Command-Line Client](https://dev.mysql.com/doc/refman/8.0/en/mysql.html), [MySQL Workbench](https://www.mysql.com/products/workbench/) or [PHPMyAdmin](https://www.phpmyadmin.net/). In order to use PHPMyAdmin, you need to add the following (after `mariadb:`) to your [docker-compose.yml](https://docs.docker.com/compose/), then `sail up` and access it from [http://localhost:8081](http://localhost:8081)

```bash
myadmin:
    image: 'phpmyadmin:latest'
    ports:
        - 8081:80
    environment:
        MYSQL_ROOT_PASSWORD: '${DB_PASSWORD}'
    links:
        - "mariadb:db"
    depends_on:
        - mariadb
    networks:
        - sail
```

## Composer

This project uses [Composer](https://getcomposer.org) for dependency management in PHP, it allows you to declare the libraries on which your project depends and will manage (install/update) them for you, use `composer show -i` to list all installed libraries/packages.

## Yarn

This project uses [Yarn](https://yarnpkg.com) for the front-end package management, in order to solve consistency, security, and performance problems.

## TypeScript

The front-end of this project uses [TypeScript](https://www.typescriptlang.org), the "typed superset of JavaScript that compiles to plain JavaScript". The main benefit is to support IDEs and code editors to provide a type safe environment for highlighting common coding errors. All interfaces are defined in `./resources/js/types.d.ts`.

## License

GNU General Public License v3.0 - See the [LICENSE](https://github.com/ncklinux/LaravelBookmarkDB/blob/master/LICENSE) file in this project for details.

## Disclaimer

This project is distributed FREE & WITHOUT ANY WARRANTY. Report any bugs or suggestions here as an [issue](https://github.com/ncklinux/LaravelBookmarkDB/issues/new).

## Contributing

Please read the [contribution](https://github.com/ncklinux/.github/blob/main/CONTRIBUTING.md) guidelines.

## Commit Messages

This repository follows the [Conventional Commits](https://www.conventionalcommits.org) specification, the commit message should never exceed 100 characters and must be structured as follows:

```
<type>[optional scope]: <description>

[optional body]

[optional footer(s)]
```

## Troubleshooting

:no_entry_sign: No configuration file provided: not found

```bash
php artisan sail:install # Select MariaDB (recommended for performance) or MySQL
```

:no_entry_sign: If the UI is not displayed correctly, e.g. without stylesheets, open a new CLI tab and run:

```bash
sail yarn dev
```

## About Laravel

[Laravel](https://laravel.com) is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, is accessible, powerful, and provides tools required for large, robust applications.

## Note

Gonna keep this project as open source forever! [Watch this repo](https://github.com/ncklinux/LaravelBookmarkDB/subscription), Star it and follow me on [GitHub](https://github.com/ncklinux) and [Twitter](https://twitter.com/ncklinux)

## Resources

Set of icons [Devicon](https://devicon.dev)  
Free photos by [Pexels](https://www.pexels.com)

## Powered by

<img height="33" style="margin-right: 3px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/unix/unix-original.svg" /><img height="33" style="margin-right: 3px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linux/linux-original.svg" /><img height="33" style="margin-right: 3px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bash/bash-original.svg" /><img height="33" style="margin-right: 3px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-plain-wordmark.svg" /><img height="33" style="margin-right: 3px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" /><img height="33" style="margin-right: 3px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-plain-wordmark.svg" /><img height="33" style="margin-right: 3px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/composer/composer-original.svg" /><img height="33" style="margin-right: 3px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain-wordmark.svg" /><img height="33" style="margin-right: 3px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" /><img height="33" style="margin-right: 3px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" /><img height="33" style="margin-right: 3px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" /><img height="33" style="margin-right: 3px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" /><img height="33" style="margin-right: 3px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" /><img height="33" style="margin-right: 3px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sass/sass-original.svg" /><img height="33" style="margin-right: 3px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" /><img height="33" style="margin-right: 3px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" /><img height="33" style="margin-right: 3px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/npm/npm-original-wordmark.svg" /><img height="33" style="margin-right: 3px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" />
