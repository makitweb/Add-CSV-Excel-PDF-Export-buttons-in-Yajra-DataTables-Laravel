<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add CSV Excel PDF Export buttons in Yajra DataTables - Laravel</title>

	<!-- Datatables CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"/>
	<link href='https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>

	<style type="text/css">
   .dt-buttons{
       width: 100%;
   }
   </style>

</head>
<body>
	<div>
		<table id='empTable' >
	          <thead >
	              <tr>
	                 <td>ID</td>
	                 <td>Name</td>
	                 <td>Email</td>
	                 <td>Gender</td>
	                 <td>City</td>
	                 <td>Status</td>
	              </tr>
	          </thead>
	    </table>  
	</div>

	<!-- Script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
		$('#empTable').DataTable({
			processing: true,
			serverSide: true,
			ajax: "{{ route('getDataTableData') }}",
			dom: 'Blfrtip',
		    buttons: [
		       {
					extend: 'pdf',
					exportOptions: {
						columns: [1,2,3,4,5] // Column index which needs to export
					}
				},
				{
					extend: 'csv',
					exportOptions: {
						columns: [0,5] // Column index which needs to export
					}
				},
				{
					extend: 'excel',
				}
		     ],
			columns: [
				{data: 'id'},
				{data: 'emp_name'},
				{data: 'email'},
				{data: 'gender'},
				{data: 'city'},
				{data: 'status'},
			]
		});
	});
	</script>
</body>
</html>