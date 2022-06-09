@extends('layouts.main')

@section('container')
    <div class="card banner">
      <div class="container text-center">
        <h4 class="display-6">CARI RESEPMU DISINI</h4>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-primary" type="submit">Search</button>
      </div>
    </div>
    <div class="container-fluid home  pt-5 pb-5">
      <div class="row">
        <div class="col-sm-6">
          <div class="card mb-5">
            <div class="row">
                <div class="col-md-4">
                  <img src="https://akcdn.detik.net.id/community/media/visual/2018/08/06/019c5136-b869-4cf8-8c09-0a5c1777c26f.jpeg?w=1000" class="img-fluid rounded-start" alt="Aisu Kohi">
                </div>
                <div class="col-md-8">
                  <div class="card-body" style="font-family: 'Gill Sans'; color: black;">
                    <h3 class="card-title">Aisu Kohi, Es Kopi Jepang</h3>
                    <p class="card-text">Aisu Kohi merupakan sebutan untuk es kopi khas Jepang yang terkenal dengan ciri khas kopi yang dibuat jadi tumpukan es baru. Di dalam dunia "perkopian", kopi Aisu kohi disebut juga kopi cold brew.</p>
                    <p class="card-text"><small class="text-muted"></small></p>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                  <img src="https://assets-eu-01.kc-usercontent.com/559bb7d3-88a4-01c1-79a3-dd4d5b2d2bb0/b952b71e-20ff-4434-9486-5aa0b4378145/1-French-Baguettes.jpg?w=1920&q=85&auto=format&lossless=1" class="img-fluid rounded-start" alt="French Baguettes">
                </div>
                <div class="col-md-8">
                  <div class="card-body" style="font-family: 'Gill Sans'; color: black;">
                    <h3 class="card-title">French Baguettes</h3>
                    <p class="card-text">Baguette adalah roti yang biasanya berbentuk panjang dan ukurannya yang besar, dan memiliki tekstur sangat renyah ketika dimakan. Diameter standar baguette kira-kira 5 atau 6 cm, tetapi panjangnya dapat mencapai 1 m. Roti ini rata-rata memiliki berat 250 gram.</p>
                    <p class="card-text"><small class="text-muted"></small></p>
                  </div>
                </div>
              </div>
          </div>
          
          <div class="d-grid gap-2 col-12 mx-auto">
            <button class="btn btn-dark" type="button" style="font-family: 'Britannic'; font-size: 30px;">
              <a class="nav-link {{ ($nama === "Resep") ? 'active' : '' }}" href="/resep">More Recipes?
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
              </svg></a>
            </button>
          </div>
        
        </div>
      </div>
        <div class="col-sm-12">
            <div class="card mb-3">
              <div class="row g-0 container-fluid banner1">
                <h4 class="display-6 text-center mb-5">Request for Any Coffee and Bakery Recipes</h4>  
                  <div class="col-md-8">
                    <div class="container">
                        <form>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPhoneNumber1" class="form-label">Phone Number</label>
                            <input type="phone" class="form-control" id="exampleInputPhoneNumber1">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputRequest1" class="form-label">Request Recipe</label>
                            <input type="request" class="form-control" id="exampleInputRequest1">
                          </div>
                          <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                          </div>
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </form>
                      </div>
                  </div>
                  <div class="col-md-4 text-center">
                    <img width="300" height="300" src="img/request.png" class="img-fluid rounded-start" alt="Request">
                  </div>
                  </div>
                </div>
            </div>          
          </div>
    </div>
    
@endsection