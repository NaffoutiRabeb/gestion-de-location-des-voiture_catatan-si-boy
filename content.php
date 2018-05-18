<!-- content -->
	<div class="container">
		<div class="content">
			<a href="single.html"></a>
			<i class="aeroplane"> </i>
	<div class="travelling">
			<div class="col-md-10 travelling1">
				<h1><a href="single.html">
				</a></h1>

					<h1>location des voitures </h1>
<?php the_title();?>
<h1>bla bla bla....</h1>
<?php the_content();?>
				<h5><a href="#">Samedi ,</a> 27 mais 2018 ,<a href="#"></a>maisson de location</h5>
				<p> </p>
			</div>
			<div class="col-md-1 travelling2">
				<h3>catégorie des voiture</h3>
				<p>
<label for="your_fields[select]">menu des voiture </label>
<br>
<select name="your_fields[select]" id="your_fields[select]">
<option value="option-one" <?php selected($meta['select'],'option-one'); ?>
>voiture classe</option>
<option value="option-two" <?php selected($meta['select'],'optiontwo');?>>
voiture cha3bia</option>
</select>
</p>
				<p>
<label for="your_fields[image]">Image Upload</label><br>
<input type="text" name="your_fields[image]" id="your_fields[image]" class="meta-image
regular-text" value="<?php echo $meta['image'];?>">
<input type="button" class="button image-upload" value="Browse">
</p>
<div class="image-preview"><img src="<?php echo $meta['image'];?>" style="max-width:
250px;"></div>
				<p>
<label for="your_fields[checkbox]">ford
<input type="checkbox" name="your_fields[checkbox]" value="checkbox" <?php if(
$meta['checkbox'] === 'checkbox') echo 'checked'; ?> >
</label>
<label for="your_fields[checkbox]">BMW
<input type="checkbox" name="your_fields[checkbox]" value="checkbox" <?php if(
$meta['checkbox'] === 'checkbox') echo 'checked'; ?> >
</label>
<label for="your_fields[checkbox]">Polo
<input type="checkbox" name="your_fields[checkbox]" value="checkbox" <?php if(
$meta['checkbox'] === 'checkbox') echo 'checked'; ?> >
</label>
<label for="your_fields[checkbox]">306
<input type="checkbox" name="your_fields[checkbox]" value="checkbox" <?php if(
$meta['checkbox'] === 'checkbox') echo 'checked'; ?> >
</label>
</p>
				
				
			</div>
				<div class="clearfix"> </div>
	</div>
	<div class="lequotes">
		
			<div class="col-md-12">
				<a class="more" href="single.html">lire plus</a>
			</div>
			<div class="col-md-12 lequotes3 ">
				<div class="lequotes1">
					<img src="images/01.png" class="img-responsive" alt="" />
				</div>
				<div class="lequotes2">
					<h3>prix de location des voiture</h3>
					<p>
<label for="your_fields[text]">entreé le prix de voiture choisir</label>
<br>
<input type="text" name="your_fields[text]" id="your_fields[text]" class="regular-text"
value="<?php echo $meta['text']; ?>" >
</p><br><br>
					<a href="#">commentaire</a>
				<p>
<label for="your_fields[textarea]"></label>
<br>
<textarea name="your_fields[textarea]" id="your_fields[textarea]" rows="5" cols="30"
style="width:500px;"><?php echo $meta['textarea'];?></textarea>
</p>
				</div>
					<div class="clearfix"> </div>
			</div>
				<div class="billgates">
				<div class="col-md-10 billgates1">
					<h2></h2>
					<h5><a href="#">Samedi ,</a> 27 mais 2018 ,<a href="#">maisson de loaction des voitures</a></h5>
				</div>
				<div class="col-md-1 billgates2">
					<h3>merci pour votre visite</h3>
					<p><a href="#"></a></p>
				</div>
					<div class="clearfix"> </div>
					<h4>“crée par”</h4>
					<h6>jlassi haifa<br>naffouti rabeb</br></h6>
				</div>
	</div>
	<div class="loadmore">
			<a class="more" href="single.html">lire plus</a>
	</div>
	<div class="loadmore1">
			<a class="load" href="#">voir plus</a>	
	</div>
</div>	
</div>
<!-- content -->