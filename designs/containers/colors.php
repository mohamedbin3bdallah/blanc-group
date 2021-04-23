<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
	<h2><label><?php language('colors'); ?></label></h2><br><br>
	
		<h4><label style="color: #0c5d97;"><?php language('newcolor'); ?></label></h4>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<form enctype="multipart/form-data" method="POST" action="">
				<?php if(isset($_GET['oldid']) && $_GET['oldid'] != '') { ?><input type="hidden" name="oldid" value="<?php echo $_GET['oldid']; ?>" /><?php } ?>
				<table class="table table-bordered">					
					<tr>
						<td class="info"><?php language('ar'); language(' '); language('title'); ?></td>
						<td class="warning"><input name="color" class="jscolor {onFineChange:'update(this)'}" value="<?php if(isset($_GET['color'])) echo $_GET['color']; ?>" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"></td>
						<td class="warning"><input type="submit" name="savecolor" class="btn btn-success" /></td>
					</tr>
				</table>
				</form>
				</div>
			</div>
		</div>
	
	<br><br><h4><label style="color: #0c5d97;"><?php language('colors'); ?></label></h4>
		<?php
		$colors = getColors($startResults,$resultsPerPage);
		if(!empty($colors))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<tr class="danger">
						<td><?php language('color'); ?></td>
						<td><?php language('edit'); ?></td>
						<td><?php language('delete'); ?></td>
					</tr>
				<?php for($i=0;$i<sizeof($colors);$i++) { ?>
					<tr id="tr-<?php echo $colors[$i]['id']; ?>">
						<td style="background-color: #<?php echo $colors[$i]['color']; ?>;"></td>
						<td><a href="colors.php?oldid=<?php echo $colors[$i]['id']; ?>&color=<?php echo $colors[$i]['color']; ?>"><i style="color:green;" class="glyphicon glyphicon-edit"></i></a></td>
						<td>
							<i id="<?php echo $colors[$i]['id'];?>" style="color:red;" class="colordel glyphicon glyphicon-remove-circle"></i>
							<div id="colors-<?php echo $colors[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deletecolormodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deletecolor('<?php echo $colors[$i]['id'];?>')" data-dismiss="modal"><?php language('agree'); ?></button>
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><?php language('no'); ?></button>
										</center>
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>
				<?php } ?>
				</table>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4<?php if($lang_file == 'ar') echo ' col-md-push-8'; ?>">
			</div>
			<div class="col-md-8<?php if($lang_file == 'ar') echo ' col-md-pull-4'; ?>">
				<nav>
					<ul class="pagination">
						<?php if($totalPages > 1) { ?><li><a href="?page=1"><?php language("first"); ?></a></li><?php } ?>
						<?php if($page > 3) { ?><li>
							<a href="?page=<?php echo $page-2; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li><?php } ?>
						<?php if($page > 1) { ?><li><a href="?page=<?php echo $page-1; ?>"><?php echo $page-1; ?></a></li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?page=<?php echo $page; ?>"><?php echo $page; ?></a></li><?php } ?>
						<?php if($page < $totalPages) { ?><li><a href="?page=<?php echo $page+1; ?>"><?php echo $page+1; ?></a></li><?php } ?>
						<?php if($page < $totalPages-1) { ?><li>
							<a href="?page=<?php echo $page+2; ?>" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?page=<?php echo $totalPages; ?>"><?php language("last"); ?></a></li><?php } ?>
					</ul>
				</nav>
			</div>
		</div>
		
		<?php } else language("nocolors"); ?>
	</div>
</div>