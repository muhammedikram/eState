	<div class="container">
		
		<div class="row">
			<div class="col-md-8">
			
			<!-- property ref and price row-->
			<div class="row">
				<div class="col-md-8">
					<!-- Assigining property code to variable, which will be used in related properties-->
					<?php foreach ($properties as $part) { ?>
						<?php $id = $part->getPropertyID();  ?>
						<h3 class="text"><?php echo "Ref:" ,$id; ?></h3>
					<?php } ?>
				</div>

				<div class="col-md-4">
					<h2 class="text2">

							<?php $price =$part->getPrice(); ?>
								<?php if($price) 
							{ ?>
							&pound;
							<?php
								echo number_format (($price),2)  ." &nbsp;P / M" ; 
							}else {
								echo "Price Not Available <button class='btn btn-success'>Request Price</button>";
							}
						?>
						</h2>
					</div>
			</div>


			<!--Property image-->

			<div class="row">
				<div class="col-md-8">
					<?php foreach ($properties as $part) { ?>
					<div class="hidden-xs">
					 <?php  
					 	 $image = $part->getImage1();
					 	if  ($image) {?>
						<img src="/images/<?php echo $part->getImage1(); ?>"  width="740" height="450" style="margin-left: 10px;" alt="" title="<?php echo $part->getPropertyID(); ?>" />

						<?php } else {?>
						<img src="/images/noimage.png"  width="260" height="250" style="margin-left: 130px;" alt="" title="<?php echo $part->getPropertyID(); ?>" />

						<?php }?>
					</div>
				</div>
			</div>


			<!--Property details. show property details in table-->

			<div class="row">
				<div class="col-md-6">	<br>
					<table class="table table-striped">
			
							<tr><td><strong>Street: </strong><?php echo $part->getStreet(); ?></td></tr>
							<tr><td><strong>Town: </strong><?php echo $part->getTown(); ?></td></tr>
							<tr><td><strong>Type: </strong><?php echo $part->getType(); ?></td></tr>
							<tr><td><strong>Postcode: </strong><?php echo $part->getPostcode(); ?></td></tr>
					</table>
				</div>

					<div class="col-md-6">	<br>
					<table class="table table-striped">
			
							<tr><td><strong>Bedrooms: </strong><?php echo $part->getBedroom(); ?></td></tr>
							<tr><td><strong>Size: </strong><?php echo $part->getroomsize(); ?></td></tr>
							<tr><td><strong>Ready: </strong><?php echo $part->getReady(); ?></td></tr>
							<tr><td><strong>Size: </strong><?php echo $part->getroomsize(); ?></td></tr>
					</table>
				</div>
			</div>

			<div class="row">
				<div class="col-md-10">
					<h2>Required</h2>
					<?php
					$smoaking = $part->getSmoaking();
					$pets = 	$part->getPetsallowed();
					$couple = 	$part->getCouple();
					$parking = 	$part->getParking();
					?>

					<div class="row">
					<div class="col-md-6">
						<?php
						echo "<storng>Smoaking</strong>";
						 if ($smoaking == "Yes") { ?>
						 	<img src="/images/tick.png"  width="40" height="40" style="margin-left: 45px !important;" alt="" title="<?php echo $part->getPropertyID(); ?>" />
						 <?php 
						 } if ($smoaking != "Yes") { ?> 

							<img src="/images/wrong.png"  width="40" height="40" style="margin-left: 45px;" alt="" title="<?php echo $part->getPropertyID(); ?>" />
						<?php  }?>
						<br><br>

						<?php
						echo "<storng>Pets Allowed</strong>";
						 if ($pets == "Yes") { ?>
						 	<img src="/images/tick.png"  width="40" height="40" style="margin-left: 30px;" alt="" title="<?php echo $part->getPropertyID(); ?>" />
						 <?php 
						 } if ($pets != "Yes") { ?> 

							<img src="/images/wrong.png"  width="40" height="40" style="margin-left: 30px;" alt="" title="<?php echo $part->getPropertyID(); ?>" />
						<?php  }?>
					</div>

							<div class="col-md-6">
						<?php
						echo "<storng>Couple</strong>";
						 if ($couple == "Yes") { ?>
						 	<img src="/images/tick.png"  width="40" height="40" style="margin-left: 30px;" alt="" title="<?php echo $part->getPropertyID(); ?>" />
						 <?php 
						 } if ($couple != "Yes") { ?> 

							<img src="/images/wrong.png"  width="40" height="40" style="margin-left: 30px;" alt="" title="<?php echo $part->getPropertyID(); ?>" />
						<?php  }?>
						<br><br>

						<?php
						echo "<storng>Parking</strong>";
						 if ($parking == "Yes") { ?>
						 	<img src="/images/tick.png"  width="40" height="40" style="margin-left: 30px;" alt="" title="<?php echo $part->getPropertyID(); ?>" />
						 <?php 
						 } if ($parking != "Yes") { ?> 

							<img src="/images/wrong.png"  width="40" height="40" style="margin-left: 30px;" alt="" title="<?php echo $part->getPropertyID(); ?>" />
						<?php  }?>
					</div>
				</div>

				</div>
			</div>


			<!--Property description-->
			<div class="row">
				<div class="col-md-10">
					<?php echo $part->getDescription(); ?>
				</div>
			</div>

			<hr>

			<!--Properties for sale in user chosen area-->
			<div class="row">
				<div class="col-md-12">
			<!-- Assign the town to variable -->
				<h3>More properties in <?php echo $part->getTown(); ?> area</h3>
				
				<?php $similarProperties = $part->getTown();  ?>

			<!-- Sql query to get properties. -->
			<?php
			$relatedProperties = Rooms::find(array(
					    "town = '$similarProperties' AND  propertyID !=$id" 
					)
				);
			?>

			 <?php if ($this->length($relatedProperties) > 0) { ?>
			 <div class="row">
			 <?php foreach ($relatedProperties as $property) { ?>
			 		<div class="col-sm-4">
					    <div class="thumbnail">
					    <a href="/index/propertydetails/<?php echo $property->getPropertyID(); ?>">
					      <img src="/images/<?php echo $property->getImage1(); ?>"  width="150" height="150" style="margin-left: 10px;" alt="" title="<?php echo $property->getPropertyID(); ?>" />
					      </a>
					      <div class="caption">
					        <h3><?php echo $property->getStreet(); ?></h3>
					        <p><?php echo $property->getTown(); ?></p>
					        <p><?php echo $property->getPostcode(); ?></p>
					        
					      </div>
					    </div>
					  </div>			 
				  <?php } ?>
				   </div>
				  <?php } else { ?>
				<div class='jumbotron text-center'>No related properties found in 
				<?php echo $similarProperties; ?> area. </div>
			<?php } ?>
			</div>
		</div>

		<hr>

		<div class="row">
				<div class="col-sm-10">
					    <h3>More Information & Bookings</h3>
					    <p>If you require more information about this property or you would like to view this property, please contact <strong><?php echo $part->getMemberRegister()->getName(); ?></strong>
					   by email on <strong><a href="mailto:<?php echo $part->getMemberRegister()->getEmail(); ?>"><?php echo $part->getMemberRegister()->getEmail(); ?></a></strong></p>

					   <p>Alternatively, you can click contact seller above to send <?php echo $part->getMemberRegister()->getName(); ?> message directly from here. </p>
				</div>
			</div>

			<hr>






		</div><!-- End of panel 1  -->


				<!-- Panel 2  start here  -->
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default contactpanel">
 				 			<div class="panel-body">
								<div class="contactdetails">
									<h4>The property is added by</h4>
									<h4><?php echo $part->getMemberRegister()->getName(); ?></h4>

									<hr class="lineInPeopleContact">
										<button   type="button" class="btn btn-default btn-md contactButton" data-toggle="modal" data-target="#contactSeller"><span class="fa fa-envelope  fa-fw left"></span>Contact Seller</button>
						
									<hr class="lineInPeopleContact">
										<?php echo $this->tag->form(array('method' => 'post', 'role' => 'form')); ?>
									<button href ='/index/propertydetails/<?php echo $part->getPropertyID(); ?>' type='submit' name='action' value='favurite' class='btn btn-default addToFavurite'><span class="fa fa-star fa-fw left"></span>Add to Favurite</button>
										<hr class="lineInPeopleContact">
									<button   type="button" class="btn btn-default btn-md sendToFrend" data-toggle="modal" data-target="#myModal"><span class="fa fa-send  fa-fw left"></span>Send to Frend</button>
									<?php echo $this->tag->endForm(); ?>
									<hr class="lineInPeopleContact">
									<button   type="button" class="btn btn-default btn-md writeReview" data-toggle="modal" data-target="#myModal"><span class="fa fa-pencil  fa-fw left"></span>Write a review</button>

				
					
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<iframe width="370" height="350" src="https://maps.google.co.uk/maps?q=<?php echo $part->getPostcode(); ?>&amp;output=embed"></iframe>
					</div>
				</div>
			

			</div><!--END OF PANEL 2 -->
		



		</div><!--END OF ROW -->
		<?php } ?>
	</div><!--END OF CONTAINER-->




		<!-- Modal for email -->
		 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel"> Property ID <?php echo $part->getpropertyID(); ?></h4>
		      </div>
		      <div class="modal-body">
		        <form action="/index/rentpropertydetails/<?php echo $part->getpropertyID(); ?>" method="post" >
		         <div class="row">
		                   <div class="col-md-10 formLabel">
		                      Enter your Email:<br>
		                      <input type="email" class="form-control" placeholder="Enter email"name="sendEmail" id="sendEmail">   
		                    </div>
		                  </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="submit" name='newEmail' value='email'class="btn btn-success">Send</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>
	</div>


		<!-- Modal for contact seller -->
		 <div class="modal fade" id="contactSeller" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel"> Property ID <?php echo $part->getpropertyID(); ?></h4>
		      </div>
		      <div class="modal-body">
		        <form action="/index/rentcontact/<?php echo $part->getpropertyID(); ?>" method="post" >
		         <div class="row">
		                   <div class="col-md-10 formLabel">
		                    <div class="form-group">
								  <label for="name">* Name:</label>
								  <input type="text" class="form-control" id="name" name="name" required>
								</div>
								<div class="form-group">
								  <label for="email">* Email:</label>
								  <input type="email" class="form-control" id="email" name="email" required>
								</div>
								<div class="form-group">
								  <label for="number">Number:</label>
								  <input type="text" class="form-control" id="number" name="number">
								</div>
								<div class="form-group">
								  <label for="message">* Message:</label>
								  <textarea class="form-control" rows="5" id="message" name="message" required></textarea>
								</div>  
		                    </div>
		                  </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="submit" name='newEmail' value='email'class="btn btn-success">Send</button>
		      </div>
		      </form>
		    </div>
		  </div>
		</div>
	</div>





<style>

	.contactpanel{
		margin-top: 16%;
	}
	
	.text2{
		font-size: 25px;
		color: green;
		font-weight: bold;
	}
	.details{
		margin-left: -9%;
	}
#myModal{
	z-index: 1050;
}
#contactSeller{
	z-index: 1050;
}

.fa-envelope ,.fa-star,.fa-send, .fa-pencil{
  margin-right: 20%;
}
.contactButton,.sendToFrend,.addToFavurite,.writeReview{
	width: 75%;
	height: 40px;
	margin-left: 12%;
	mar
}

</style>
	
	




