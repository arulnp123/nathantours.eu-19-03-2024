@extends('admin/layouts.app')
    @section('admin/content')

    <div class="main-panel">
          <div class="content-wrapper">
            <div class="container">
          <div class="page-header">
          <div class="col-6 grid-margin stretch-card">
              <h3 class="page-title"> View packages </h3>
              </div>
              <div class="col-6 grid-margin stretch-card">
              <div class="input-group">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-gradient-primary" type="button">Search</button>
                        </div>
                      </div>
              </div>
            </div>
            </div>
                 <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">View packages</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            
                            <th> ID </th>
                            <th> Trip_ID </th>
                            <th> Packages </th>
                            <th> Packages_Descriptions </th>
                            <th> Price </th>
                            <th> Image </th>
                            <th> Edit </th>
                            <th> Delete </th>
                            <th> Add Image </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($hottours as $hottours)
                          <tr>
                            <td> {{ $hottours->id }} </td>
                            <td> {{ $hottours->Trip_ID }} </td>
                            <td> {{ $hottours->packages_name }} </td>
                            <td> {{ $hottours->packages_description }} </td>
                            <td> {{ $hottours->price }} </td>
                            <td> <img src="{{ URL::to('/') }}/assets/photos/{{ $hottours->photo }}" width="25%"
                                                height="25%"> </td>
                            <td> <button type="button" class="btn btn-gradient-primary btn-sm"><a href="{{ url('/admin/edit_hottours') }}/{{ $hottours->id }}">Edit</button> </td>
                            <td> <button type="button" class="btn btn-gradient-success btn-sm"><a href="{{ url('/admin/delete_hottours') }}/{{ $hottours->id }}">Delete</button> </td>
                            <td> <button type="button" class="btn btn-gradient-danger btn-sm"><a href="{{ url('/admin/add_img_hottours') }}/{{ $hottours->id }}">Add</button> </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>
       </div>
          </div>
          </div>
         </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.php -->
@endsection
