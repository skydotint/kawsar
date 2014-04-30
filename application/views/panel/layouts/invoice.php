<h3>List of Invoice</h3>

<table class="table table-bordered table-striped datatable" id="table-2">
	<thead>
		<tr>
			<th>
				<div class="checkbox checkbox-replace">
					<input type="checkbox" id="chk-1">
				</div>
			</th>
			<th>Student Name</th>
			<th>Average Grade</th>
			<th>Curriculum / Occupation</th>
			<th>Actions</th>
		</tr>
	</thead>
	
	<tbody>
		<tr>
			<td>
				<div class="checkbox checkbox-replace">
					<input type="checkbox" id="chk-1">
				</div>
			</td>
			<td>Randy S. Smith</td>
			<td>8.7</td>
			<td>Social and human service</td>
			<td>
								
				<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
				</a>
				
				<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					View
				</a>
			</td>
		</tr>
		
		<tr>
			<td>
				<div class="checkbox checkbox-replace">
					<input type="checkbox" id="chk-1">
				</div>
			</td>
			<td>Randy S. Smith</td>
			<td>8.7</td>
			<td>Social and human service</td>
			<td>
								
				<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
				</a>
				
				<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					View
				</a>
			</td>
		</tr>
		<tr>
			<td>
				<div class="checkbox checkbox-replace">
					<input type="checkbox" id="chk-1">
				</div>
			</td>
			<td>Randy S. Smith</td>
			<td>8.7</td>
			<td>Social and human service</td>
			<td>
								
				<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
				</a>
				
				<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					View
				</a>
			</td>
		</tr>
		<tr>
			<td>
				<div class="checkbox checkbox-replace">
					<input type="checkbox" id="chk-1">
				</div>
			</td>
			<td>Randy S. Smith</td>
			<td>8.7</td>
			<td>Social and human service</td>
			<td>
								
				<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
				</a>
				
				<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					View
				</a>
			</td>
		</tr>
		<tr>
			<td>
				<div class="checkbox checkbox-replace">
					<input type="checkbox" id="chk-1">
				</div>
			</td>
			<td>Randy S. Smith</td>
			<td>8.7</td>
			<td>Social and human service</td>
			<td>
								
				<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
				</a>
				
				<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					View
				</a>
			</td>
		</tr>
		
	</tbody>
</table>

<script type="text/javascript">
jQuery(window).load(function()
{
	$("#table-2").dataTable({
		"sPaginationType": "bootstrap",
		"sDom": "t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
		"bStateSave": false,
		"iDisplayLength": 8,
		"aoColumns": [
			{ "bSortable": false },
			null,
			null,
			null,
			null
		]
	});
	
	$(".dataTables_wrapper select").select2({
		minimumResultsForSearch: -1
	});
	
	// Highlighted rows
	$("#table-2 tbody input[type=checkbox]").each(function(i, el)
	{
		var $this = $(el),
			$p = $this.closest('tr');
		
		$(el).on('change', function()
		{
			var is_checked = $this.is(':checked');
			
			$p[is_checked ? 'addClass' : 'removeClass']('highlight');
		});
	});
	
	// Replace Checboxes
	$(".pagination a").click(function(ev)
	{
		replaceCheckboxes();
	});
});
	
// Sample Function to add new row
var giCount = 1;

function fnClickAddRow() 
{
	$('#table-2').dataTable().fnAddData(['<div class="checkbox checkbox-replace"><input type="checkbox" /></div>', giCount+".2", giCount+".3", giCount+".4", giCount+".5" ]);
	
	replaceCheckboxes(); // because there is checkbox, replace it
	
	giCount++;
}
</script>