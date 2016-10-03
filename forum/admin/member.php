
<style>

</style>
<?php
		include('../db.php');


?>
	<div class="col-md-12" >
	
			<div class='panel panel-body' id='load1' style='margin-left:150px;'>
	
				</div>
			
		<div class="panel panel-default">
			
			<div class="panel-heading"style="background-color:#284761; color:#fff; ">
				<h4 style='margin-left:350px;'><span class='glyphicon glyphicon-user'>&nbsp;MemberLIST</h4>
			
			</div>
				<div class="panel panel-body">
				
		
					<?php
					
					/////funnction for paginate
					function paginate($reload, $page, $tpages) {
    $adjacents = 2;
    $prevlabel = "&lsaquo; Prev";
    $nextlabel = "Next &rsaquo;";
    $out = "";
    // previous
    if ($page == 1) {
        $out.= "<span>" . $prevlabel . "</span>\n";
    } elseif ($page == 2) {
        $out.= "<li><a  href=\"" . $reload . "\">" . $prevlabel . "</a>\n</li>";
    } else {
        $out.= "<li><a  href=\"" . $reload . "&amp;page=" . ($page - 1) . "\">" . $prevlabel . "</a>\n</li>";
    }
  
    $pmin = ($page > $adjacents) ? ($page - $adjacents) : 1;
    $pmax = ($page < ($tpages - $adjacents)) ? ($page + $adjacents) : $tpages;
    for ($i = $pmin; $i <= $pmax; $i++) {
        if ($i == $page) {
            $out.= "<li  class=\"active\"><a href=''>" . $i . "</a></li>\n";
        } elseif ($i == 1) {
            $out.= "<li><a  href=\"" . $reload . "\">" . $i . "</a>\n</li>";
        } else {
            $out.= "<li><a  href=\"" . $reload . "&amp;page=" . $i . "\">" . $i . "</a>\n</li>";
        }
    }
    
    if ($page < ($tpages - $adjacents)) {
        $out.= "<a style='font-size:11px' href=\"" . $reload . "&amp;page=" . $tpages . "\">" . $tpages . "</a>\n";
    }
    // next
    if ($page < $tpages) {
        $out.= "<li><a  href=\"" . $reload . "&amp;page=" . ($page + 1) . "\">" . $nextlabel . "</a>\n</li>";
    } else {
        $out.= "<span style='font-size:11px'>" . $nextlabel . "</span>\n";
    }
    $out.= "";
    return $out;
}

					
					
					
					
					
					
						$selec1=$db->query("select * from user ");
	
	
	
	$per_page = 1;   
	$total_results = mysqli_num_rows($selec1);
	//echo $total_results;
	 $total_pages = ceil($total_results / $per_page); //total pages we going to have
	//		$total_pages;
	//-------------if page is setcheck------------------//
	if (isset($_GET['page'])) {
	    $show_page = $_GET['page']; //current page
    	if ($show_page > 0 && $show_page <= $total_pages) {
        	$start = ($show_page - 1) * $per_page;
        	$end = $start + $per_page;
    } 
	else {
        // error - show first set of results
        $start = 0;              
        $end = $per_page;
    }
} 	else {
    // if page isn't set, show first set of results
    $start = 0;
    $end = $per_page;
}
// display pagination
$page = intval($_GET['page']);
$tpages=$total_pages;
if ($page <= 0)
   {
   
    $page = 3;
 	}

	
    $reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages;
    echo '<nav ><div class="pager"><ul>';
    if ($total_pages > 1) {
        	
			
			echo paginate($reload, $show_page, $total_pages);
    
	
	}
			
                    echo "</ul></div></nav>";
    // loop through results of database query, displaying them in the table 
    for ($i = $start; $i < $end; $i++) {
        // make sure that PHP doesn't try to show results that don't exist
        if ($i == $total_results) {
            break;
        }
        // echo out the contents of each row into a table
           
    // close table>

// pagination 
//echo $start;}
//echo $per_page;
	}		echo "<div id='aa'></div>";	//echo "cwg";
	 
	 
	 ?>

			
		
				</div>
		
		</div>
	</div>


	<script src="../jquery-1.11.2.min.js"></script>
		<script>
		
			
			setTimeout(function(){
      				$("#aa").load('mem.php');        
  }, 500)
			
	$(document).ready(function(){
			
			$('[input=hidden]').click(function(){
			
			
			var  sta=$(this).attr('id');
			
			
			alert(sta);
			
			});
			
			
			//$("#load1").hide();
 $('.btn-primary').prop('disabled', true);
    		
		
		$('.btn-primary').click(function(){
	
			var num_id=$(this).attr('id');
		//		alert(num_id);
	//		alert("creer");
//	alert(" vdw");
	
					 var V_data = 'num_id= ' + num_id;
						
						$.ajax({
						type: "POST",
						url: "pagination.php",
						data: V_data,
						cache: false,
						
					
			
						success: function(result){
					//alert(result);
							 $('.btn-primary').prop('disabled', true);
    
							//$('#'+num_id).html(result);
								$('#a'+num_id).html(result);
				//			$("#load1").show();
					
				//	var data=result;
		
		//$("#user").val(data);
		
	}
		
		
		});
		});
		
	
	});
	
	</script>
								
