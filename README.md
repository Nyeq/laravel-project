# Laravel-project  
A personal portfolio — a web application built with Laravel.

## 📄 Overview  
This project is a personal portfolio website built using Laravel.  
It showcases my skills, education / experience, and works as a full-stack web application.  

## 🚀 Built With  
- **Laravel** — PHP framework for backend & templating.  
- **Blade templates** — for views (e.g. login, register, resume, home).  
- **PHP, HTML, CSS, JavaScript** — core web technologies.  
- (Add any other libraries / frameworks you used, e.g. Bootstrap / Tailwind / MySQL etc.)

## 🧩 Features / What’s Included  
- Authentication: register / login / logout.  
- After Logging in, (you need to register with the proper format first) 
- You will now see the Resume.
- A “Resume / About Me” page (or a general portfolio/home page).  
- Clean folder structure: resources/views, routes, controllers.  

## 🛠️ Getting Started / Local Setup  

### Prerequisites  
- PHP (version …)  
- Composer  
- (If you used a database) MySQL or other DB  

### Steps  
```bash
git clone https://github.com/Nyeq/laravel-project.git  
cd laravel-project  
composer install  
cp .env.example .env  
# (then update .env with your DB credentials or config)  
php artisan key:generate  
php artisan migrate   # if there are migrations  
php artisan serve  

/app           ← backend logic (controllers, models, etc)  
/resources/views  ← Blade view files (login.blade.php, register.blade.php, resume.blade.php, etc.)  
/routes/web.php ← defines routes for web pages  
/public        ← publicly accessible assets (CSS / JS / images)  