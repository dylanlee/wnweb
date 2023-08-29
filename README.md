# wnweb

Welcome to the repository for the [water node website](waternode.ciroh.org)! The water node website is a collaborative effort between CIROH, NOAA CoastWatch, and the National Water Center. The purpose of the website will be to intake and disseminate remote sensing data relevant to hydrological modeling, prediction, and analysis. The data will come from a variety of sources from within NOAA, CIROH, as well as potentially other agencies and companies. This data will be disseminated to CIROH researchers, Water Center operations, and the general public.

The other main purpose of the website is to serve as an educational platform and facilitator for the use of satellite imagery so that stakeholders that aren't experts in the processing and acquisition of remote sensing data can still use satellite imagery in their research efforts.

## Site Structure

The website is made of two major components: stac-browser and main.

### stac-browser

This is the component that handles the data for the Water Node.

### main

This is the main protion of the website. This is where most users will be able to access the Water Node data and the tutorials and documentation on how to use it.

# Development Setup

The development environment is set up using [Docker](https://www.docker.com) and [docker-grav](https://github.com/getgrav/docker-grav). Git is used for version control and to grab the dockerfile needed to build the docker-grav image.

1. Install Docker. [Docker Desktop](https://www.docker.com/products/docker-desktop/) makes it easier to manage Docker images and Docker Containers and is recommended, but not required.
2. Install [Git](https://git-scm.com). [GitHub Desktop](https://desktop.github.com) is also recommended, but not required. It makes managing Git repos a little easier.
3. Clone the docker-grav repo into a folder on your computer.
4. Navigate to the folder with the docker-grav dockerfile.
5. Run the following command.

```
docker build -t grav:latest .
```

6. Clone the wnweb repo into a folder on your computer.
7. Navigate to the folder that contains the wnweb repo.
8. Run the following command. You can replace the first part of the `-p` argument with whatever port number you wish.

```
docker run -d -p [localhost port]:80 --rm --name waternodesite -v ${pwd}/main:/var/www/html grav:latest
```

9. Verify that everything is running by going to `localhost:[localhost port]` You should see the Water Prediction Node website.
