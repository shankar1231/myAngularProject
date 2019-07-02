<div id="content">
<div id="content2">

<!--
<div class="page_title">
<div class="container">
<div class="row">
<div class="span12">
	Services
</div>	
</div>	
</div>	
</div>-->

<div id="inner">
<div id="inner2">
<?php $category_name=$this->Main_modal_db->loadSql("business_categories",array('business_catid'=>$db_single_businees_data->busniess_categry))->row();?>
			                  
									
	<div class="container">
		<div class="row">
			<div class="span9">
				
				<h1><?= $db_single_businees_data->title;?></h1>

				<div class="thumb3">
					<div class="thumbnail clearfix">
						<figure class="img-polaroid"><img src="<?= base_url();?>assects/images/services01.jpg" alt=""></figure>
						<div class="caption">
							<h4 class="business_view_styles_h4">Category</h4>
							<p class="business_view_styles_p"> <?= $category_name->business_catname;?></p>
							
							<h4 class="business_view_styles_h4">Posted Date</h4>
							<p class="business_view_styles_p"><?= $db_single_businees_data->business_date;?></p>
							
                            <h4 class="business_view_styles_h4">Description</h4>							
							<p class="business_view_styles_p"><?= $db_single_businees_data->descrptn;?></p>
							
													
						</div>
					</div>
				</div>

			

			</div>
			
			<div class="span3">
				
				<h1>Business Categories </h1>

				<div class="thumb5">
					<div class="thumbnail clearfix">
						<div class="">
							<ul class="business_list_view_leftside_ul">
					
					
					<li><a href="<?= base_url();?>all_business_list">All Business List</a></li>
					<li><a href="<?= base_url();?>parboiled-ricemill">Parboiled Ricemill</a></li>
					<li><a href="<?= base_url();?>bio-chemicals">Bio Chemicals</a></li>
					<li><a href="<?= base_url();?>agro-form">Agro Form</a></li>
					<li><a href="<?= base_url();?>trading">Trading</a></li>
					<li><a href="<?= base_url();?>ginning-mill">Ginning Mill</a></li>
												
					</ul>
						</div>
					</div>
				</div>
				

			</div>
		</div>
	</div>
</div>	
</div>
	
</div>	
</div>