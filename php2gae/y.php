<?

hello;
session_start();//��ʼ��session������ǰ�ͻ�session �Ѵ��ڣ����ȡ���еĸ����������Ա�����ʹ��
echo "��ǰ�û��ǣ�".$s_name;//��ǰ�û��ǣ�������
unset($s_name);//���ٸ�Ԫ����ռ�ڴ棨���ڴ���ɾ����Ԫ�أ�
session_destroy();//ɾ��session �ļ�
echo "��ǰ�û��ǣ�".$s_name;//��ǰ�û��ǣ����գ�
?>
<html>
<body>
aaa</body>
</html>