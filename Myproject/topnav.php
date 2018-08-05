<nav class="navbar affix">
       <div class="navbarfixed">
        	<div class="contianer">
        		<div class="name col-lg-2  text-center">
        			<a href="account.php">Birdify</a>
				</div>            
         		 <form class="form-inline form1 col-lg-4" method="post" action="friends.php">
      				<input class="form-control" type="text" name="searchfriend" placeholder="Search Your Friend">
      				<button class="btn btn-outline-success"  name="find" type="submit">Search</button>
    	  		</form>
                
          		<div class="list col-lg-5 text-center">
          			<ul class="navbar-nav">
      					<li class="nav-item active">
        					<a class="nav-link" href="account.php">Home <span class="sr-only">(current)</span></a>
      					</li>
      					<li class="nav-item">
        					<a class="nav-link" href="Profile.php"><i class="fa fa-user" aria-hidden="true"></i></a>
                           
      					</li>
      					<li class="nav-item notify">
        					<a class="nav-link" href="requests.php"><i class="fa fa-bell" aria-hidden="true"></i></a>   
                             <div class="notification"><p>1</p></div> 
      					</li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></                        </li>
            			<li class="nav-item">
                        <div class="dropdown show">
        					<a class="btn-secondary dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Setting</a>
                             <ul class="dropdown-menu logout" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" id="logoutbutton" href="#">Logout</a></li>
                             </ul>
                			<i class="fa fa-caret-down" aria-hidden="true"></i>   
                        </div>    
      					</li>
    				</ul>
          		</div>
  			</div>
	 </div>
    </nav>
    