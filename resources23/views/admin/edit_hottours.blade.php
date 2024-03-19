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
                    @foreach($hottours as $hottour)
				  	<form action="{{ url('/updatehottours') }}" method="post" enctype="multipart/form-data" >
						{{ csrf_field() }}
            <input type="hidden" name="tourid" value="{{ $hottour->id }}">
            <div class="form-group">
                        <label for="price">Trip ID</label>
                        <input value="{{ $hottour->Trip_ID }}" type="text" class="form-control" name="Trip_ID"  placeholder="Trip_ID">
                      </div>
                      <div class="form-group">
                        <label for="packages_name">Packages_Name</label>
                        <input value="{{ $hottour->packages_name }}" type="text" class="form-control" name="packages_name" placeholder="Packages Name">
                      </div>

                      <div class="form-group">
                        <label for="packages_name">Packages Description</label>
                        <input value="{{ $hottour->packages_description }}" type="text" class="form-control" id="packages_description" name="packages_description" placeholder="packages_description Name">
                      </div>
                      
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input value="{{ $hottour->price }}" type="number" class="form-control" name="price" placeholder="Price">
                      </div>
                      <div class="form-group">
                        <label for="price">Status</label>
                        <input value="{{ $hottour->status }}" type="text" class="form-control" name="status" placeholder="Status">
                      </div>
                      <div class="form-group">
                        <label for="photo">File upload</label>
                        <input accept="imsage/png,image/jpeg" type="file" class="form-control" id="photo" name="photo" placeholder="Upload Image">
                          <br>
                          <img src="{{ URL::to('/') }}/assets/photo/{{ $hottour->photo }}" width="15%"
                                                height="15%">
                        <div class="input-group col-xs-12">
                          </span>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                    @endforeach
                  </div>
                </div>
              </div>
             </div>
            </div>
@endsection
