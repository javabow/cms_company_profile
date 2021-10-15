@include('blog.blog_header')
    <section style="padding-bottom: 20px;padding-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <nav aria-label="breadcrumb bg-transparent">
                        <ol class="breadcrumb bg-transparent">
                          <li class="breadcrumb-item"><a href="/">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Toram</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-8 offset-md-2">
                    <center><h4>Toram Online</h4></center>
                    <p>
                    Toram Online adalah sequel dari pendahulunya yaitu Iruna, dikembangkan oleh Asobimo dimana game ini memiliki free class system, jadi kamu bisa secara bebas memilih skill apa saja yang kamu inginkan tanpa lock weapon system.
                    </p>

                    <p>Website ini punya cukup banyak guide yang bisa membantu para player yang lama maupun player baru untuk lebih paham mengenai sistem dan pastinya beberapa tips dalam game toram ini.</p>

                    <p>Kalian bisa bisa menggunakan menu yang tersedia untuk menuju ke halaman masing-masing artikel yang ada di blog ini.</p>
                    <hr class="my-4">
                </div>

                <div class="col-md-8 col-xs-12 offset-md-2">
                    <article style="">
                        <p><center>Recent Toram Article</center></p>
                        @foreach($data as $artikel)
                            <div style="padding-bottom: 20px;">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4">
                                            <a href="#"><img class="img-fluid" src="{{$artikel->image}}" alt="Card image cap"></a>
                                        </div>
                                        <div class="col-sm-12 col-md-8">
                                            <div class="card-body">
                                                <span id="label">#{{$artikel->type}}</span>
                                                {{-- <a style="color: black;" href="{{$artikel->type}}"><span id="label">#{{$artikel->type}}</span><br></a> --}}
                                                <a style="color: black;" href="toram/{{$artikel->type}}/{{$artikel->url}}"><h4 style="font-size: 1.2em;" class="card-title">{{$artikel->judul}}</h4></a>
                                                <div><img width="40" height="40" src="{{ asset('assets/person-icon.png') }}" alt="javabow author"> <span style="font-size: 0.9em;" id="author-name">Hilmi Farhandika</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">{{$artikel->created_at->format('l j F Y')}}</small>
                                </div>
                            </div>
                        @endforeach
                    </article>
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('blog.blog_footer')
