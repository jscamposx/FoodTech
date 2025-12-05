# 🍽️🔥 FoodTech — Aplicación Web Completa para Restaurantes

<div align="center">

**Sistema profesional para la gestión de restaurantes**, construido con PHP, MySQL, JavaScript moderno y un entorno de desarrollo optimizado.
Incluye **área pública para clientes**, **panel administrativo**, **manejo de platillos**, **eventos**, **usuarios**, y utilidades avanzadas como procesamiento de imágenes y envío de correos.

</div>

---

## ✨ ¿Qué es Yola?

**Yola** es una aplicación web integral diseñada para cubrir las necesidades operativas de un restaurante: mostrar el menú, gestionar eventos, administrar usuarios, enviar correos automáticos y ofrecer una experiencia pública clara y moderna.

Su arquitectura está basada en **MVC nativo**, con una implementación personalizada de **Active Record**, lo que permite un código limpio, escalable y organizado.

---

# 🧪 Tecnologías Utilizadas

## 🔧 Backend

* **PHP** — Lenguaje principal de la aplicación.
* **MySQL** — Base de datos relacional.
* **MVC nativo** — Arquitectura modular y mantenible.
* **Active Record** — Implementación personalizada para interactuar con los modelos.
* **Composer** — Gestión de dependencias.
* **PHPMailer** — Envío de correos (confirmación y recuperación).
* **Intervention/Image** — Redimensionamiento y optimización de imágenes.
* **vlucas/phpdotenv** — Variables de entorno seguras.

## 🎨 Frontend

* **JavaScript (ES6+)**
* **SASS (SCSS)**
* **Gulp** — Compilación, minificación y optimización.
* **Node.js + npm** — Gestión de paquetes.

---

# 📂 Estructura del Proyecto

```txt
Yola/
├── classes/                # Clases auxiliares y helpers
├── controllers/            # Controladores MVC
├── includes/               # Configuración general y entorno
├── models/                 # Modelos + ActiveRecord
├── public/                 # Punto de entrada / assets
│   ├── build/              # Archivos compilados del frontend
│   └── img/                # Imágenes optimizadas
├── src/                    # Código fuente del frontend
│   ├── js/
│   └── scss/
├── sql/                    # Dump de base de datos
├── vendor/                 # Dependencias de Composer
├── views/                  # Plantillas organizadas por módulos
│   ├── admin/
│   ├── auth/
│   ├── paginas/
│   └── templates/
├── .htaccess
├── Router.php              # Enrutador principal
├── composer.json
├── gulpfile.js
└── package.json
```

---

# 🚀 Funcionalidades Principales

## 🌐 Área Pública

* Registro y autenticación de usuarios.
* Confirmación de cuenta vía email.
* Recuperación de contraseña con token seguro.
* Páginas informativas del restaurante (Home, Nosotros, Menú, etc.).
* API pública para mostrar platillos.

## 🔐 Panel Administrativo

* Dashboard con vista general.
* CRUD completo de **Platillos**.
* CRUD completo de **Eventos**.
* Gestión de **Usuarios registrados**.
* Módulo de **Consumos** (en desarrollo).

---

# ⚙️ Instalación y Configuración

## 1️⃣ Crear Base de Datos

Importa el archivo SQL:

```txt
sql/restaurante_js.sql
```

## 2️⃣ Variables de Entorno

Editar el archivo `.env` dentro de `includes/`:

```ini
DB_HOST=localhost
DB_USER=usuario
DB_PASS=password
DB_NAME=restaurante_js

EMAIL_HOST=smtp.mailtrap.io
EMAIL_PORT=2525
EMAIL_USER=usuario_mailtrap
EMAIL_PASS=password_mailtrap
```

## 3️⃣ Instalar dependencias del Backend

```bash
composer install
```

## 4️⃣ Instalar dependencias del Frontend

```bash
npm install
```

## 5️⃣ Compilar assets

```bash
npm run dev
```

## 6️⃣ Iniciar servidor local

```bash
php -S localhost:8000 -t public
```

---

# 🌍 Acceso a la Aplicación

Abrir en el navegador:

```txt
http://localhost:8000
```

---

# 📜 Licencia

Proyecto de uso personal y académico.
Ajustar según los requerimientos del entorno productivo.

---

<div align="center">

Hecho con ❤️ por **jscamposx**

</div>
