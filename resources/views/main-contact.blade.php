<section class="contact-section section-padding" id="section_5">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 col-12">
                <form action="{{ route('contactSend') }}" method="post" class="custom-form contact-form" role="form">
                    @csrf
                    <h2 class="mb-4 pb-2">Kontak Energia</h2>
                    @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-floating">
                                <input type="text" name="sender_name" id="full-name" class="form-control @error('sender_name') is-invalid @enderror" placeholder="Full Name" value="{{ old('sender_name') }}" required="">
                                
                                <label for="floatingInput">Full Name</label>
                                @error('sender_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12"> 
                            <div class="form-floating">
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" value="{{ old('email') }}" required="">
                                
                                <label for="floatingInput">Email address</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12 col-12">
                            <div class="form-floating">
                                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" placeholder="Describe message here" >{{ old('name') }}</textarea>
                                
                                <label for="floatingTextarea">Message</label>
                                @error('message')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="form-control">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-6 col-12">
                <div class="contact-info mt-5">
                    <div class="contact-info-item">
                        <div class="contact-info-body">
                            <strong>Bekasi, Indonesia</strong>

                            <p class="mt-2 mb-1">
                                <a href="tel: 010-020-0340" class="contact-link">
                                    +62-21 84982447
                                </a>
                            </p>

                            <p class="mb-0">
                                <a href="mailto:info@company.com" class="contact-link">
                                    info@energiatransmedia.co.id
                                </a>
                            </p>
                        </div>

                        <div class="contact-info-footer">
                            <a href="#">Directions</a>
                        </div>
                    </div>

                    <img src="{{ asset('template-company') }}/images/WorldMap.svg" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </div>
</section>