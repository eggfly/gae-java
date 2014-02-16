<?php

session_start();//初始化session，在这之前，不要向浏览器输出任何东西
session_register("s_name");//注册新的session 变量s_name
$s_name="孙寿龙";//给s_name 赋值
Header("Location: y.php");//转到y.php 页，注意：在此之间不能向浏览器输出任何东西

?>