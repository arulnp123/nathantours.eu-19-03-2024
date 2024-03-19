   @extends('admin/layouts.app')
    @section('admin/content')
    
         
    <div class="main-panel">
          <div class="content-wrapper">
            <div class="container">
          <div class="page-header">
          <div class="col-6 grid-margin stretch-card">
              <h3 class="page-title"> View Users </h3>
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
                    <h4 class="card-title">View Users</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> ID </th>
                            <th> Name </th>
                            <th> Email address </th>
                            <th> Mobile </th>
                            <th> Gender </th>
                            <th> Image </th>
                            <th> City  </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $users)
                          <tr>
                            <td> {{ $users->id }} </td>
                            <td> {{ $users->name }} </td>
                            <td> {{ $users->email }} </td>
                            <td> {{ $users->phone }} </td>
                            <td> {{ $users->gender }} </td>
                            <td> <img src="{{ URL::to('/') }}/assets/photo/{{ $users->image }}" width="25%"
                                                height="25%">  </td>
                            <td> {{ $users->city }} </td>
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
@endsection
