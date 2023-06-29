# build stage
FROM node:lts-buster-slim as build-stage

# install git
RUN apt-get update \
    && DEBIAN_FRONTEND=noninteractive apt-get install -y git

COPY stac-browser /stac-browser

# Set the working directory 
WORKDIR /stac-browser

# install
RUN npm install

# start application
RUN npm run build -- --catalogUrl=https://54.89.201.212

# production stage, self describing
FROM nginx:stable-alpine as production-stage

COPY --from=build-stage /stac-browser/dist /usr/share/nginx/html
EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
