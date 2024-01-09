# Angular App

Angular App to convert Arabic date to Roman date for Sodimas.

## Prerequisites

Before you begin, ensure you have the following installed:

- [Docker](https://www.docker.com/)

## Building and Running with Docker

### Build Docker Image

To build a Docker image for the Angular app, run the following command in the project directory:

```bash
docker build -t date-formater-webcli .
```

### Run Docker Container

Once the Docker image is built, you can run a Docker container with the following command:

```bash
docker run -p 4200:4200 date-formater-webcli
```

This command maps port 4200 on your host machine to port 4200 inside the Docker container.

### Access the App

Open your web browser and navigate to [http://localhost:4200/](http://localhost:4200/) to access the Angular app running inside the Docker container.
