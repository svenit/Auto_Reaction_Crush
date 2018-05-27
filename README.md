### Hướng dẫn sử dụng Auto Reaction Crush
+ Sửa Access Token tại dòng thứ **8** ( Lưu ý : Access Token phải full quyền )

```php
 define('ACCESS_TOKEN','Nhập Access Token vào đây');
 ```
 + Sửa Crush ID tại dòng thứ **9**

```php
 define('CRUSH_USER_ID','Nhập User ID của Crush');
 ```
 
 + Sửa Nội dung Comment tại dòng thứ **18**
 
```php
 $message = "Xin chào $crush_name <3 ";
```
 
 **Nếu bạn chỉ muốn Auto Thả Tim vào bài viết của Crush thì xóa dòng 12 và sửa dòng 13 như dưới đây**

```php
  $rand_reaction = 'LOVE'; 
```

 **Sau khi chỉnh sửa xong upload code lên Hosting**
 + Rồi chạy Cronjob cho file
 


### Contact me

```php
 $facebook = "https://facebook.com/100012668051362";
 $instagram = "https://www.instagram.com/sho_ox/";
 $email = "lequangvy812@gmail.com";
 $github = "https://github.com/svenjunior";
 $gitlab = "https://gitlab.com/svenjunior";
 $website = "";

```
**Coded by Junior . Auto Reaction Crush Version 2**
 
