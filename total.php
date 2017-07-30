<?
include("head1.php");
$group_no = "3";
$temp=mysql_fetch_array(mysql_query("select count(*) from $member_table where group_no='$group_no'"));
$total=$temp[0];

@mysql_query("update $group_table set member_num=$total where no = '$group_no'") or error(mysql_error());
echo"$total Έν";
?>