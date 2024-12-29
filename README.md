  # QWords Landing Page Redesign (finished)

  ## Overview
  This project involves redesigning the landing page of QWords.com as part of the Virtual Internship Experience (VIX) program. The redesign focuses on creating an attractive and modern interface while maintaining the core functionality and services offered by QWords.

  ## Technology Stack
  - **Backend Framework:** Laravel 9.x
  - **CSS Framework:** Tailwind CSS
  - **JavaScript:** Axios, Vanilla JS
  - **Database:** MySQL
  - **Version Control:** GitHub
  - **Package Manager:** Composer, NPM

  ## Key Features
  - Responsive Design for all device sizes
  - Interactive UI Elements
  - Optimized Performance
  - Modern and Clean Interface
  - Dynamic Content Management
  - SEO-Friendly Structure

  ## Prerequisites
  - PHP >= 8.0
  - Composer
  - Node.js & NPM
  - MySQL/MariaDB
  - Git

  ## Installation Steps
  1. **Clone the Repository:**
     ```bash
     git clone [repository-url]
     cd [project-directory]
     ```

  2. **Install PHP Dependencies:**
     ```bash
     composer install
     ```

  3. **Install Node Dependencies:**
     ```bash
     npm install
     ```

  4. **Environment Setup:**
     ```bash
     cp .env.example .env
     # Configure your database and other environment settings in .env file
     ```

  5. **Generate Application Key:**
     ```bash
     php artisan key:generate
     ```

  6. **Run Database Migrations and Seeders:**
     ```bash
     php artisan migrate
     php artisan db:seed
     ```

  7. **Compile Assets:**
     ```bash
     npm run dev
     # For production: npm run build
     ```

  8. **Start the Development Server:**
     ```bash
     php artisan serve
     ```

  ## Project Structure
  - `/resources/views` - Blade templates and components
  - `/public` - Static assets (images, CSS, JS)
  - `/app/Models` - Database models
  - `/app/Http/Controllers` - Application controllers
  - `/database/seeders` - Database seeders for initial data

  ## Development Guidelines
  - Follow PSR-12 coding standards
  - Use meaningful commit messages
  - Document any major changes
  - Test thoroughly before committing

  ## License
  This project is licensed under the [MIT License](LICENSE).

  ## Acknowledgments
  - QWords.com for the opportunity
  - Rakamin Academy for the VIX program guidance
  - All contributors and maintainers
