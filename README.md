# Entretien Sodimas

This repository contains a Docker Compose setup for running a Symfony API and an Angular application together.

## Prerequisites

Make sure you have Docker and Docker Compose installed on your system.

- [Docker Installation Guide](https://docs.docker.com/get-docker/)
- [Docker Compose Installation Guide](https://docs.docker.com/compose/install/)

## Getting Started

1. Clone this repository:

    ```bash
    git clone https://github.com/clementpickel/Entretien_Sodimas
    cd Entretien_Sodimas
    ```

2. Build the Docker images:

    ```bash
    docker-compose build
    ```

3. Run the Docker containers:

    ```bash
    docker-compose up -d
    ```

    The `-d` flag runs the services in the background.

4. Open your browser and navigate to:

   - Symfony API: [http://localhost:8000](http://localhost:8000)
   - Angular App: [http://localhost:4200](http://localhost:4200)

5. To stop the services:

    ```bash
    docker-compose down
    ```

## Notes

- The Symfony API runs on port 8000.
- The Angular App runs on port 4200.
- The `-d` option in `docker-compose up -d` detaches the services from the terminal.
