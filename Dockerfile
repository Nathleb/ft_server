# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: nle-biha <nle-biha@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/03/19 22:35:04 by nle-biha          #+#    #+#              #
#    Updated: 2021/03/22 20:18:03 by nle-biha         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

RUN apt-get update && apt-get install -y \
	mariadb-server \
	php-fpm php-mysql \
	nginx \
	wget \
	php-json php-mbstring 
	

RUN mkdir -p /home/srcs
RUN mkdir -p /var/www/localhost
RUN mkdir -p /etc/nginx/ssl


COPY ./srcs/localhostoff /tmp
COPY ./srcs/cmd.sh /home/srcs
COPY ./srcs/localhost /etc/nginx/sites-available/
COPY ./srcs/wp-config.php /var/www/localhost
COPY ./srcs/config.inc.php /var/www/localhost
RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -keyout /etc/nginx/ssl/localhost.key -out  /etc/nginx/ssl/localhost.pem -subj "/C=FR/ST=Paris/L=Paris/O=42/OU=lebibi/CN=localhost"
RUN  ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost
RUN rm -rf /etc/nginx/sites-enabled/default


CMD  bash ./home/srcs/cmd.sh && bash
