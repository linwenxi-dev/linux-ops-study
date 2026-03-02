# LNMP搭建步骤（阿里云Ubuntu 22.04）
## 1. 系统准备
apt update && apt upgrade -y 
apt install wget vim net-tools -y

## 2. 安装Nginx
apt install nginx -y
systemctl start nginx && systemctl enable nginx

## 3. 安装MySQL
apt install mysql-server -y
systemctl start mysql && systemctl enable mysql
# 修改root认证方式（解决PHP连接问题）
mysql -u root
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'Aa126520!';
FLUSH PRIVILEGES;
EXIT;

## 4. 安装PHP-FPM
apt install php8.1-fpm php8.1-mysql php8.1-mysqli -y
systemctl start php8.1-fpm && systemctl enable php8.1-fpm

## 5. 配置Nginx+PHP联动
# 替换Nginx默认配置（见nginx-default.conf）
nginx -t
nginx -s reload

## 6. 测试环境
# 访问http://服务器IP/test.php，验证PHP+MySQL联动

