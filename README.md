# 📦 Laravel CRUD API de Productos

Este proyecto es una API RESTful desarrollada con Laravel para gestionar un conjunto de productos. Forma parte de una prueba técnica, y está completamente dockerizado para facilitar su ejecución en cualquier entorno.

## 🛠️ Tecnologías utilizadas

- PHP 8.1+
- Laravel Sail 12+
- MySQL
- Docker & Docker Compose
- Composer
- Postman (para pruebas)
- Eloquent ORM
- PSR-4 (con estructura Repository/Implementation)

## 🚀 Funcionalidades

- Crear, listar, actualizar y eliminar productos (`CRUD` completo)
- Validación de entradas (`name` requerido, `price` numérico y positivo)
- Semilla de productos con datos aleatorios (`ProductSeeder`)
- Arquitectura desacoplada: controlador → repositorio → implementación
- Respuestas JSON bien estructuradas
- Preparado para ser conectado a un frontend (pendiente)

## 📁 Estructura del proyecto

app/
├── Http/Controllers/Products # Controladores para cada acción del CRUD
├── Models # Modelo Product
├── Repositories # Interfaz ProductsRepository
├── Implementations # Lógica Eloquent con ProductsMysqlImplementation

## 🐳 Cómo ejecutar con Docker

## 🐳 Cómo ejecutar con Laravel Sail

```bash
git clone https://github.com/tu-usuario/nombre-del-repo.git
cd nombre-del-repo
cp .env.example .env
composer install
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate --seed