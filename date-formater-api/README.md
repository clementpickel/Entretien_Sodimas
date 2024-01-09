# Symfony 8.1 Dockerized Application

This repository contains a Symfony 8.1 application Dockerized for easy setup and deployment.

## Prerequisites

Make sure you have Docker installed on your machine.

- [Docker](https://www.docker.com/get-started)

## Getting Started

1. Clone the repository:

```bash
git clone https://github.com/clementpickel/Entretien_Sodimas
cd date-formater-api
```

Build the Docker image:
```bash
docker build -t date-formater-api .
```
Run the Docker container:
```bash
docker run -p 8000:80 date-formater-api
```
Access the Symfony application in your web browser:
http://localhost:8000