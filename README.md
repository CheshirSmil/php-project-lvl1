# php-project-lvl 1:

[![Actions Status](https://github.com/CheshirSmil/php-project-lvl1/workflows/hexlet-check/badge.svg)](https://github.com/CheshirSmil/php-project-lvl1/actions)
<a href="https://codeclimate.com/github/CheshirSmil/php-project-lvl1/maintainability"><img src="https://api.codeclimate.com/v1/badges/4a45876e296a624651ba/maintainability" /></a>
[![Linter!](https://github.com/CheshirSmil/php-project-lvl1/actions/workflows/MakeLint.yml/badge.svg)](https://github.com/CheshirSmil/php-project-lvl1/actions/workflows/MakeLint.yml)

Этот репозиторий содержит реализацию первого проекта портала Hexlet, Brain Games! В проекте 5 мини игр.
Каждая игра задает вопросы, на которые нужно дать правильные ответы. После трех правильных ответов считается, что игра пройдена. 
Неправильные ответы завершают игру и предлагают пройти ее заново.

## Требования:

Необходимо наличие на компьютере ОС Linux и PHP не ниже 7 версии.

## Установка:

Для установки используется Makefile с командой install, выполняющий команду composer install.

## Запуск:

Для запуска игры достаточно ввести команду make с названием игры в командной строке.
Например: make brain-even

    make brain-even - в игре надо ответить является число четным или же нет.
    make brain-calc - в игре надо сложить, вычесть или умножить два числа и дать верный ответ.
    make brain-gcd  - в игре надо найти наибольший общий делитель двух чисел и дать верный ответ.
    make brain-progression - в игре надо найти пропущеный элемент арифметической прогрессии.
    make brain-prime - в игре надо ответить простое показанное число или нет.

## Примеры запуска игр:

### game Brain-even

[![asciicast](https://asciinema.org/a/513764.svg)](https://asciinema.org/a/513764)

### game Brain-calc

[![asciicast](https://asciinema.org/a/513767.svg)](https://asciinema.org/a/513767)

### game Brain-gcd

[![asciicast](https://asciinema.org/a/513769.svg)](https://asciinema.org/a/513769)

### game Brain-progression

[![asciicast](https://asciinema.org/a/513770.svg)](https://asciinema.org/a/513770)

### game Brain-prime

[![asciicast](https://asciinema.org/a/513775.svg)](https://asciinema.org/a/513775)
