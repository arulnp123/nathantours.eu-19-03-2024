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
                            <th> Status </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($hottours as $hottour)
                          <tr>
                            <td> {{ $hottour->id }} </td>
                            <td> {{ $hottour->Trip_ID }} </td>
                            <td> {{ $hottour->packages_name }} </td>
                            <td> {{ $hottour->packages_description }} </td>
                            <td> {{ $hottour->price }} </td>
                            <td> <img src="{{ URL::to('/') }}/assets/photo/{{ $hottour->photo }}" width="25%"
                                                height="25%"> </td>
                            <td> <button type="button" class="btn btn-gradient-primary btn-sm"><a href="{{ url('/admin/edit_hottours') }}/{{ $hottour->id }}">Edit</button> </td>

                            <td> <button type="button" class="btn btn-gradient-success btn-sm"><a  href="{{ url('/delete_hottours' ,$hottour->id) }}">Delete</button> </td>
                            
                            <td> <label class="badge badge-success">{{ $hottour->status }}</label></td>

                            <!-- <td> <text type="text" class="btn btn-gradient-danger btn-sm"><a href="{{ url('/admin/add_img_hottours') }}/{{ $hottour->id }}">Add</text> </td> -->
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
