<?

hello;
session_start();//初始化session，若当前客户session 已存在，则读取其中的各个变量，以便下文使用
echo "当前用户是：".$s_name;//当前用户是：孙寿龙
unset($s_name);//销毁该元素所占内存（从内存中删除该元素）
session_destroy();//删除session 文件
echo "当前用户是：".$s_name;//当前用户是：（空）
?>
<html>
<body>
aaa</body>
</html>