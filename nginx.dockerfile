FROM nginx

MAINTAINER Ciprian Tepes

COPY ./html /usr/share/nginx/html
COPY ./conf /etc/nginx/nginx.conf

VOLUME ./html /usr/share/nginx/html

ENV NGINX_HOST=local.nginx
ENV NGINX_PORT=80


