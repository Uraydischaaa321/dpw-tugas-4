@extends ('frontview.template.base')

@section ('content')

<section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          What Says Our Customers
        </h2>
      </div>
      <div class="col-md-9 col-lg-7 mx-auto px-0">
        <div class="box">
          <div class="b-1">
            <div class="client_id">
              <div class="img-box">
                <img src="{{ url('public/shop') }}/images/client-1.jpg" alt="">
              </div>
              <div class="name">
                <h5>
                  Maya Jonas
                </h5>
                <h6>
                  Housewife
                </h6>
              </div>
            </div>
          </div>
          <div class="client_detail">
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when
              looking at its layout. The point of using Lorem
            </p>
          </div>
        </div>
        <div class="box">
          <div class="client_id">
            <div class="img-box">
              <img src="{{ url('public/shop') }}/images/client-2.jpg" alt="">
            </div>
            <div class="name">
              <h5>
                Helen Law
              </h5>
              <h6>
                Housewife
              </h6>
            </div>
          </div>
          <div class="client_detail">
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when
              looking at its layout. The point of using Lorem
            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section>


@endsection