<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<center>
<table><tr><td>

<h2>���</h2>


<ul>
<li> ��Ϻ�
<table bgcolor="#aaaaaa" cellpadding="1" cellspacing="0"><tr><td>
<table cellspacing="1" cellpadding="2">
<tr>
<td bgcolor="#ffffcc"></td>
<th bgcolor="#ffffcc" colspan="4">KCC2006 ������Ͻ�</th>
<th bgcolor="#ffffcc" colspan="4">KCC2006 ���� �̵�Ͻ�</th>
</tr>

<?php

function tables($hcolor, $head, $color, $arr) {
  echo "<tr>";
  echo "<td bgcolor=\"$hcolor\">";
  echo $head;
  echo "</td>";
  foreach($arr as $t) {
    echo "<td bgcolor=\"$color\" align=\"center\">";
    echo $t;
    echo "</td>";
  }
  echo "</tr>";
}

$x = array("�л�ȸ��", "&nbsp; ��ȸ�� &nbsp; ", "&nbsp; ��ȸ�� &nbsp; ", "��ȸ��(�л�)");
$x = array_merge($x, $x);
tables("#dddddd", "ȸ������", "#dddddd", $x);
tables("#dddddd", "�������", "white",
  array("30,000", "50,000", "60,000", "35,000",
	"40,000", "80,000", "90,000", "45,000"));
tables("#dddddd", "������", "white",
  array("40,000", "60,000", "70,000", "45,000",
	"50,000", "90,000", "100,000", "55,000"));

?>
</table></td></tr></table>

<li> ��Ϲ��
<ul>
<li> �������: <a href="http://www.kiss.or.kr/conference/regist/default.asp" target="_new">KCC2006 ������� ����Ʈ</a>
<li> ������: ������Ʈ Ÿ���ܵ�
</ul>
</ul>

<h2>���ô� ��</h2>
<center><a href="http://www.yongpyong.co.kr/customer/traffic02.asp" target="_new">
<img border="0" src="map_img.gif"></a></center>

</td></tr></table>
