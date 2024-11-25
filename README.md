# Proyecto Admin Usuarios - Laravel con Tailwind CSS

## Descripción del Proyecto
Este proyecto es una aplicación de Laravel que incluye funcionalidades de inicio de sesión, registro y gestión de usuarios, además de verificaciones de estado de usuario. Utiliza Tailwind CSS para la estilización y Vite para la compilación de activos.

## ✨ Funcionalidades Implementadas

Este proyecto incluye las siguientes funcionalidades y **2 Plus (Sistema de Autenticación y Soporte Multilenguaje)**

1. **Login y Registro de Usuarios**
   - Registro de usuarios con campos opcionales de apellido y teléfono.
   - Inicio de sesión para usuarios registrados.
   - Verificación de estado: los usuarios inactivos no pueden iniciar sesión.
   - Recuperación de contraseña.
   - Opción para recordar sesión.

2. **Gestión de Usuarios**
   - Listado de todos los usuarios registrados.
   - Creación de nuevos usuarios por administradores.
   - Edición de información de usuarios existentes.
   - Eliminación de usuarios por administradores.

3. **Control de Acceso**
   - Verificación de roles para control de acceso a diferentes funcionalidades.

4. **Notificaciones y Mensajes**
   - Notificación de cuenta inactiva durante el intento de inicio de sesión.

5. **Integración con Tailwind CSS**
   - Utilización de Tailwind CSS para estilizar la aplicación.

6. **Configuración de Vite**
   - Configuración de Vite para la compilación de archivos CSS y JS.

## Requisitos Previos
- PHP >= 8.2
- Composer
- Node.js y npm
- MySQL (o cualquier otro sistema de base de datos compatible con Laravel)

## Instalación

### Paso 1: Clonar el Repositorio

## 🚀 Clonar el Repositorio

Para clonar este repositorio en tu máquina local, sigue estos pasos:

1. **Clona el repositorio usando Git:**

    ```bash
    git clone https://github.com/jrgeorge89/LoginAuth.git
    ```

2. **Navega a la carpeta del proyecto:**

    ```bash
    cd tu-repositorio
    ```

## 🔧 Instalación y Ejecución

Para instalar las dependencias y ejecutar el proyecto, sigue estos pasos:

1. **Instala las dependencias del proyecto:**

    Asegúrate de tener [Composer](https://getcomposer.org/) y [Node.js](https://nodejs.org/) instalados.

    ```bash
    composer install
    ```

2. **Configura el archivo de entorno:**

    Copia el archivo `.env.example` a `.env` y configura las variables de entorno según tu entorno local.

    ```bash
    cp .env.example .env
    ```
    
    Nombre la BD: **login**

3. **Genera la clave de aplicación de Laravel:**

    ```bash
    php artisan key:generate
    ```

4. **Ejecuta las migraciones y los seeder si es necesario:**

    ```bash
    php artisan migrate
    php artisan db:seed --class=UserSeeder
    ```

5. **Instala las dependencias de frontend y compila los activos:**

    ```bash
    npm install
    npm run dev
    ```

6. **Inicia el servidor de desarrollo:**

    ```bash
    php artisan serve
    ```

   El proyecto estará disponible en [http://127.0.0.1:8000](http://127.0.0.1:8000).

7. **Si observas que hacen falta algunos estilos en el formulario de Productos ejecuta: (Opc)**

    ```bash
    npm run watch
    ```

8. **Una vez inicializado el proyecto**
    Regístrate para ingresar al Dashboard y dirígete a la pestaña Usuarios donde podrás realizar el CRUD disponible.
   
    ```bash
    Usuario: admin@example.com
    Clave: 12345678
    ```

**¡Listo! Ahora estás listo para empezar la revisión. ¡Gracias!** 😊
