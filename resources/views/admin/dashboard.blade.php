   @extends('admin/layouts.app')
    @section('admin/content')

               <!-- partial -->
               <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{ asset('assetss/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Weekly Sales <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">$ 15,0000</h2>
                    <h6 class="card-text">Increased by 60%</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{ asset('assetss/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Weekly Orders <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">45,6334</h2>
                    <h6 class="card-text">Decreased by 10%</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{ asset('assetss/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Visitors Online <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">95,5741</h2>
                    <h6 class="card-text">Increased by 5%</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Popular Tour Booking</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                           <th> Packages Name </th>
                            <th> Name </th>
                            <th> Price </th>
                            <th> Email </th>
                            <th> Confirm Email </th>
                            <th> Select Date </th>

                            <th> Phone </th>
                            <th> Adult Over 12 </th>
                            <th> Kid (4 to 12) Years </th>
                            <th> Kid below 4 </th>
                            <th> Message </th>
                            <th> Created At </th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($booking as $book)
                        <tr>
                        <td>{{ $book->packages_name }}</td>
                          <td>{{ $book->price }}</td>
                          <td>{{ $book->name }}</td>
                          <td>{{ $book->email }}</td>
                          <td>{{ $book->confirm_email }}</td>
                          <td>{{ $book->select_date }}</td>

                          <td>{{ $book->phone }}</td>
                          <td>{{ $book->adult_over_12 }}</td>
                          <td>{{ $book->kid_4_to_12_years }}</td>
                          <td>{{ $book->kid_below_4 }}</td>
                          <td>{{ $book->message }}</td>
                          <td>{{ $book->created_at }}</td>
   
           
           
        </tr>
        @endforeach
    </tbody>
</table>
  </div>
  </div>
  </div>
                      
<br>
<br>
<br>



<div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Hot Tour Booking</h3>
                    <div class="table-responsive">
                      <table class="table">
                    
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> packages_name </th>
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
                      </thead>
                      
                      @foreach ($booking as $books)
                        <tr>
            <td>{{ $books->packages_name }}</td>
            <td>{{ $books->price }}</td>
            <td>{{ $books->name }}</td>
            <td>{{ $books->email }}</td>
            <td>{{ $books->confirm_email }}</td>
            <td>{{ $books->select_date }}</td>
           
            <td>{{ $books->phone }}</td>
            <td>{{ $books->adult_over_12 }}</td>
            <td>{{ $books->kid_4_to_12_years }}</td>
            <td>{{ $books->kid_below_4 }}</td>
            <td>{{ $books->message }}</td>
            <td>{{ $books->created_at }}</td>
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
