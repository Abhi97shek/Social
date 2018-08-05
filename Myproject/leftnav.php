<div class="col-lg-3">
               <div class="leftsideparent">
			    	<div class="profile_picture leftside">
                		<img src="<?php  if(empty($profileimage))
					{
						echo "uploads\blank_profile-500x500-ms0y9mc8g8zdhq1pys4stndcrafzdl9g7kr4h7xymg.png";
					}
					else
					{
						echo $profileimage;
						
					}
					?>">
                		<p><?php echo ucfirst($fname)." ".ucfirst($lname);?></p>
                	</div>
                	<div class="options">
               			 <ul>
                			<li class="nav-item">
        						<a class="nav-link" href="Friends.php">More Friends</a>
      						</li>
                            <li class="nav-item">
        						<a class="nav-link" href="#">Friends</a>
      						</li>
                     		<li class="nav-item">
        						<a class="nav-link" href="#">Messages</a>
      						</li>
                    		<li class="nav-item">
        						<a class="nav-link" href="#">News</a>
      						</li>
                		</ul>
               		</div>
               </div>     
    		</div>
    		