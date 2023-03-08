FROM ubuntu:latest

RUN apt-get update
RUN apt-get -y install nginx

COPY . /var/www/html/

EXPOSE 80

CMD ["nginx","-g", "daemon off;"]