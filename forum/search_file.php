
		    <div class="col-md-4">
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Recent post Search</h4>
                    <form action='index.php?option1=search' method='post'>
					<div class="input-group">
						
                       <input type="text" class="form-control" autocomplete='off' name='search_data' id="searchbox" value="">
                        <span class="input-group-btn">
                            <button class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
						</form>
                    </div>


	<script src="jquery-1.11.2.min.js"></script>
<script>
$(document).ready(function(){

$("#drop").hide();
$("#searchbox").keyup(function() 
{
var searchbox = $(this).val();
var dataString = 'searchword='+ searchbox;

//alert(dataString);
if(searchbox=='')
{


}
else
{
$.ajax({
type: "POST",
url:"search_data.php",
data: dataString,
cache: false,
success: function(html)
{
	$("#drop").html(html).show();

	$("#drop li").click(function(){
	
		var r=$(this).text();
			

	//alert(r);
	$("#searchbox").val(r);
	
	//$('.dropdown-menu').attr('value',r);

$("#drop").hide();

	});

}
});
}return false; 
});
});
</script>

<div class="btn-group" role="group1">
     <ul class="dropdown-menu" id='drop'style="list-style:none; width:250px;">

	 </ul>
 </div>
         
		     <!-- /.input-group -->

                </div>
				