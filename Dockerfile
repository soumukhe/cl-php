FROM soumukhe/ubuntu-php
#RUN echo "root:cisco" |chpasswd

RUN apt update -y; \
    apt -y install php-ssh2; \
    apt-get install -y php-phpseclib-net-ssh2
     

COPY ./html /var/www/html
# CMD tail -f /dev/null
EXPOSE 80 22 443
