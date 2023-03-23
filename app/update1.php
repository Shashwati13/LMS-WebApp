<?php
include "index.php";

 $sql="update villager SET bpl_certificate='$_POST[bpl_certificate1]',name='$_POST[name1]',no_of_house_members='$_POST[no_of_house_members1]',address='$_POST[address1]',toilet='$_POST[toilet1]',adhar_card='$_POST[adhar_card1]',bpl_no='$_POST[bpl_no1]',v_name='$_POST[v_name1]',adhar_no='$_POST[adhar_no1]' where house_no='$_POST[house_no1]'";

 if(mysqli_query($conn,$sql))
 {
	 echo"updated";
	 //header("refresh:1;url=update.php");
	 }
	 else
		  echo "not update";

?>