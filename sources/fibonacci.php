<?php 
	include('index.php');
 ?>
<div class="container">

        <form method="$_GET" action="another.php">
            <fieldset>
	            <div class="form-group">
				    <label for="powerof" class="col-sm-2 control-label">Fibonacci:</label>
				    <div class="col-sm-3">
				      <input type="text" class="form-control" id="powerof" name="powerof">
				    </div>

	                <div class="form-group">
	    				<div class="col-sm-offset-2 col-sm-12">
	      					<button type="submit" class="btn btn-default" name="Go">Calcular</button>
					    </div>
					</div>
	            </div>
            </fieldset>
        </form>
</div>