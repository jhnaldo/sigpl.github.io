<html>
<head>
<title> ��� </title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<table width="660"><tr><td>

<h1>
��������ȸ ���α׷��־���ȸ (SIGPL)
<br>2008 �ܿ��б�
</h1>
<center><table><tr><th align="left">
<li>�Ͻ�: 2008�� 1�� 30��(��) - 2�� 1��(��)
<li>���: KAIST �����е�
</td></tr></table>
</center>
<?php

$action = $_POST["action"];
$admin = "elee@dongduk.ac.kr";

$entry = array ('name' => '�̸�', 'org' => '�Ҽ�', 'tel' => '(�̵�)��ȭ��ȣ', 'email' => '�̸���');

if($action == "submit") {
  if($_POST["name"] == "" || $_POST["org"] == "" || $_POST["tel"] == "" ||
     $_POST["email"] == "") 
     $action = "error";
}
function showif($action, $name) {
  global $_POST, $entry;
  echo "<tr><th>";
  if($action == "error" && $_POST[$name] == "") {
     echo "<font color=\"red\">";
     echo $entry[$name];
     echo "</font>";
  }
  else
     echo $entry[$name];
  echo "</th><td><input type=\"text\" name=\"$name\" value=\"";
  echo $_POST[$name];
  echo "\" size=\"30\"></td></tr>\n";
}
function showhidden($name, $value) {
  echo "<input type=\"hidden\" name=\"$name\" value=\"$value\">\n";
}
function postredirect($fields) {
  global $_POST;
  foreach($fields as $field) 
    showhidden ($field, $_POST[$field]);
}
function sendmail($recv) {
  global $_POST, $entry;
  $subject = "SIGPL Registration";
  $m = "������ ���� ����� �Ϸ�Ǿ����ϴ�.\n\n- ��Ϻ�: $_POST[price] ��\n";
  foreach($entry as $key => $value)
    $m = $m . "- ". $value . ": ".$_POST[$key]."\n";
  $m = $m . "- �������: ";
  if($_POST['method'] == 'card') $m = $m . "�ſ�ī��\n";
  else {
    $m = $m . "������ü (����(����)���� 313-03-002919 (��)�ѱ���������ȸ)\n";
    if($_POST['tax'] == 'yes') 
      $m = $m . "- ���ݰ�꼭 �߱޿�û: ����ڵ���� �纻�� " . 
           $admin . "�� �ۺο��\n";
      $m = $m . "  �Ǵ� ��ü��, ��ǥ��, ���ε�Ϲ�ȣ, ������, ��Ϲ�ȣ, ����, ���� ���� �ۺο��\n"; 
  }
  $m = $m . "\nSIGPL ������� ������ ������\n";
  mail($recv, $subject, $m);
}

if($action != "submit" && $action != "finish" && $action != "finishcard") {
?>
  <h2> ��� ������</h2>

<center>
���� ���̺��� ��� �׸��� ä�� �ֽʽÿ�.
<?php if($action == "error") echo "���� �� �׸��� ��� ä�� �ּ���."; ?>
<form action="reg.php" method="post">
<input type="hidden" name="action" value="submit">
<table>
<?php
foreach($entry as $key => $value) showif($action, $key);
?>
<tr><th>
��Ϻ� 
</th>
<td>
<input type="radio" name="price" value="150000" checked>�л� 150,000��
<br><input type="radio" name="price" value="200000"
  <?php if($_POST['price'] == 200000) echo "checked" ?>
>�Ϲ�ȸ�� 200,000��
<br><input type="radio" name="price" value="250000"
  <?php if($_POST['price'] == 250000) echo "checked" ?>
>��ȸ�� 250,000��
</td>
</tr>
<tr><th>
�������
</th>
</th><td><input type="radio" name="method" value="card" checked> �ſ�ī��
<br><input type="radio" name="method" value="transfer"
  <?php if($_POST['method'] == "transfer") echo "checked" ?>
> ������ü
</td></tr>
<tr><th>
  ���ݰ�꼭
</th><td><input type="checkbox" name="tax" value="yes" 
  <?php if($_POST['tax'] == "yes") echo "checked"; ?>> 
  �߱��� ��û�մϴ� (������ü�ø� ����)
</td></tr>
<tr><td></td><td><input type="submit" value="����մϴ�"></td></tr>
</table>
</center>
</form>
<?php
}
else if($action == "submit" || $action == "finish") {
  if($action == "submit") 
    echo "<h2> ��� Ȯ�� </h2><center>������ ���� ����� ��û�ϼ̽��ϴ�.";
  else {
    sendmail($admin);
    sendmail($_POST['email']);
    echo "<h2> ��� �Ϸ� </h2><center>��û�Ͻ� ����� �����Ͽ����ϴ�. �ܿ��б����� �����ô�.";
  }
?>
<table>
<?php
  foreach($entry as $key => $value) 
    echo "<tr><th>$value</th><td>$_POST[$key]</td></tr>";
  echo "<tr><th>��Ϻ�</th><td>";
  if($_POST["price"] == "150000") echo "�л� 150,000��";
  else if($_POST["price"] == "200000") echo "�Ϲ�ȸ�� 200,000��";
  else echo "��ȸ�� 250,000��";
  echo "</td></tr>";
  echo "<tr><th>����</th><td>";
  if($_POST["method"] == "card") echo "�ſ�ī��"; 
  else {
    echo "������ü (�������� 313-03-002919, (��)�ѱ���������ȸ)</td></tr>";
    echo "<tr><th>���ݰ�꼭 �߱�</th><td>";
    if($_POST['tax'] == "yes") { 
      echo "��û (����ڵ���� ���纻�� ";
      echo $admin;
      echo "�� �ۺο��)";
    }
    else
      echo "��û���� ����";
  }
  echo "</td></tr>";
  echo "</table>";
  if($_POST["method"] == "transfer" && $action == "submit") {
?>
  <br>
  <form action="reg.php" method="post">
  <?php 
    postredirect(array ('name', 'org', 'tel', 'email', 'price',
    'method', 'tax')); 
    showhidden("action", "finish");
  ?> 
  <input type="submit" value="������ü�� �Ϸ��Ͽ����� ����� ���մϴ�.">
  </form>
  <form action="reg.php" method="post">
  <?php 
    postredirect(array ('name', 'org', 'tel', 'email', 'price',
    'method', 'tax')); 
  ?>
  <input type="submit" value="������ Ʋ�Ƚ��ϴ�. �ٽ� �����ϰڽ��ϴ�.">
  </form>
<?php
  }
  else if($_POST['method'] == "card") {
?>
  <br>
  <form action="reg.php" method="post">
  <?php 
    postredirect(array ('name', 'org', 'tel', 'email', 'price', 'method'));
    showhidden("action", "finishcard"); 
  ?> 
  <input type="submit" value="������ Ȯ���Ͽ����ϴ�. ī������� ���մϴ�.">
  </form>
  <form action="reg.php" method="post">
  <?php 
    postredirect(array ('name', 'org', 'tel', 'email', 'price', 'method')); 
  ?>
  <input type="submit" value="������ Ʋ�Ƚ��ϴ�. �ٽ� �����ϰڽ��ϴ�.">
  </form>


<?php
  }
?>
</table>
</center>
<?php
}
else if($action == "finishcard") {
  sendmail($admin);
  sendmail($_POST['email']);
?>
<form name=way_INI action="pay/check.php" method="post">
<?php postredirect(array('name', 'email', 'price', 'tel')); ?>
</form>
<script language=javascript>
document.way_INI.submit(); 
</script>

<?php
}

?>
</td></tr></table>
</body>
</html>
