<?php include('includes/header.php');?>
	<div class="holder">
	    <div class="container">
			<div>
				<img src="<?php echo $_ENV['BASE_URL'];?>admin/files/page/img/1000/<?php echo  $page['page_image'];?>" width="100%">
			</div>
			<div class="page-title text-center" style="margin-top:20px; font-size:20px;">
				<b><?php echo  $page['page_name_en'];?></b>
			</div>
			<div style="margin-top:20px;">
				<?php echo  $page['page_description_en'];?>
			</div>
        </div>
	</div>
<?php include('includes/footer.php');?>