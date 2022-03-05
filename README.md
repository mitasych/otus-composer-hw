# Счётчик слов
Пакет производит подсчёт слов в тексте

## Требования

 - PHP 7.0 и выше

## Установка
```bash
$ composer require mitasych/otus-composer-hw
```
## Использование
```php
$counter = new \Mitasych\OtusComposerHw\WordCounter();
echo $counter->count('Это текст'); // 2
```