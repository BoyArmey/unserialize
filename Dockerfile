FROM php:5.6-apache

# 复制项目文件到容器
COPY . /var/www/html/

# 设置工作目录
WORKDIR /var/www/html

# 访问端口
EXPOSE 80