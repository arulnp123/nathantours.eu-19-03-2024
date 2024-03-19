@extends('admin/layouts.app')
    @section('admin/content')

               <!-- partial -->
               <div class="main-panel">
          <div class="content-wrapper">
            <div class="container">
          <div class="page-header">
          <div class="col-6 grid-margin stretch-card">
              <h3 class="page-title"> Add packages </h3>
              </div>
              <div class="col-6 grid-margin stretch-card">
          
              </div>
            </div>
            </div>
            <div class="card">
                  <div class="card-body">
				  	<form action="{{ url('/admin/savepopulartours') }}" method="post" enctype="multipart/form-data" >
						{{ csrf_field() }}
            <div class="form-group">
                        <label for="price">Trip ID</label>
                        <input type="text" class="form-control" name="Trip_ID" placeholder="Trip_ID">
                      </div>
                      <div class="form-group">
                        <label for="packages_name">Packages_Name</label>
                        <input type="text" class="form-control" name="packages_name" placeholder="Packages Name">
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input required="required" type="file" class="form-control" name="photo"  placeholder="Upload Image">
                        <div class="input-group col-xs-12">
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="packages_description">Packages Description</label>
                        <textarea class="form-control" name="packages_description" rows="4"  placeholder="Packages Description"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Price">
                      </div>

                      <table class="table table-borderless" id="dynamicTable">
                            <tr>
                                <th>Tour Dates</th>
                                <th>Add</th>
                            </tr>
                            <tr>
                                <td><input type="date" name="addmore[0][tourdate]" 
                                        class="form-control" /></td>
                                <td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>
                            </tr>
                        </table>
                        <br>
				  
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
             </div>
            </div>
@endsection

@push('page_scripts')

<script type="text/javascript">
        var i = 0;

        $("#add").click(function() {
            ++i;

            $("#dynamicTable").append('<tr><td><input type="date" class="form-control" name="addmore[' + i +'][tourdate]" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>'
            );
        });

        $(document).on('click', '.remove-tr', function() {
            $(this).parents('tr').remove();
        });
    </script>
    @endpush


