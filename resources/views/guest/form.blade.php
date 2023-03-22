<section data-bs-version="5.1" class="form7 cid-ts45G35gbR bg-dark text-light" id="form7-d">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Form Booking</strong>
            </h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="{{route('guest.bookingStore')}}" method="post">
                    @csrf
                <div class="card container-fluid">
                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="E-Mail" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="phone" id="phone" placeholder="No Telepon / Whatsapp. Contoh: 08123123123" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <select name="travel_id" id="travel_id" class="form-control" required>
                            <option value=>Pilih Travel</option>
                            @if(!empty($datas))
                            @foreach($datas as $data)
                            <option value="{{$data->id}}">{{$data->judul}} Rp.{{$data->harga}}</option>
                            @endforeach
                            @else
                            <option value=>Data tidak tersedia</option>
                            @endif
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success w-100">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>