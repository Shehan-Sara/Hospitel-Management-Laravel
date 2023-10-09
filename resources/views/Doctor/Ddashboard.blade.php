@extends('main')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


<div class="row justify-content-center">

    <div class="col-md-3">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
              <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
              <span class="fs-4">Sidebar</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="{{ route('Dhome') }}" class="nav-link link-body-emphasis" aria-current="page">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                  Home
                </a>
              </li>
              <li>
                <a href="#" class="nav-link active">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                  Dashboard
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-body-emphasis">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                  Orders
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-body-emphasis">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                  Products
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-body-emphasis">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                  Customers
                </a>
              </li>
            </ul>


            <br><br><br><br><br><br><br><br><br><br><br><br><br>
            <hr>

      
            <div class="dropdown">
              <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>Dr. {{ Auth::user()->name }}</strong>
              </a>
              <ul class="dropdown-menu text-small shadow" style="">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a></li>
              </ul>
            </div>

          </div>
    </div>



    <div class="col-md-9">
        <h1>This is Docotr dashboard</h1>

        <div class="row">
            <div class="col-md-3">
              <div class="card text-bg-info mb-3" style="max-width: 15rem;">
                
                <div class="card-body">
                  <h5 class="card-title">Active Patients</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

            </div>
            <div class="col-md-3">
              <div class="card text-bg-warning  mb-3" style="max-width: 15rem;">
                
                <div class="card-body">
                  <h5 class="card-title">Pending Patients</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

            </div>
            <div class="col-md-3">
              <div class="card text-bg-success  mb-3" style="max-width: 15rem;">
                
                <div class="card-body">
                  <h5 class="card-title">Done</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

            </div>
            <div class="col-md-3">
              <div class="card text-bg-secondary  mb-3" style="max-width: 15rem;">
                
                <div class="card-body">
                  <h5 class="card-title">Earning</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>

            </div>

        </div>

        

        <div class="row">

          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Case</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Other</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Having Fiver for 7 days</td>
                <td>Shehan Rashmika</td>
                <td>23 Years</td>
                <td>Male</td>
                <td>Mix a crushed clove of garlic with a pinch of rock salt</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>


        </div>
        


    </div>
</div>














@endsection