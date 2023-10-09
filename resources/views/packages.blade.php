<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        img {
          width: 40%;
        }
        </style>

</head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  


    <header class="p-0 text-bg-success">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="navbar navbar-expand-md navbar-light text-bg-success shadow-sm">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
              <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
              <li><a href="#" class="nav-link px-2 text-warning">Pricing</a></li>
              <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
              <li><a href="#" class="nav-link px-2 text-white">About</a></li>
            </ul>
    
    
            <div class="text-end">
             
              

              @if (Route::has('login'))
              <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                  @auth
                      <a href="{{ url('/home') }}" type="button" class="btn btn-warning">Home</a>
                  @else
                      <a href="{{ route('login') }}" type="button" class="btn btn-outline-light me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                          </svg>
                        Log in</a>
                      

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}"  type="button" class="btn btn-warning">Register</a>
                          
                      @endif
                  @endauth
              </div>
          @endif
            </div>
          </div>
        </div>
      </header>

      <br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                  <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                      <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Family Starter</h4>
                      </div>
                      <div class="card-body">
                        <h1 class="card-title pricing-card-title">Rs 10k<small class="text-body-secondary fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>10 users included</li>
                          <li>2 GB of storage</li>
                          <li>Email support</li>
                          <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                      <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Family Pro</h4>
                      </div>
                      <div class="card-body">
                        <h1 class="card-title pricing-card-title">30K<small class="text-body-secondary fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>20 users included</li>
                          <li>10 GB of storage</li>
                          <li>Priority email support</li>
                          <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                      <div class="card-header py-3 text-bg-primary border-primary">
                        <h4 class="my-0 fw-normal">Primium Family</h4>
                      </div>
                      <div class="card-body">
                        <h1 class="card-title pricing-card-title">50K<small class="text-body-secondary fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>30 users included</li>
                          <li>15 GB of storage</li>
                          <li>Phone and email support</li>
                          <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                      </div>
                    </div>
                  </div>
                </div>
            
                <h2 class="display-6 text-center mb-4">Compare plans</h2>
            
                <div class="table-responsive">
                  <table class="table text-center">
                    <thead>
                      <tr>
                        <th style="width: 34%;"></th>
                        <th style="width: 22%;">Free</th>
                        <th style="width: 22%;">Pro</th>
                        <th style="width: 22%;">Enterprise</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" class="text-start">Public</th>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-start">Private</th>
                        <td></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                      </tr>
                    </tbody>
            
                    <tbody>
                      <tr>
                        <th scope="row" class="text-start">Permissions</th>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-start">Sharing</th>
                        <td></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-start">Unlimited members</th>
                        <td></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-start">Extra security</th>
                        <td></td>
                        <td></td>
                        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            
        </div>
    </div>
</div>

