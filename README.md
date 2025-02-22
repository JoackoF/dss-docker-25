# dss-docker-25
Repositorio para la Actividad 1 - DSS

## Configuración del Proyecto

### Prerrequisitos
- WSL
- Docker
- Docker Compose

### Pasos para ejecutar el proyecto

1. Clona el repositorio:

    git clone https://github.com/tu-usuario/dss-docker-25.git
   
    cd dss-docker-25


3. Construye y levanta los contenedores con Docker Compose:

    docker-compose up --build

4. Accede a la aplicación en tu navegador:

    http://localhost:8080

- La base de datos se inicializa con el nombre `auth_db` y la contraseña `password` para el usuario `root`.
- Asegúrate de tener los puertos `8080` y `80` disponibles en tu máquina local.
