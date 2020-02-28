FROM alpine:3.10

LABEL maintainer="uptimizt@gmail.com"

RUN apk add --update --no-cache \
    bash \
    coreutils \
    nodejs \
    npm \
    make \
    curl

RUN npm install redoc --save

WORKDIR /var/www/app

#EXPOSE 8000

CMD ["ping", "google.com"]
#CMD ['npm']
#CMD [ "node", "server.js" ]

#CMD redoc-cli