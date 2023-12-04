## به نام خدا
طریقه ی اجرای این کد\
\
برای اجرای این کد قبل از گذراندن مراحل زیر نیاز به نصب پی اچ پی , composer و یک دیتابیس دارید.\
برای نصب پی اچ پی از https://www.php.net/downloads.php, \
برای نصب composer  از https://getcomposer.org/doc/00-intro.md و \
برای نصب دیتابیس mysql از https://dev.mysql.com/downloads/installer/ استفاده کنید.\
\
\
۱- ابتدا پروژه را از https://github.com/mousakhani/test_laravel کلون کنید. \
۲- وارد رووت پروژه شوید. \
۳- دستور composer require را اجرا کنید. \
۴- یک کپی از فایل .env.example تهییه کرده و نام آن را به .env تغییر دهید. \
۵- اطلاعات مربوط به دیتابیس خود را در داخل فایل .env ای که درست کردید وارد کنید. \
۶-دستور php artisan migrate را در مسیری که فایل artisan قرار دارد اجرا کنید. \
۷- دستور php artisan db:seed برای ایجاد دیتای فیک اجرا کنید. \
۸- با اجرای دستور php artisan serve پروژه راه انداری میشود. \
۹- میتوانید با کلیک روی لینک http://localhost:8000/api/products دیتابی ایجاد شده را به صورت json مشاهده کنید. \
10- همچنین می توانید با مشخص کردن ای دی محصول مورد نظر در ادرس http://localhost:8000/api/products/2 به جای عدد ۲ فقط آن محصول را مشاهده کنید.
