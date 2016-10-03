<style>
*{margin:0px}
#searchbox
{
width:40%;
border:solid 1px #000;
padding:3px;
}
#display
{
width:40%;
display:none;
float:right; margin-right:30px;
border-left:solid 1px #dedede;
border-right:solid 1px #dedede;
border-bottom:solid 1px #dedede;
overflow:hidden;
}
.display_box
{
padding:4px; 
border-top:solid 1px #dedede; 
font-size:12px; 
height:10%;
}
.display_box:hover
{
background:#3b5998;
color:#FFFFFF;
}
</style>
</script>


	<script src="jquery-1.11.2.min.js"></script>
<script>
$(document).ready(function(){
$(".search").keyup(function() 
{
var searchbox = $(this).val();
var dataString = 'searchword='+ searchbox;

//alert(dataString);
if(searchbox=='')
{}
else
{
$.ajax({
type: "POST",
url: "search_data.php",
data: dataString,
cache: false,
success: function(html)
{
$("#display").html(html).show();
}
});
}return false; 
});
});
</script>

<input type="text" class="search" id="searchbox" />
<div id="display">
</div>