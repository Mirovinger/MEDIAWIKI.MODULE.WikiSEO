# Информация

Модуль позволяет изменять тег `<title>` страницы и добавлять теги `<meta name="keywords"/>` и `<meta name="description"/>`.

Этот модуль является форком оригинального расширения от автора **Andru Vallance**, которое находится в репозитории [wiki-seo](//github.com/tinymighty/wiki-seo). Модуль отличается от оригинального расширения улучшенной поддержкой meta-параметров twitter / og.

## Синтаксис

```
{{#seo:
|title=Заголовок страницы
|titlemode=append
|keywords=ключевое,слово
|description=Описание страницы
}}
```

```
<seo title="Заголовок страницы" titlemode="append" keywords="ключевое,слово"  description="Описание страницы"></seo>
```

## Установка

1. Загрузите папки и файлы из `resource/upload/` (если имеется) в Вашу директорию с расширениями MediaWiki.
2. В самый низ файла `LocalSettings.php` добавьте строку `wfLoadExtension( 'WikiSEO' );`.

## Ссылки

- [Сотрудничество](CONTRIBUTING.md)
- [Список изменений](CHANGELOG.md)
- [Сообщество MediaWiki на CYBERSPACE.Community](//cyberspace.community/#)
- [Документация MediaWiki на CYBERSPACE.Wiki](//mediawiki.cyberspace.wiki/)
