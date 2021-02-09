<?php
        $queryUni="select * from outsidecourse left join university on outsidecourse.uniid=university.uniid order by outsidecourse.uniid";
        $result1=mysqli_query($connection,$queryUni);
        if(!$result1){
                die("databases uni query faild.");
        }
		$unidata[]=$row;
        while ($row=mysqli_fetch_assoc($result1)){
                echo "<option value='".$row["nickname"]."_".$row["outsidenum"]."'>".$row["nickname"]."--".$row["outsidenum"]."</option>";

        }
        mysqli_free_result($result1);
?>
