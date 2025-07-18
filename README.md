# 🌿 Nature's Whispers

**Nature's Whispers** is a simple and elegant blog website built using Laravel and MySQL. It allows users to register, log in, explore existing blogs, create new blog posts, and edit or delete their own content.

## ✨ Features

- User Registration and Login
- Create, Edit, and Delete Blog Posts
- Browse and Read Blog Content
- Clean and Minimal UI

## 🛠️ Technologies Used

- **Laravel** (PHP Framework)
- **MySQL** (Database)
- **Blade** (Laravel Templating Engine)
- **Tailwind CSS** (optional if used)

## 📦 Installation

To get the project up and running locally, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/natures-whispers.git
   cd natures-whispers

2. Install PHP dependencies using Composer:
   ```bash
   composer install

3. Copy .env and generate application key:
   ```bash
   cp .env.example .env
   php artisan key:generate

4. Configure your .env file for the database:
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_db_name
   DB_USERNAME=your_db_user
   DB_PASSWORD=your_db_password

5. Run migrations:
   ```bash
   php artisan migrate
   
6. Serve the application:
   ```bash
   php artisan serve

7. Open in your browser:
   ```bash
   http://localhost:8000

## 🚀 Usage

- Register a new account or log in with existing credentials.
- Explore blog posts on the home page.
- Click Post a Blog to create your own.
- Edit or delete your posts from your account view.


## 📃 License
MIT License

Copyright (c) 2025 Golosinda

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

