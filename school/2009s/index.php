<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<html>
<head>
<link rel="stylesheet" type="text/css" href="/style.css">
<title>SIGPL 2009 �����б�</title>
<style type="text/css">
   .small { font-size: 10pt; }
   .smallbold { font-size: 10pt; font-weight: bold; }
</style>
</head>
<body>

<h1>
<center>
�ѱ���������ȸ ���α׷��־���ȸ �����б�
<br> (SIGPL Summer School 2009)
</center>
</h1>
<center><table><tr><th align="left">
<li>
   ����: Coq�� �̿��� �������� �� ���α׷���
<li>
   �Ͻ�: 2009�� 8�� 18��(ȭ) ~ 8�� 20��(��)
<li>
   ���: �������б� ����ķ�۽� ������°� 1�� �Ұ��ǽ�
</td></tr></table>
</center>
<br>
 <p>
�ѱ���������ȸ ���α׷��־�� ����ȸ(SIGPL)�� �ų� ������ �ܿ�
���бⰣ�� ���п����� �����Ͼ�, ����, �����ڵ��� ������� �����б���
�����ϰ� �ֽ��ϴ�. �̹� �����б������� ���� ���� ���� Coq�� �̿��Ͽ�
������ ���� ���� �̷��� ���α׷����ϰ� �ǽ��ϴ� ���Ǹ�
�غ��Ͽ����ϴ�. ���α׷��־��, ���� ���, �ý����� ������ ������,
�׸��� �������� ���� �̷� �о߿� ������ ��ȸ�� �� �� ����
���Դϴ�. ���� ���ɰ� ������ ��Ź�帳�ϴ�.
</p>
<p>
<b>�ѱ���������ȸ ���α׷��־���ȸ ������� ������</b>
</p>
<h2> ���α׷� �Ұ�</h2>

<p>
SIGPL 2009 �����б������� �������� Coq�� �̿��� ���α׷��ֿ� ���ؼ� ���¸�
�����մϴ�. �������� Coq�� �̿��ؼ� ������ �������� ǥ���� ������ Coq
���α׷����� ǥ���ϴ� ����� ����, �������� �������� ������ �����Ͽ� Coq
���α׷����� �ٽ� ������� �ϳ��� �ͳ��� ������� ������� �ٷ�ϴ�. ��
���´� �̷��� ����� �����ϴ� ���ǿ� ���� Coq���� ���α׷����� �� ���� �ǽ�����
�����Ǹ�, �ǽ��ð����� ����� ������ ���� ���α׷����� �����ְ� �˴ϴ�.  
</p>

<p>
�� ���´� ���п� ������ �ִ� �кλ�, ���п����� �� ������� �ϸ�, ��������
���� ���ĸ� ������ ������ ������ �� �ֵ��� �����Ͽ����ϴ�. 
<ul>
<li> ���� : �̰��(������б�), �ڼ���(Postech) 
<li> ���� : ������(Postech), ������(Postech)
</p>
</ul>
</p>

<h2>���α׷� ����</h2>

<?php

$content = 
  'head | ù°�� 8�� 18�� (ȭ) ���� ##
   13:30 | ������ | ##
   14:00-15:20 &nbsp; | class 1 &nbsp; | natural deduction, propositional logic, proof term (����) ##
   15:30-17:00 | class 2 | Coq �Ұ�, propositional logic, proof term (����, Coq �ǽ�) ##
   17:30 | ���� | ##
   head | ��°�� 8�� 19�� (��) ���� ##
   09:00-10:20 | class 3 | first-order logic (����, Coq �ǽ�) ##
   10:30-12:00 | class 4 | inductive datatype, inductive predicate (����)##
   head | ��°�� 8�� 19�� (��) ���� ##
   13:00-14:20 | class 5 | inductive datatype (Coq �ǽ�) ##
   14:30-16:00 | class 6 | inductive predicate (Coq �ǽ�)## 
   head | ��°�� 8�� 20�� (��) ���� ## 
   09:00-10:20 | class 7 | inductive proof (Coq �ǽ�)##
   10:30-12:00 | class 8 | inductive proof (Coq �ǽ�) 
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
	
<h2>���� �غ�</h2>

<p>�����ϴ� �л����� �ǽ��� ���ؼ� ��Ʈ�Ͽ� Coq ����Ʈ��� �̸� ��ġ�ؼ�
�����;� �մϴ�. (�����б����� ��Ʈ���� ������ �غ����� �ʽ��ϴ�.) Coq
����Ʈ����� ���� ������������ �ٿ�ε� ���� �� ������ ���� ������������
�����ǰ� �ִ� 8.2pl1 ������ ��ġ�ϸ� �˴ϴ�.  Coq �ǽ��� CoqIDE�� �̿��ؼ�
�����ϹǷ� CoqIDE�� ����ǵ��� �غ��ϸ� �˴ϴ�. Emacs ȯ���� ���� CoqIDE ��ġ�� ProofGeneral�� �̿��Ͻø� �˴ϴ�.

<ul> 
<li>Coq ����Ʈ���� ��ġ:
<a href="http://pauillac.inria.fr/coq" target="_blank">http://pauillac.inria.fr/coq</a>
  <li>ProofGeneral ��ġ:
<a href="http://proofgeneral.inf.ed.ac.uk" target="_blank">http://proofgeneral.inf.ed.ac.uk</a>
  <li>���� ���� ����:
<a href="http://pauillac.inria.fr/coq/V8.2/doc/html/tutorial.html" target="_blank">http://pauillac.inria.fr/coq/V8.2/doc/html/tutorial.html</a>
</ul>
�����ڷ� �� �����ڷ�� ������ �����ϴ�.
<ul>
  <li> �����ڷ�: <a href="sigpl2009.pdf">���Ǳ���</a>,
  <a href="sigpl2009.v">�����ڷ� Coq ����</a>,
  <a href="sigpl2009.html">�����ڷ� Coq ���� ����</a> 
  <li> ����: <a href="sigpl2009-hw.pdf">����</a>,
  <a href="sigpl2009-hw.v">���� Coq ����</a>
</ul>

</p>

				   

<h2> ��Ͼȳ� </h2>
<ul>
<li> ��Ϻ� 
<table border="1" bordercolor="#a0a0a0" cellspacing="0">
<tr><th>&nbsp;</th><th>�л�ȸ��</th><th>�Ϲ�ȸ��</th><th>��ȸ��</th></tr>
<tr align="center"><th>��Ϻ�</th><td>150,000��</td><td>200,000��</td><td>250,000��</td></tr>
</table>
  <li> ��� ���: <a href="/pay/school.php">���������</a>�� ���Ͽ� ���
		    <li> ���ѵ� ���� ������ ������ �ʿ��� �л�ȸ������ ��Ϻ� �Ϻθ� ������ �����Դϴ�. ��Ϻ� ������ �ʿ��Ͻ� ���� �̸��� <img src="/mail/jsahn.jpg">�� ��� ���� �̸� ��û �ٶ��ϴ�. (�� ��� ���� ��ü ������ϸ� ����)
</ul>

<h2> �غ�����ȸ </h2>
<ul>
<li> �м�������: �ڼ��� ���� (���װ������б�)
  <li> ����������: ������ ���� (�������б�)
  <li> ����: ���ؼ� ���� (�ѱ��װ����б�, 010-6208-5593, <img src="/mail/jsahn.jpg">)
</ul>

  <h2> ��Ҿȳ� </h2>
<h3> �������б� ����ķ�۽� ���ô� ��</h3>

<center>
<a href="mokpo.jpg"><img border="0" width="400" src="mokpo.jpg"></a>
</center>

<ol>
<li> �¿���
<ul>
<li> ���ؾȰ�ӵ���: �������� -> ����IC -> û��� -> �������б�
<li> ȣ�� ��ӵ��� -> ���� -> ���� ����IC -> ����-���� ��ӵ��� -> ���ؾ� ��ӵ��� -> ����IC -> û��� -> �������б�  (* ���� �׸��� ����-���� ��ӵ��� �׸��� �����ֽ��ϴ�. *)
</ul>
<li> ���� (KTX, ������, ����ȭ) (KTX ��꿪���� 3�ð� 20��)
<ul><li>
������ ����(��꿪) -> ������ -> 200�� �¼�����(�� �տ���) -> ���������͹̳� -> �������б� (���������� �б����� �� 40~50�� �ҿ�)
</ul>
<li> ���� (���������� �� 4�ð� 30��)<ul><li>
������ ����(����) -> ���� ���� �͹̳� -> 200�� �¼����� (ū�� ��������) -> �������б� (�������� �͹̳ο��� �б����� �� 30�� �ҿ�)
</ul>
<li> �����<ul><li>
����(12:00) -> ���Ȱ���(12:55) -> �������б� (TAXI Ȱ��)
���� -> ���� ���� -> ���� �����͹̳� -> ���� ���� �͹̳� -> 200�� �¼����� (ū�� ��������) -> �������б� (�������� �͹̳ο��� �б����� �� 30�� �ҿ�)
</ol>

<h3>
�б����ο��� ������°����� ���ô� ��</h3>
<center>
<a href="building.jpg"><img width="640" border="0" src="building.jpg"></a>
</center>
<ul>
<li>
				 B24 1�� �Ұ��ǽ�: ���� -> �м��� -> �м��� ���ʱ� -> ���������� -> ���� 2��° �ǹ� (ū ������ �ִ� �ǹ�)
</ul>
</ul>

</body>
</html>
