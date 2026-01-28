# 🏥 صندوق وادي العجب الخيري (Wadi AlAjab Charity Fund)

Welcome to the Wadi AlAjab Charity Fund application. This system is designed to manage charity applications, subscribers, and automated reminders with a professional, secure, and user-friendly interface.

## 🌟 About the Project

Wadi AlAjab is a charitable initiative focused on supporting patients and those in need. The application serves as a comprehensive management system for:
- Tracking and processing charity **Applications**.
- Managing **Subscribers** and donors.
- Automated **Reminder Logs** for follow-ups and notifications.

The system is built with a "Professional Medical" design philosophy, utilizing a calming palette of Medical Blues and Emerald Greens to inspire trust, safety, and hope.

## 🚀 Key Features

- **Application Management**: centralized dashboard to review and process beneficiary applications.
- **Subscriber Database**: Maintain detailed records of subscribers and donors.
- **Automated Reminders**: System for tracking notifications and follow-ups.
- **Professional UI/UX**: Built with **Filament v4** and **Tailwind CSS v4** for a modern, responsive administrative interface.
- **Secure & Scalable**: Powered by **Laravel 12** and **PHP 8.2+**.

## 🛠️ Tech Stack

- **Framework**: [Laravel 12](https://laravel.com)
- **Admin Panel**: [Filament v4](https://filamentphp.com)
- **Styling**: [Tailwind CSS v4](https://tailwindcss.com)
- **Frontend Tooling**: [Vite](https://vitejs.dev)
- **Language**: PHP 8.2+

## ⚙️ Installation

To set up the project locally, follow these steps:

1.  **Clone the repository**
    ```bash
    git clone https://github.com/your-username/wadialajab.git
    cd wadialajab
    ```

2.  **Install Dependencies & Setup**
    We have a convenient setup script that handles composer installation, environment setup, key generation, migrations, and frontend building.
    ```bash
    composer run setup
    ```
    *Alternatively, you can run commands manually:*
    ```bash
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan migrate
    npm install
    npm run build
    ```

## 🖥️ Usage

To start the development server with all necessary services (Laravel, Queue, Vite, etc.):

```bash
composer run dev
```

This command uses `concurrently` to run:
- Laravel Development Server (`php artisan serve`)
- Queue Worker (`php artisan queue:listen`)
- Vite (`npm run dev`)
- Pail for logs (`php artisan pail`)

Access the admin panel at: `http://127.0.0.1:8000/admin` (or the URL provided in your terminal).

## 🎨 Brand Identity

The application follows a strict **Medical Professional** color scheme:
- **Primary**: Medical Blue (`blue-600`) - representing trust and professionalism.
- **Secondary**: Emerald Green (`emerald-500`) - representing health and hope.
- **Accent**: Cyan/Teal - for freshness and care.

## 🧪 Testing

To run the test suite:

```bash
composer run test
```

## 📄 License

This software is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
