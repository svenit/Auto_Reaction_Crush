## Auto Reaction Crush PHP v1
### Hướng dẫn
**+ Sửa Token,ID Crush tại dòng 5,6**
```
   define('ACCESS_TOKEN','Nhập Token của bạn vào đây');
   define('CRUSH_USER_ID','Nhập User ID của Crush');
```
**+ Upload code lên Host**

- Lưu ý : Phải ChMod(777) cho file nha, nếu bạn muốn chạy Cronjob thì có thể xóa dòng
```
 exec("php curl.php"); // Ở đây mình đặt tên file là curl.php
```
**Coded by Junior**
