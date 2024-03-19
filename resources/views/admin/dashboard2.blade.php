   @extends('admin/layouts.app')
    @section('admin/content')

    <div class="main-panel">
          <div class="content-wrapper">
          <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Popular Tour Booking Details</h4>
                    <div class="table-responsive">
                    <table class="table">
    <tbody>
    <tr>
    <th> Packages Name </th>
    <th> price </th>
    <th> name </th>
    <th> email </th>
    <th> confirm_email </th>
    <th> select_date </th>

    <th> phone </th>
    <th> adult_over_12 </th>
    <th> kid_4_to_12_years </th>
    <th> kid_below_4 </th>
    <th> message </th>
    <th> created_at </th>
  </tr>
    </tbody>


                        @foreach ($selects as $select)
                        <tr>
                          <td>{{ $select->packages_name }}</td>
                          <td>{{ $select->price }}</td>
                          <td>{{ $select->name }}</td>
                          <td>{{ $select->email }}</td>
                          <td>{{ $select->confirm_email }}</td>
                          <td>{{ $select->select_date }}</td>
                          
                          <td>{{ $select->phone }}</td>
                          <td>{{ $select->adult_over_12 }}</td>
                          <td>{{ $select->kid_4_to_12_years }}</td>
                          <td>{{ $select->kid_below_4 }}</td>
                          <td>{{ $select->message }}</td>
                          <td>{{ $select->created_at }}</td>
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
