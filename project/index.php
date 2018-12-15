<?php
    	include('header.php');
?>
    <section>
    		<?php
				$sql = "SELECT * FROM typeofnews";
				$result = mysqli_query($conn,$sql);
				$num = mysqli_num_rows($result);
				for ($i=0; $i <$num; $i++) { 
					$row=mysqli_fetch_assoc($result);
				?>
    	    	<div class="card">
	    			<div class="type type<?=$i%3?>">
	    				<p><?= $row['type']?></p>
	    			</div>
	    			<div>
					<a href="index.php?type=<?=$row['type']?>">
		    			<img src="<?=$row['url']?>">
					</a>	    				
	    			</div>
	    		</div>

    		<?php
			}
			?>
    </section>
    <section>
    	<?php 
    	if (isset($_REQUEST['type'])) {
    		$var=$_REQUEST['type'];
    $sql="SELECT * from news where type='$var'";
    	}else{
			$sql = "SELECT * from news"; 
    	}
		$result = mysqli_query($conn, $sql); 
		$num = mysqli_num_rows($result); 
		for ($i=0; $i <$num ; $i++) { 
		$row = mysqli_fetch_assoc($result); 
		?> 
		<div class="cardIns2">
			<a href="newsPage.php?id=<?=$row['id']?>">
				<div><img src="<?=$row["url"]?>"></div>
				<div class="title"><?=$row["title"]?></div>
				<div class="desc"><?=$row["description"]?></div>
			</a>
		</div>
		<?php 
	}
		 ?>

    </section>
    <?php
    	include('footer.php');
    ?>
  