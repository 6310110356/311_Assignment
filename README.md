# 311_Assignment
สมาชิกกลุ่ม 
1. 6310110029 นายกันตพงศ์ สนองคุณวรกุล 
2. 6310110074 นายจุรินทร์ ไลยโฆษิต 
3. 6310110356 นายภากร จารุรักษา

งานที่ทำ:
สร้างเว็บไซต์สำหรับการจองตั๋วคอนเสิร์ต โดยใช้ PHP file เป็นทั้ง frontend และ backend ใช้ HTML และ Javascript ในการทำ frontend 
ใช้ PHP ในการเชื่อมต่อกับฐานข้อมูล และมีการใช้ css สำหรับตกแต่งเพิ่มเติม
เปิดใช้งานเว็บด้วย xampp ใช้โมดูล Apache สำหรับจำลองเว็บและใช้ MySQL เป็นฐานข้อมูลเก็บ username password และข้อมูลการจอง 
โดยดูข้อมูลที่เก็บไว้ได้ที่ http://localhost/phpmyadmin 
มี MapBox API ในการแสดงตำแหน่งของงานคอนเสิร์ต 

การใช้งานเว็บ:
เอาไฟล์ทั้งหมดไว้ใน folder ของ xampp/htdocs  
จากนั้นเปิดใช้งานหน้าเว็บของ http://localhost/login.php จะขึ้นหน้า login ซึ่งเราสามารถใส่ username และ password 
ที่เราจะใช้แล้วกด Sign up ( database จะเก็บข้อมูล username และ password ) จากนั้นกด login ด้วย username และ password ที่ตั้งไว้เมื่อสักครู่จเข้าสู่หน้าของ tickets.php
![image](https://user-images.githubusercontent.com/90896943/226114060-6d2b83b0-3169-4ff3-a7c3-3004276015e0.png)
![Username Password](https://user-images.githubusercontent.com/90896943/226114019-e15f06e8-c01d-4933-8c15-838732a4e952.jpg)
ในหน้าของ ticket  จะมีการแสดงตั๋วคอนเสิร์ตต่างๆ สามารถกด Grab a ticket จะเข้าสู่หน้าของ booking 
สามารถใส่ข้อมูล Name Email  เลือกคอนเสิร์ตที่จะจอง และ จำนวนตั๋วที่จะจอง แล้วกด Book Tickets ก็จะทำการส่งข้อมูลการจองเสร็จสิ้น
( ในส่วนนี้ จะมีการส่งข้อมูลการจองไปที่ MySQL database )
![image](https://user-images.githubusercontent.com/90896943/226114124-5ecb8615-e690-4483-a777-b888aa634b95.png)
![image](https://user-images.githubusercontent.com/90896943/226114144-0a520790-49f1-4ae0-abbe-deb154784287.png)
ในส่วนของข้อมูล Database สามารถกด Import ในเว็บของ PHPMyadmin โดยใช้ไฟล์ MySQL database.sql ที่อยู่ใน github 
