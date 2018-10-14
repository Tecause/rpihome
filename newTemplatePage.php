<script type="text/javascript" src="./js/TemplateNavigation.js"></script>


<div style="max-width: 100%;">
	
	<center>
	<div id="templateNames" class="col-3 mx-auto">
		
		<h3 class="font-weight-bold">Choose Template:</h3>
		<div class="form-group">
			
			<select class="form-control" id="templateList">

			</select>

			<div class="templateMenu mt-2 ml-4">
			
				<input id="ActivateTemplate" type="button" class="btn btn-success" value="Activate"><br>
				<input id="EditTemplate" type="button" class="btn btn-warning" value="Edit">
				<input id="DeleteTemplate" type="button" class="btn btn-danger" value="Delete">
				<input id="modalPopUpAddTemplate" type="button" class="btn btn-primary" value="Add Template" data-toggle="modal" data-target="#modalAddTemplate">

			</div>

		</div>

	</div>
	</center>

	<div id="templateContent" class="border bg-transparent" style="width: 90%; height: 55vh;">
		


	</div>

</div>

<div class="modal fade" id="modalAddTemplate">

	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<div class="modal-header">
				<h1>Add Template</h1>
				<span class="close" data-dismiss="modal">&times;</span>
			</div>

			<div class="modal-body" id="modalBodyAddTemplate">
				

			</div>

			<div class="modal-footer">
				<div class="mx-auto">
					<div class="form-group">
						<input type="text" id="addTemplateName" class="form-control" placeholder="Template Name...">
					</div>
					<div class="form-group">
						<input type="button" id="addTemplateSave" class="form-control btn btn-primary" value="Save Template">
					</div>
				</div>

			</div>


		</div>

	</div>
	

</div>