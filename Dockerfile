# Используем официальный образ PHP с Apache
FROM php:8.2-apache

# Копируем все файлы проекта в контейнер
COPY . /var/www/html/

# Устанавливаем права (опционально)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Открываем порт
EXPOSE 80
