
<!-- header -->
	<div class="banner">
  	    <div class="container">
			<div class="logo">
				<a href="index.html"><img src="images/téléchargement.jpg" class="img-responsive" alt="" /></a>
			</div>
		</div> 
			<div class="header-bottom">
				<div class="container">
					<div class="head-nav">
						<span class="menu"> </span>
						<h4>archives</h4> 
						<ol class="list-unstyled"> <?php wp_get_archives( 'type=monthly' ); ?> </ol>
							<!--<ul>
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="index.html">Categories</a></li>
								<div class="clearfix"> </div>
						</ul>-->
				</div>
				<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->		
					<div class="search-box">
				        <form>
				            <input type="text" name="s" class="textbox" value="search something" onFocus="this.value = '';" onBlur="if
				                  	(this.value == '') {this.value = 'search something';}">
				            <input type="submit" value>
				        </form>
		            </div>
						<div class="clearfix"> </div>
				</div>
			</div>
	</div>
<!-- header -->
