@extends('layouts.app')
@section('content')

<!--     *********    CONTACT US 1     *********      -->
<div class="section section-contactus cd-section section-image" id="contact-us" style="background-image: url('{{ asset('img/sections/soroush-karimi.jpg') }}')">
  <div class="contactus-1 ">
    <div class="container">
      <div class="row">
        <div class="col-md-10 ml-auto mr-auto">
          <div class="card card-contact no-transition n_section_transparent">
            <h3 class="card-title text-white text-center">Skontaktuj się ze mną</h3>
            <div class="row">
              <div class="col-md-5 ml-auto">
                <div class="card-body n_text-white">
                  <div class="info info-horizontal">
                    <div class="icon icon-info">
                        <ion-icon name="home"></ion-icon>
                    </div>
                    <div class="description">
                      <h4 class="info-title">Znajdziesz mnie w:</h4>
                        <p>11-600 Węgorzewo,
                        <br>Polska
                      </p>
                    </div>
                  </div>
                  <div class="info info-horizontal">
                    <div class="icon icon-danger">
                        <ion-icon name="call"></ion-icon>
                    </div>
                    <div class="description">
                      <h4 class="info-title">Możesz zadzwonić</h4>
                        <p>Wioletta DEMKO
                        <br>+48 600 397 484
                        <br>Pn - Pt, 8:00-22:00
                        <br>So - Nd, 10:00-18:00
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5 mr-auto">
                <form action="{{ route('contact_send') }}" role="form" id="contact-form" method="POST">
                  @csrf
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group label-floating n_placeholder">
                          <label class="control-label">Jak mogę się do Ciebi zwracać</label>
                          <input type="text" name="nick" class="form-control{{ $errors->has('nick') ? ' is-invalid' : '' }} bg-transparent text-white bg-transparent" placeholder="Jak się nazywasz">
                            @if ($errors->has('nick'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nick') }}</strong>
                              </span>
                            @endif
                        </div>
                        <div class="form-group label-floating n_placeholder">
                          <label class="control-label">Możesz zostawić nr telefonu</label>
                          <input type="text" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }} bg-transparent text-white bg-transparent" placeholder="Nr telefonu">
                            @if ($errors->has('phone'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                              </span>
                            @endif
                        </div>
                      <div class="form-group label-floating n_placeholder">
                        <label class="control-label">Twój adres Email</label>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} bg-transparent text-white" placeholder="Email" />
                          @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                            </span>
                          @endif
                      </div>
                      <div class="form-group label-floating n_placeholder">
                        <label class="control-label">Zostaw wiadomość</label>
                        <textarea name="message" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }} bg-transparent text-white" id="message" rows="6" placeholder="Wiadomość"></textarea>
                          @if ($errors->has('message'))
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('message') }}</strong>
                            </span>
                          @endif
                      </div>
                    </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-outline-success btn-round">Wyślij</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--     *********    END CONTACT US 1      *********      -->

<div id="contactUsMap" class="big-map"></div>
@endsection