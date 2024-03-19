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
                        @foreach($populartours as $populartour)
                          <tr>
                            <td> {{ $populartour->id }} </td>
                            <td> {{ $populartour->Trip_ID }} </td>
                            <td> {{ $populartour->packages_name }} </td>
                            <td> {{ $populartour->packages_description }} </td>
                            <td> {{ $populartour->price }} </td>
                            <td> <img src="{{ URL::to('/') }}/assets/photo/{{ $populartour->photo }}" width="25%"
                                                height="25%"> </td>
                            <td> <button type="button" class="btn btn-gradient-primary btn-sm"><a href="{{ url('/admin/edit_populartours') }}/{{ $populartour->id }}">Edit</button> </td>

                            <td> <button type="button" class="btn btn-gradient-success btn-sm"><a  href="{{ url('/delete_populartours' ,$populartour->id) }}">Delete</button> </td>
                            
                            <td> <label class="badge badge-success">{{ $populartour->status }}</label></td>

                            <!-- <td> <text type="text" class="btn btn-gradient-danger btn-sm"><a href="{{ url('/admin/add_img_populartours') }}/{{ $populartour->id }}">Add</text> </td> -->
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
