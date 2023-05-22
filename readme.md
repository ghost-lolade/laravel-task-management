# Laravel Task Management

This is a simple task management web application built with Laravel. It allows you to create, edit, delete, and reorder tasks with drag and drop functionality. It also includes project functionality to filter tasks by project.

## Prerequisites

Make sure you have the following software installed on your system:

* PHP (>= 7.4)
* Composer
* MySQL (or any other supported database)
* Node.js (for compiling frontend assets)

## Getting Started

1. Clone the repository to your local machine:
   <pre><div class="bg-black rounded-md mb-4"><div class="flex items-center relative text-gray-200 bg-gray-800 px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-bash">git clone https://github.com/ghost-lolade/laravel-task-management.git
   </code></div></div></pre>
2. Navigate to the project directory:
   <pre><div class="bg-black rounded-md mb-4"><div class="flex items-center relative text-gray-200 bg-gray-800 px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-bash">cd laravel-task-management
   </code></div></div></pre>
3. Install PHP dependencies:
   <pre><div class="bg-black rounded-md mb-4"><div class="flex items-center relative text-gray-200 bg-gray-800 px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-bash">composer install
   </code></div></div></pre>
4. Create a copy of the `.env.example` file and rename it to `.env`. Update the database configuration values in the `.env` file to match your database setup.
5. Generate the application key:
   <pre><div class="bg-black rounded-md mb-4"><div class="flex items-center relative text-gray-200 bg-gray-800 px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-bash">php artisan key:generate
   </code></div></div></pre>
6. Run the database migrations to create the necessary tables:
   <pre><div class="bg-black rounded-md mb-4"><div class="flex items-center relative text-gray-200 bg-gray-800 px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-bash">php artisan migrate
   </code></div></div></pre>
7. (Optional) Seed the database with sample data:
   <pre><div class="bg-black rounded-md mb-4"><div class="flex items-center relative text-gray-200 bg-gray-800 px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-bash">php artisan db:seed
   </code></div></div></pre>
8. Install JavaScript dependencies:
   <pre><div class="bg-black rounded-md mb-4"><div class="flex items-center relative text-gray-200 bg-gray-800 px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-bash">npm install
   </code></div></div></pre>
9. Compile the frontend assets:
   <pre><div class="bg-black rounded-md mb-4"><div class="flex items-center relative text-gray-200 bg-gray-800 px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-bash">npm run dev
   </code></div></div></pre>
10. Start the development server:
    <pre><div class="bg-black rounded-md mb-4"><div class="flex items-center relative text-gray-200 bg-gray-800 px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span></div><div class="p-4 overflow-y-auto"><code class="!whitespace-pre hljs language-bash">php artisan serve
    </code></div></div></pre>
11. Visit `http://localhost:8000` in your browser to access the application.

## Additional Configuration

* If you want to use a different database driver or make any other configuration changes, update the corresponding values in the `.env` file.

## License

This project is licensed under the [MIT License](https://chat.openai.com/c/LICENSE).

Feel free to customize the README file as per your project's specific requirements.
