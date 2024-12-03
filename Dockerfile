FROM wordpress:php8.3-apache
MAINTAINER stk <przemo@pstudiok.net.pl>

RUN apt update
RUN apt install vim --yes
RUN apt install mc --yes

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x wp-cli.phar \
    && mv wp-cli.phar /usr/local/bin/wp

#RUN apt install --yes apache2
#RUN apt install --yes apache2-utils
#RUN apt clean
#EXPOSE 80
#CMD ["apache2ctl", "-D", "FOREGROUND"]
#
#ENV APACHE_RUN_USER www-data
#ENV APACHE_RUN_GROUP www-data
#ENV APACHE_LOG_DIR /var/log/apache2
#ENV APACHE_LOCK_DIR /var/lock/apache2
#ENV APACHE_PID_FILE /var/run/apache2.pid
#ENV APACHE_RUN_DIR /var/run

RUN echo 'export PS1="[\$ENV_VAR]\e[41m\e[37m\u\e[m \w # "' >> /root/.bashrc
#ENTRYPOINT apache2ctl -D FOREGROUND

#https://host-world.com/how-to-install-and-start-using-mariadb-on-ubuntu-20.04-step-by-step-guide
