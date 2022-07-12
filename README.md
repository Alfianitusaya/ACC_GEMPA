# ACC GEMPA
Aplikasi Cerdas Dan Cepat Dalam Menghadapi Gempa Bumi

# Our Project Features
- Pengetahuan seputar gempa bumi di Indonesia
- Pengetahuan tanda-tanda gempa bumi
- Pengetahuan cara penyelamatan diri ketika terjadi gempa bumi

# How to Install ACC GEMPA
Make sure you have `Xampp Control Panel` and `Composer` on the device you are using. If you don't have it, you can install it first.

- You can install Xampp here [install Xampp](https://www.apachefriends.org/download.html)
- You can install Composer here [install Composer](https://getcomposer.org/Composer-Setup.exe)

Then, please do the following steps

1. Open your terminal or Command Prompt and run `git clone https://github.com/Alfianitusaya/ACC_GEMPA.git`
2. Then run `cd folderproject`
3. After that run `composer update`
4. Go back to the folder and change the **_.env.example_** to **_.env_**
5. Open the Xampp Control Panel. After that make database with the name _laravel_
6. Then run `php artisan migrate`
7. After that run `php artisan db:seed`
8. Check the database if already filled with some data
9. Before run, please run  `php artisan storage:link`
10. Run `php artisan serve` and go to `http://127.0.0.1:8000/`
