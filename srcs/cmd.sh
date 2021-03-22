# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    cmd.sh                                             :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: nle-biha <nle-biha@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/03/20 02:01:51 by nle-biha          #+#    #+#              #
#    Updated: 2021/03/22 19:52:27 by nle-biha         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

if [ -z ${AUTOINDEX+x} ]
then
	AUTOINDEX=on
fi


if [ $AUTOINDEX == 'off' ] || [ $AUTOINDEX == '0' ]
then
	echo 'Autoindex off'
	rm /etc/nginx/sites-available/localhost
	mv /tmp/localhostoff /etc/nginx/sites-available/localhost
fi

chown -R $USER:$USER /var/www/*
chmod -R 755 /var/www/*

service mysql start

cd /var/www/localhost/
wget https://wordpress.org/latest.tar.gz
tar -xvzf latest.tar.gz
rm -rf latest.tar.gz
mv wp-config.php wordpress/
chown -R www-data:www-data /var/www/localhost/wordpress


wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
tar -zxvf phpMyAdmin-4.9.0.1-all-languages.tar.gz
rm -rf  phpMyAdmin-4.9.0.1-all-languages.tar.gz
mv phpMyAdmin-4.9.0.1-all-languages /var/www/localhost/phpMyAdmin
rm /var/www/localhost/phpMyAdmin/config.sample.inc.php
mv /var/www/localhost/config.inc.php /var/www/localhost/phpMyAdmin/




echo "CREATE DATABASE wpdb;" | mysql -u root
echo "GRANT ALL ON wpdb.* TO 'wpuser'@'localhost' IDENTIFIED BY 'wpdbpassword' WITH GRANT OPTION;" | mysql -u root
echo "FLUSH  PRIVILEGES;"| mysql -u root
echo "exit"| mysql -u root

service nginx start
service php7.3-fpm start

