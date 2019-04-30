<?php
include('includes/header.php');
include('connection.php');
?>
<main class="maincontent">
	 <div class="container box">
		<h3 align="center">ITEMS</h3>
		<br />
		<button align="right" type="button" class="btn btn-primary" id="add_button" data-toggle="modal" data-target="#itemModal" autofocus="">Add</button>
	    <br /><br />
	    <table id="user_data" class="table table-hover table-responsive">
	     <thead>
	      <tr>
	       <th width="10%">Item Id</th>
	       <th width="30%">Item Name</th>
	       <th width="20%">Item Price</th>
	       <th width="30%">Item Category</th>
	       <th width="10%">Delete</th>
	      </tr>
	     </thead>
	     <tbody>
	     	<?php
                $sql = "SELECT * from item order by item_id";
                $result = mysqli_query($connect, $sql);
                while($row = mysqli_fetch_assoc($result))
                {
                	echo '
                <tr>
                	<td>'.$row["item_id"].'</td>
                	<td>'.$row["item_name"].'</td>
                	<td>'.$row["item_price"].'</td>
                	<td>'.$row["item_category"].'</td>
                	<td><button align="right" type="button" class="btn btn-danger btn-sm" id="add_button" data-toggle="modal" data-target="#itemModal" autofocus="">Delete</button></td>
                </tr>
                ';
   
   	            }
	     	?>
	     </tbody>
	    </table>
		</div>
 
<div id="itemModal" class="modal fade">
 <div class="modal-dialog modal-dialog-centered">
  <form method="post" id="item_form" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header">
     <h4 class="modal-title">Add Item</h4>
     <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
     <label>Enter Item Name</label>
     <input type="text" name="item_name" id="item_name" class="form-control" />
     <br />
     <label>Enter Item Price</label>
     <input type="text" name="item_price" id="item_price" class="form-control" />
     <br />
     <label>Enter Item Category</label>
     <input type="text" name="item_category" id="item_category" class="form-control" />
     <br />
     <label>Select Item Image</label>
     <input type="file" name="item_image" id="item_image" />
     <span id="item_uploaded_image"></span>
    </div>
    <div class="modal-footer">
     <input type="hidden" name="item_id" id="item_id" />
     <input type="hidden" name="operation" id="operation" />
     <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </div>
  </form>
 </div>
</div>
</main>

<!-- <script type="text/javascript" language="javascript" >
$(document).ready(function(){
 $('#add_button').click(function(){
  $('#item_form')[0].reset();
  $('.modal-title').text("Add User");
  $('#action').val("Add");
  $('#operation').val("Add");
  $('#item_uploaded_image').html('');
 });
 
 var dataTable = $('#user_data').DataTable({
  "processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"includes/fetch.php",
   type:"POST"
  },
  "columnDefs":[
   {
    "targets":[0, 3, 4],
    "orderable":false,
   },
  ],

 });

 $(document).on('submit', '#item_form', function(event){
  event.preventDefault();
  var item_name = $('#item_name').val();
  var item_price = $('#item_price').val();
  var item_category = $('#item_category').val();
  var extension = $('#item_image').val().split('.').pop().toLowerCase();
  if(extension != '')
  {
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#item_image').val('');
    return false;
   }
  } 
  if(item_name != '' && item_price != '' && item_category!='')
  {
   $.ajax({
    url:"insert.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
     alert(data);
     $('#item_form')[0].reset();
     $('#itemModal').modal('hide');
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 // $(document).on('click', '.update', function(){
 //  var item_id = $(this).attr("id");
 //  $.ajax({
 //   url:"fetch_single.php",
 //   method:"POST",
 //   data:{item_id:item_id},
 //   dataType:"json",
 //   success:function(data)
 //   {
 //    $('#itemModal').modal('show');
 //    $('#item_name').val(data.item_name);
 //    $('#item_price').val(data.item_price);
 //    $('#item_category').val(data.item_category);
 //    $('.modal-title').text("Edit User");
 //    $('#item_id').val(item_id);
 //    $('#item_uploaded_image').html(data.user_image);
 //    $('#action').val("Edit");
 //    $('#operation').val("Edit");
 //   }
 //  })
 // });
 
 // $(document).on('click', '.delete', function(){
 //  var item_id = $(this).attr("id");
 //  if(confirm("Are you sure you want to delete this?"))
 //  {
 //   $.ajax({
 //    url:"delete.php",
 //    method:"POST",
 //    data:{item_id:item_id},
 //    success:function(data)
 //    {
 //     alert(data);
 //     dataTable.ajax.reload();
 //    }
 //   });
 //  }
 //  else
 //  {
 //   return false; 
 //  }
 // });
 
 
});
</script>
 -->

<?php
include('includes/footer.php');
?>
