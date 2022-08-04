### Hexlet tests and linter status:
php-project-lvl1

[![Actions Status](https://github.com/CheshirSmil/php-project-lvl1/workflows/hexlet-check/badge.svg)](https://github.com/CheshirSmil/php-project-lvl1/actions)
<a href="https://codeclimate.com/github/CheshirSmil/php-project-lvl1/maintainability"><img src="https://api.codeclimate.com/v1/badges/4a45876e296a624651ba/maintainability" /></a>
[![Linter!](https://github.com/CheshirSmil/php-project-lvl1/actions/workflows/MakeLint.yml/badge.svg)](https://github.com/CheshirSmil/php-project-lvl1/actions/workflows/MakeLint.yml)

Этот репозиторий содержит реализацию первого проекта портала Hexlet, Brain Games! В проекте 5 мини игр.
Каждая игра задает вопросы, на которые нужно дать правильные ответы. После трех правильных ответов считается, что игра пройдена. 
Неправильные ответы завершают игру и предлагают пройти ее заново.

Необходимо наличие на компьютере ОС Linux и PHP не ниже 7 версии. 
Для установки используется Makefile с командой install, выполняющий команду composer install.

Для запуска игры достаточно ввести команду make с названием игры в командной строке.

    make brain-even - в игре надо ответить является число четным или же нет.
    make brain-calc - в игре надо сложить, вычесть или умножить два числа и дать верный ответ.
    make brain-gcd  - в игре надо найти наибольший общий делитель двух чисел и дать верный ответ.
    make brain-progression - в игре надо найти пропущеный элемент арифметической прогрессии.
    make brain-prime - в игре надо ответить простое показанное число или нет.

Example game Brain-even

[![asciicast](https://asciinema.org/a/m9UyR2ZEm3TilqNdz7BpUa0GD.svg)](https://asciinema.org/a/m9UyR2ZEm3TilqNdz7BpUa0GD)

Example game Brain-calc

[![asciicast](https://asciinema.org/a/uuysjA89Zg7E0DMkuBX0sRClX.svg)](https://asciinema.org/a/uuysjA89Zg7E0DMkuBX0sRClX)

Example game Brain-gcd

[![asciicast](https://asciinema.org/a/61pyCJLt8yLTtK9wRH6iDj8Ed.svg)](https://asciinema.org/a/61pyCJLt8yLTtK9wRH6iDj8Ed)

Example game Brain-progression

[![asciicast](https://asciinema.org/a/FKOHtN6fmSIxHGT0osgL4C9sw.svg)](https://asciinema.org/a/FKOHtN6fmSIxHGT0osgL4C9sw)

Example game Brain-prime

[![asciicast](https://asciinema.org/a/KwMhh7AorNYJ0flGiYz0ONXci.svg)](https://asciinema.org/a/KwMhh7AorNYJ0flGiYz0ONXci)
