- Tạo .env
- composer install
- php artisan key:generate
- npm install
- php artisan serve
- php artisan migrate:fresh --seed 
- php artisan serve
- npm run watch
- composer require firebase/php-jwt)(thư viện mã hóa)
--------------------------------------------------

- Up lên heroku
 + Đầu tiên login vô heroku bằng cách: ctrl + chuột phải chọn git bash và nhập "heroku login" -> baasm phím bất kỳ để login(login xong để nguyên cửa sổ git bash đó)
 + Mở thêm 1 cửa sổ git bash và nhập: 
      + $git add.
      + $git commit -m "cmt"
      + $git push heroku master

- Đây là cách để push lên heroku, nếu đã push lên heroku mà muốn push lên git nữa thì bấm:
      + $git push origin master 

--------------------------------------------------
- Chạy lại dữ liệu trên serve heroku (sau khi push lên thì tiếp tục bấm)
      + $heroku run bash
      nhập: ls
      nhập: exit
      + $heroku run php artisan migrate:fresh --seed