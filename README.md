**Description:**

This repository contains a set of PHP scripts for testing and diagnosing WordPress site functionality. These scripts will help you check various aspects of your site, including PHP settings, server connectivity, SSL testing, request handling, and DNS diagnostics.

**File List:**
- **phpinfo.php**: Displays information about the current PHP configuration, including versions, modules, and settings.
- **ping_test.php**: Checks the availability of a specified host using the ping command.
- **ssl_test.php**: Checks SSL certificate information for a given URL.
- **test_curl_debug.php**: Performs cURL requests and outputs detailed information about the request process.
- **test_curl.php**: Performs basic cURL requests and displays results.
- **test_other_url.php**: Checks the availability of another URL and displays the response status.
- **traceroute_test.php**: Performs a traceroute to the specified host.
- **dns_test.php**: Performs DNS queries for a given domain and displays results.
- **dns_change_test.php**: Checks for changes in DNS records for a specified domain.

**Installation and Usage:**
1. Clone this repository to your local server.
2. Place the files on your WordPress server.
3. Open the relevant PHP files through a browser to perform the tests.

**Notes:**
- Use these scripts with caution and only in a test environment to avoid potential performance issues on a production server.
- Ensure you have the appropriate permissions to run tests and check your server settings.

---

**Описание репозитория:**

Этот репозиторий содержит набор PHP-скриптов для тестирования и диагностики работы сайта на WordPress. Скрипты помогут вам проверить различные аспекты работы вашего сайта, включая настройки PHP, проверку подключения к другим серверам, тестирование SSL, выполнение запросов и диагностику DNS.

**Список файлов:**
- **phpinfo.php**: Выводит информацию о текущей конфигурации PHP, включая версии, модули и настройки.
- **ping_test.php**: Проверяет доступность указанного хоста с помощью команды ping.
- **ssl_test.php**: Проверяет информацию о сертификате SSL для указанного URL.
- **test_curl_debug.php**: Выполняет запросы с помощью cURL и выводит детализированную информацию о процессе запроса.
- **test_curl.php**: Выполняет базовые запросы с помощью cURL и выводит результаты.
- **test_other_url.php**: Проверяет доступность другого URL и выводит статус ответа.
- **traceroute_test.php**: Выполняет трассировку маршрута до указанного хоста.
- **dns_test.php**: Выполняет запросы DNS для указанного домена и выводит результаты.
- **dns_change_test.php**: Проверяет изменения в DNS-записях для указанного домена.

**Установка и использование:**
1. Клонируйте этот репозиторий на свой локальный сервер.
2. Разместите файлы на вашем сервере с WordPress.
3. Откройте нужные PHP-файлы через браузер для выполнения тестов.

**Примечания:**
- Используйте эти скрипты с осторожностью и только в тестовой среде, чтобы избежать потенциальных проблем с производительностью на рабочем сервере.
- Убедитесь, что у вас есть соответствующие права для выполнения тестов и проверки настроек вашего сервера.
