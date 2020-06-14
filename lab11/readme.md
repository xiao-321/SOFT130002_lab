### cookie和session的功能

1、cookie

cookie是保存在客户机的小文本文件，当访问有些网站时，cookie可以帮助我们实现纪录用户个人信息的功能。

2、session

session是基于cookie的。session第一次被启用时，会有一个UID被存储于本地的cookie中，或者通过URL来传导。和cookie一样用于存储有关用户的信息或者更改用户绘画的设置

### cookie和session的不同

1、cookie保存在客户机，session保存在服务器

2、session比cookie更加安全，cookie存在恶意cookie会攻击客户机

3、session保存在服务器上，若访问的用户太多，则会导致服务器的性能降低，cookie则不会

4、cookie的大小限制小于4k，session没有限制

5、session和cookie之间通过$_COOKIE['PHPSESSID']联系，通过这个可以知道session的id