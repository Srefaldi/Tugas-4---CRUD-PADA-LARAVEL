@extends('layout/aplikasi')
@section('konten')
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($data as $item)
            <div class="col">
                <div class="card h-100 border">
                    <img src="{{ asset('storage/images/' . $item->product_image) }}" class="card-img-top" alt=""
                        style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->product_name }}</h5>
                        <p class="card-text">Rp. {{ $item->product_price }}</p>
                        <a href="{{ url('/product/' . $item->id) }}" class="btn btn-success">Detail</a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $data->links() }}
@endsection
