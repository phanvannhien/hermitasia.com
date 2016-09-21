
	<footer id="colophon" class="site-footer" role="contentinfo">
		
			
			<div class="container-inner">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-12">
							<?php
								dynamic_sidebar('widget-footer1');
							?>

						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-12">
							<?php
								dynamic_sidebar('widget-footer2');
							?>

						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-4 col-xs-12">
							<?php
								dynamic_sidebar('widget-footer3');
							?>
						</div>
					</div>	
				</div>
		
		</div>
		
	</footer><!-- .site-footer -->

</div><!-- .site -->

<div style="top:40%" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Thông báo</h4>
      </div>
      <div class="modal-body">
        <p>Website hiện đang được cập nhật...</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>


<?php wp_footer(); ?>
<script>
	setTimeout(function(){
		//jQuery('.modal').modal();
	},3000)

	jQuery(document).ready(function(){
		jQuery(".scroller-wrapper").mCustomScrollbar({
			axis:"x",
			theme:"light-thick",
			autoExpandScrollbar:true,
			advanced:{autoExpandHorizontalScroll:true}
		});

	})

</script>
</body>
</html>
