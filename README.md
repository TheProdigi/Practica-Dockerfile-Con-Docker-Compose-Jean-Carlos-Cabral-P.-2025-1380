# Practica 7: Practica Web App con Dockerfile y Docker Compose

## Descripción
Aplicación web sencilla desarrollada en PHP que muestra un mensaje de Hola Mundo y comprueba la conexión con una base de datos MySQL.

## Estructura
- src/index.php: código fuente de la aplicación.
- Dockerfile: configuración del servidor PHP y Apache.
- docker-compose.yml: configuración de los servicios.

## Requisitos
- Docker Desktop instalado y en ejecución.

## Ejecución
1. Abrir una terminal en la carpeta del proyecto.
2. Ejecutar:

   docker compose up -d --build

3. Abrir en el navegador:

   http://localhost:8080

## Autor

Jean Carlos Cabal P. 2025-1380