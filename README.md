# 🏛️ Sistema de Gestión de Proyectos - Ministerio de Hacienda

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel"/>
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP"/>
  <img src="https://img.shields.io/badge/MySQL-8.0+-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL"/>
  <img src="https://img.shields.io/badge/TailwindCSS-3.x-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white" alt="Tailwind"/>
</p>

<p align="center">
  <strong>Sistema web profesional para la gestión y control de proyectos gubernamentales</strong>
</p>

<p align="center">
  Desarrollado por <a href="https://github.com/fren43051">Nelson Enrique Fabián</a>
</p>

---

## 📋 Descripción

Sistema de gestión de proyectos desarrollado específicamente para el **Ministerio de Hacienda de El Salvador**. Permite el registro, seguimiento y control de proyectos gubernamentales con sus respectivos presupuestos y fuentes de financiamiento.

### ✨ Características Principales

- 🏗️ **Gestión Completa de Proyectos**: CRUD completo con validaciones
- 💰 **Control Presupuestario**: Seguimiento de montos planificados, patrocinados y fondos propios
- 📊 **Reportes PDF**: Generación de informes profesionales en formato horizontal
- 🎨 **Diseño Moderno**: Interfaz profesional con Tailwind CSS y gradientes elegantes
- 📱 **Responsive Design**: Adaptable a dispositivos móviles y escritorio
- 🔍 **Paginación Inteligente**: Navegación eficiente entre registros
- ⚡ **Validación en Tiempo Real**: Formularios con feedback inmediato

---

## 🛠️ Tecnologías Utilizadas

| Tecnología | Versión | Propósito |
|------------|---------|-----------|
| **Laravel** | 11.x | Framework PHP principal |
| **PHP** | 8.2+ | Lenguaje de programación |
| **MySQL** | 8.0+ | Base de datos |
| **TailwindCSS** | 3.x | Framework CSS |
| **DomPDF** | - | Generación de PDF |
| **Vite** | 5.x | Build tool y asset bundling |

---

## 🚀 Instalación

### Prerrequisitos

- PHP 8.2 o superior
- Composer
- Node.js 18+ y npm
- MySQL 8.0+
- Git

### Pasos de Instalación

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/fren43051/prototipo-laravel.git
   cd prototipo-laravel
   ```

2. **Instalar dependencias de PHP**
   ```bash
   composer install
   ```

3. **Instalar dependencias de Node.js**
   ```bash
   npm install
   ```

4. **Configurar variables de entorno**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configurar base de datos en `.env`**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=proyectos_db
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```

6. **Ejecutar migraciones**
   ```bash
   php artisan migrate
   ```

7. **Compilar assets**
   ```bash
   # Para desarrollo
   npm run dev
   
   # Para producción
   npm run build
   ```

8. **Iniciar el servidor**
   ```bash
   php artisan serve
   ```

La aplicación estará disponible en `http://localhost:8000`

---

## 📖 Uso del Sistema

### Dashboard Principal
- Visualización de todos los proyectos registrados
- Acceso rápido a acciones principales
- Navegación intuitiva con paginación

### Gestión de Proyectos

#### ➕ Crear Proyecto
1. Click en "Nuevo Proyecto"
2. Completar formulario:
   - **Nombre del Proyecto**: Título descriptivo
   - **Fuente de Fondos**: Origen del financiamiento
   - **Monto Planificado**: Presupuesto inicial ($)
   - **Monto Patrocinado**: Financiamiento externo ($)
   - **Fondos Propios**: Aporte institucional ($)
3. Guardar proyecto

#### ✏️ Editar Proyecto
- Click en "Editar" en la fila del proyecto
- Modificar campos necesarios
- Actualizar información

#### 👁️ Ver Detalles
- Click en "Ver" para información completa
- Visualización de totales calculados
- Fechas de creación y modificación

#### 🗑️ Eliminar Proyecto
- Click en "Eliminar" con confirmación
- Eliminación segura con validación

### 📄 Reportes PDF
- Click en "Descargar PDF"
- Genera informe completo en formato horizontal
- Incluye todos los proyectos con totales
- Diseño profesional para presentaciones oficiales

---

## 🗂️ Estructura del Proyecto

```
prototipo-laravel/
├── app/
│   ├── Http/Controllers/
│   │   └── ProyectoController.php    # Controlador principal
│   └── Models/
│       └── Proyecto.php              # Modelo de datos
├── database/
│   └── migrations/
│       └── create_proyectos_table.php # Estructura BD
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php         # Layout principal
│       └── proyectos/
│           ├── index.blade.php       # Lista de proyectos
│           ├── create.blade.php      # Formulario creación
│           ├── edit.blade.php        # Formulario edición
│           ├── show.blade.php        # Vista detalle
│           └── pdf.blade.php         # Template PDF
└── routes/
    └── web.php                       # Rutas de la aplicación
```

---

## 🎨 Características de Diseño

### Paleta de Colores Profesional
- **Azul/Índigo**: Acciones principales y navegación
- **Verde/Esmeralda**: Confirmaciones y creación
- **Ámbar/Naranja**: Edición y modificaciones
- **Rojo/Rosa**: Eliminación y errores

### Elementos Visuales
- ✨ Gradientes suaves y profesionales
- 🔄 Animaciones y transiciones fluidas
- 📐 Diseño responsive con Tailwind CSS
- 🎯 Iconografía consistente con Heroicons
- 💫 Efectos hover y estados interactivos

---

## 🔧 Comandos Útiles

```bash
# Limpiar caché
php artisan optimize:clear

# Ejecutar migraciones
php artisan migrate

# Revertir migraciones
php artisan migrate:rollback

# Generar controlador
php artisan make:controller NombreController

# Compilar assets en desarrollo
npm run dev

# Compilar assets para producción
npm run build
```

---

## 📊 Base de Datos

### Tabla: `proyectos`

| Campo | Tipo | Descripción |
|-------|------|-------------|
| `id` | BIGINT | Identificador único |
| `NombreProyecto` | VARCHAR(255) | Nombre del proyecto |
| `fuenteFondos` | VARCHAR(255) | Origen del financiamiento |
| `MontoPlanificado` | DECIMAL(10,2) | Presupuesto planificado |
| `MontoPatrocinado` | DECIMAL(10,2) | Monto de patrocinadores |
| `MontoFondosPropios` | DECIMAL(10,2) | Fondos institucionales |
| `created_at` | TIMESTAMP | Fecha de creación |
| `updated_at` | TIMESTAMP | Fecha de modificación |

---

## 🚦 Estado del Proyecto

- ✅ **Completado**: Sistema CRUD completo
- ✅ **Completado**: Generación de PDF
- ✅ **Completado**: Diseño responsive
- ✅ **Completado**: Validaciones de formularios
- ✅ **Completado**: Paginación
- 🔄 **En progreso**: Funcionalidades adicionales

---

## 🤝 Contribuciones

Este proyecto fue desarrollado como prototipo académico para el Ministerio de Hacienda de El Salvador.

### Desarrollador
**Nelson Enrique Fabián**
- GitHub: [@fren43051](https://github.com/fren43051)
- Proyecto: Sistema de Gestión de Proyectos Gubernamentales

---

## 📄 Licencia

Este proyecto es de carácter académico y está destinado para uso educativo y demostrativo en el contexto del Ministerio de Hacienda de El Salvador.

---

## 🆘 Soporte

Para reportar problemas o solicitar funcionalidades:

1. Abrir un [Issue](https://github.com/fren43051/prototipo-laravel/issues)
2. Describir el problema detalladamente
3. Incluir pasos para reproducir el error
4. Especificar entorno de desarrollo

---

<p align="center">
  <strong>Desarrollado para fines educativos para el Ministerio de Hacienda de El Salvador</strong>
</p>

<p align="center">
  <sub>Sistema de Gestión de Proyectos v1.0 - 2024</sub>
</p>
