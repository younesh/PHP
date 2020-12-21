
php artisan migrate
php artisan migrate:rollback
php artisan make:migration posts_table
php artisan make:migration posts_table --create=posts
php artisan make:migration create_posts_table

php artisan make:migration add_slug_and_active --table=posts
php artisan make:migration add_slug_and_active_to_posts_table

php artisan make:model Post

  // pour