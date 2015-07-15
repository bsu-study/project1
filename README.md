#Задача
Разработать систему тестирования (далее СТ). СТ позволяет проходить пользователям тесты.
Тест - набор вопросов.
Вопросы могут быть:
1) Открытые и закрытые.
Открытые - можно вводить свой вариант ответа
Закрытые - можно выбирать только из предложенных
2) Один/много вариантов ответа
На вопрос можно дать только один ответ, в качестве ответа можно выбрать несколько вариантов

СТ должна записывать ответы данные пользователем в базе данных.
Дополнительные возможности: 
1) подсистема создания новых тестов
2) ограничения по времени 
3) автоматический подсчёт баллов за тест

Пример системы тестирования: http://avto-russia.ru/pdd/bilet1.html
---------------------------------------------------------------------------------------------------------
НЕЛЬЗЯ:
1) Использовать готовые решения
2) Модули для фреймворков реализующие системы тестирования

МОЖНО:
1) использовать любые js, html, css фреймворки
2) использовать php фреймворки

Для простоты задачу можно разбить на 2 уровня:
Задача:
Уровень №1 есть готовый тест, пользователи проходят тест (идентификация например по ФИО), результаты записываются в БД
Уровень №2 сделать систему тестирования (можно создавать любое количество тестов с различными типами вопросов)

Что требуется:
1) Исходный код (по умолчанию проект лежит в корневике)
2) Дамп бд - СУБД MySQL
3) Уметь полностью объяснить

Что приветствуется:
1) Шаблоны проектирования
2) Общая расширяемость системы
3) применение принципов ООП
4) UML

Чтобы реализовать систему нам нужно:
1) Разработать структуру базы данных
2) Разработать фронтэнд (интерфейс)
3) Разработать бэкэнд (скрипты обрабатывающие действия пользователей)

#lesson1
Сегодня мы обсудили основные принципы построения баз данных и составление запросов к СУБД на языке SQL. Краткое содержание и задания:
1) Что такое база данных. Смотрим первую лекцию (можно и весь курс) из курса Базы данных:
https://www.lektorium.tv/lecture/13352
2) Реляционные базы данных и Нормальные формы
3) Разработать структуру для проекта. Если не получается полная структура, то нужно описать таблицы, которые должны содержатся в базе данных
4) Составление простых SQL - Запросов. Регистрируемся на ресурсе sql-ex.ru и решаем задачи.
