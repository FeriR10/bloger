<section data-bs-version="5.1" class="features3 cid-ts43nNyD9o" id="features3-4">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Travel</strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Daftar Menu Travel</h5>
        </div>
        <div class="row mt-4">
            @if(!empty($datas))
            @foreach($datas as $data)
            <div class="item features-image сol-12 col-md-4 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="{{asset('assets/mobirise')}}/assets/images/izuddin-helmi-adnan-jfirqekvo3u-unsplash.jpg" style="height:400px" alt="Mobirise Website Builder">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7"><strong>{{$data->judul}}</strong></h5>
                        
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">
                            {!! $data->deskripsi !!}
                        </p>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Rp.{{number_format($data->harga,2,',','.')}}</p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="{{url('/')}}#form7-d" class="btn btn-primary item-btn display-7" target="_blank">Booking &gt;</a></div>
                </div>
            </div>
            @endforeach
            @else
            <div class="alert alert-warning">
                <h3>Data belum tersedia</h3>
            </div>
            @endif
        </div>
    </div>
</section>