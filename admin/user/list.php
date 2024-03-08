<?php
	 if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

?> 
       	 <div class="col-lg-12">
            <h1 class="page-header">List of Users  <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Add User</a>  </h1>
       		</div>
        	<!-- /.col-lg-12 --> 
   		 	<div class="col-lg-12"> 
				<table id="dash-table" class="table  table-bordered table-hover table-responsive" style="font-size:12px;" cellspacing="0"> 
				  <thead>
				  	<tr>
				  		<th>Account ID</th>
				  		<th> Account Name</th>
				  		<th>Username</th>
				  		<th>Role</th>
				  		<th width="10%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  <?php 
// Check if the 'ADMIN_USERID' session key is set
if(isset($_SESSION['ADMIN_USERID'])) {
    // Proceed with fetching user data and displaying the table
    $mydb->setQuery("SELECT * FROM  `tblusers`");
    $cur = $mydb->loadResultList();

    foreach ($cur as $result) {
        echo '<tr>';
        echo '<td>' . $result->USERID.'</a></td>';
        echo '<td>' . $result->FULLNAME.'</a></td>';
        echo '<td>'. $result->USERNAME.'</td>';
        echo '<td>'. $result->ROLE.'</td>';

        // Check conditions for disabling buttons based on user role or ID
        if($result->USERID == $_SESSION['ADMIN_USERID'] || $result->ROLE == 'MainAdministrator' || $result->ROLE == 'Administrator') {
            $active = "Disabled";
        } else {
            $active = "";
        }

        echo '<td align="center"> 
                  <a title="Edit" href="index.php?view=edit&id='.$result->USERID.'"  class="btn btn-primary btn-xs">  
                      <span class="fa fa-edit fw-fa"></span>
                  </a>
                  <a title="Delete" href="controller.php?action=delete&id='.$result->USERID.'" class="btn btn-danger btn-xs" '.$active.'>
                      <span class="fa fa-trash-o fw-fa"></span>
                  </a>
              </td>';
        echo '</tr>';
    }
} else {
    // Handle the case where 'ADMIN_USERID' is not set
    // You might display an error message or redirect the user
    echo "<p>Admin user ID is not set.</p>";
}
?>

				  </tbody>
					
				</table>  
			</div> 
 