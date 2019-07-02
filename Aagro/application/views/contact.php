<div id="content">
<div id="content2">
<!--
<div class="page_title">
<div class="container">
<div class="row">
<div class="span12">
	Contacts
</div>	
</div>	
</div>	
</div>-->
<div id="inner">
<div id="inner2">
	<div class="container">
		<div class="row">
			<div class="span12">
			
			<h2>Contact Form </h2>
			
					 <?php
		 if($this->session->tempdata("success_msg"))
		 {
		 echo "<p class='alert alert-success'>".$this->session->tempdata("success_msg")."</p>";
		 }
		 elseif($this->session->tempdata("error_msg"))
		 {
		 echo "<p class='alert alert-danger'>".$this->session->tempdata("error_msg")."</p>";
		 }
		 ?>
			
			
			<div id="fields">
	<form  id="ajax-contact-form" class="form-horizontal" action="<?= base_url();?>contact" method="post">
		<div class="row">
			<div class="span5">
				
				
				<div class="control-group">
				    <label class="control-label" for="">Your  Name :</label>
				    <div class="controls">				      
				      <input class="span5" type="text" name="name" id="txtfname"  placeholder="Name" value="<?= set_value('name')?>"  >
				    <?= form_error('name')?>
					</div>
				</div>
				
				<div class="control-group">
				    <label class="control-label" for="inputEmail"> Company Name:</label>
				    <div class="controls">				      
				      <input class="span5" type="text" name="company_name"  id="txtcomname" placeholder="Company Name"  value="<?= set_value('company_name')?>"/>
                                            <?= form_error('company_name')?>
				    </div>
				</div>
				
				<div class="control-group">
				    <label class="control-label" for="inputName">Your email:</label>
				    <div class="controls">				      
				      <input class="span5" type="email" name="email"  id="txtemail" placeholder="Email" value="<?= set_value('email')?>" />
                                            <?= form_error('email')?>
				    </div>
				</div>
				
				<div class="control-group">
				    <label class="control-label" for="inputPhone">Phone number:</label>
				    <div class="controls">				      
				      <input class="span5" type="number" name="phn_num" id="txtphone" placeholder="Mobile Number" value="<?= set_value('phn_num')?>" />
                                            <?= form_error('phn_num')?>
				    </div>
				</div>
			</div>
			<div class="span4">
				<div class="control-group">
				    <label class="control-label" for="inputMessage">Message:</label>
				    <div class="controls">				      				      
				      <textarea class="span4" name="message"  id="txtDescription" placeholder="Description">
												<?= set_value('message')?></textarea>
				    </div>
				</div>
			</div>
		</div>
	
		<button type="submit" class="submit"><em></em>submit</button>
	</form>
</div>
				
				<h1>Contact Address</h1>

				<figure class="google_map">
		            <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Glasgow,&amp;aq=&amp;sll=46.975033,31.994583&amp;sspn=0.368248,0.617294&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Glasgow,+Glasgow+City,+United+Kingdom&amp;t=m&amp;ll=55.866932,-4.256344&amp;spn=0.020324,0.070896&amp;z=13&amp;output=embed"></iframe>
		        </figure>

				<h4>
					AGROBASED
				</h4>
				<p>
					Hyderabad<br>
					Kukatpally.<br>
Telephone: +91 9999999999<br>
E-mail: <a href="#">mail@AGROBASED.com</a>
				</p>

											




			</div>
			
		</div>
	</div>
</div>	
</div>
	
</div>	
</div>