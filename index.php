<?php include 'header.php'; ?>

	<!--<form class="form-group" action="search.php" method="POST">
			<div class="input-group col-md-4 col-md-offset-4 ">
			
			<input  class="form-control" type="text" name="search" placeholder="Search">
			
			<button class="form-control btn btn-primary" type="submit" name="submit-search">Search</button>

			<Start of the custom code

			


			<END OF CUSTOM CODE
		</div)-->

		<!-- Update 12-07-2017 -->
<form action="search.php" method="POST">
		<div class="col-md-6 col-md-offset-3">
    		
            <div id="custom-search-input">
                <div class="input-group">
                	
	                    <input type="text" class="form-control input-lg" placeholder="Search" name="search"/>
	                    <span class="input-group-btn">
	                        <button class="btn btn-info btn-lg" type="submit" name="submit-search">
	                            <i class="glyphicon glyphicon-search"></i>
	                        </button>
	                    </span>
                    
                </div>
            </div>
        </div>
</form>		

	<!--</form>-->
	
<?php include 'footer.php'; ?>