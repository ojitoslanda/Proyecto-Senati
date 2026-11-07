# 🐘 Docker PHP Project Guide

Guía práctica y completa para la creación, ejecución y administración de contenedores Docker con **PHP**, incluyendo vinculación de volúmenes en Windows/Linux y recuperación de archivos del contenedor a tu máquina local.

Basado en la imagen oficial: [Docker Hub - PHP](https://hub.docker.com/_/php)

---

## 1. Construcción de Imágenes

Para compilar la imagen a partir del archivo `Dockerfile` ubicado en la carpeta actual:

```bash
docker build -t hello-php .
```

* `-t hello-php`: Asigna un nombre (tag) a la imagen generada.
* `.`: Indica el contexto de construcción (directorio actual).

---

### Ejecutar asignando un nombre personalizado al contenedor
```bash
docker run -p 4000:80 -d --name myserver hello-php:1.0
```

* `--name myserver`: Asigna un identificador amigable al contenedor en lugar de un ID o nombre aleatorio.

---

## 4. Montaje de Volúmenes (Bind Mounts)

El montaje vincula tu carpeta local `./src` con el directorio web `/var/www/html` del contenedor para reflejar cambios en tiempo real. La sintaxis varía según la terminal utilizada:

### 🔹 PowerShell (Windows)

> **Alternativa con la ruta nativa de PowerShell:**
> ```powershell
> docker run -p 5000:80 -d --name myserverLocalHost -v "$($PWD.Path)\src:/var/www/html" hello-php
> ```

### 🔹 Bash / Git Bash (Linux / macOS / Windows)

```bash
docker run -p 4000:80 -d --name myserver -v "$(pwd)/src:/var/www/html" hello-php:1.0
```

> **Nota para Git Bash en Windows:** Si Git Bash distorsiona las rutas Unix, añade doble barra:
> ```bash
> docker run -p 5000:80 -d -v "$(pwd)/src://var/www/html" hello-php
> ```

---

## 5. Recuperación de Archivos del Contenedor

Si eliminaste accidentalmente tu carpeta local `src` y necesitas extraer el código fuente que viene empaquetado originalmente dentro de la imagen:

### Paso 1: Crear la estructura de carpetas local
```powershell
mkdir C:\Users\GABRIEL\Desktop\php_docker
cd C:\Users\GABRIEL\Desktop\php_docker
mkdir src
```

### Paso 2: Crear un contenedor temporal (sin iniciarlo)
```powershell
docker create --name temp-php hello-php:1.0
```

### Paso 3: Copiar los archivos hacia la máquina local
```powershell
docker cp temp-php:/var/www/html/. ./src
```

### Paso 4: Eliminar el contenedor temporal
```powershell
docker rm temp-php
```

### Paso 5: Levantar el contenedor definitivo con el volumen vinculado
```powershell
docker run -p 4000:80 -d --name myserver -v "${PWD}/src:/var/www/html" hello-php:1.0
```

Accede a la aplicación desde tu navegador en: [http://localhost:4000](http://localhost:4000)

---

## 6. Comandos Frecuentes de Docker

| Comando | Acción |
| :--- | :--- |
| `docker ps` | Lista los contenedores que están en ejecución. |
| `docker ps -a` | Lista todos los contenedores (activos y detenidos). |
| `docker stop <nombre_o_id>` | Detiene un contenedor en ejecución. |
| `docker rm -f <nombre_o_id>` | Fuerza la detención y eliminación de un contenedor. |
| `docker logs <nombre_o_id>` | Muestra las salidas y logs del contenedor. |
| `docker rmi <nombre_imagen>` | Elimina una imagen Docker local. |
