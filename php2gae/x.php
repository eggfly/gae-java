<?php

session_start();//��ʼ��session������֮ǰ����Ҫ�����������κζ���
session_register("s_name");//ע���µ�session ����s_name
$s_name="������";//��s_name ��ֵ
Header("Location: y.php");//ת��y.php ҳ��ע�⣺�ڴ�֮�䲻�������������κζ���

?>