ServerStatusBySMS - плагин, который контролирует состояние серверов и уведомляет о неистравностях по смс 
-------------

Данный плагин прекрасно работает на моём сервере https://site.hypego.ru/

Готов выслушать все ваши рекомендации и пожелания

RoadMap проекта
-------------
- [x] Запуск плагина на игровом движке PocketMine-MP
- [x] Отслеживание статуса серверов
- [x] Отправка смс сообщений в случае неисправности
- [x] Откат на старую версию api в Main.php строка 30 и 31 (выполнять на свой страх и риск)
- [ ] Настройка плагина через конфиг

Установка плагина
-------------
1. Создайте сервер на PocketMine-MP api 3
2. Установите плагин
3. Зарегистрируйтесь на https://sms.ru/ (до 5 сообщений бесплатно, но рекомендую пополнить баланс хотя бы на 50р)
4. Скопируйте api ключ https://sms.ru/?panel=my (см. внизу страницы) и отредактируйте в ServerChecker.php строку 54
6. В строке 56 введите ваш номер телефона
7. Самостоятельно меняйте количество проверок, чтобы отслеживать статус сервера строка 71-147
8. Готово. Запускайте сервер