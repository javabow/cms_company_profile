@include('blog.blog_header')
    <section style="padding-bottom: 20px;padding-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <center><h4>Open World MMORPG Guide</h4></center>

                        <p>Tempat dimana kamu dapat menemukan guide MMORPG yang berguna untuk menambah pengetahuanmu dalam game.</p>
                        <h4>Tentang MMORPG Open World</h4>
                        <p>MMORPG Open World merupakan salah satu jenis mmorpg dimana game tersebut memiliki map yang tak terbatas atau membentuk sebuah dunia dalam game. Biasanya mmorpg dengan jenis open world akan banyak diminati oleh player karena banyak monster yang berkeliaran dengan bebas dan bisa menjelajah isi dari dunia game tersebut. Jenis MMORPG open world ini adalah jenis yang paling banyak dikembangkan saat ini.</p>

                        <p>Untuk saat ini hanya tersedia guide untuk toram online, karena admin player yang tidak bisa aktif dalam banyak game.</p>
                    <hr class="my-4">
                </div>

                <div class="col-md-8 col-xs-12 offset-md-2">
                    <article style="">
                        <p><center>Recent Article</center></p>
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
                                                <a style="color: black;" href="{{ $artikel->game == 'Toram' ? "toram":"" }}{{ $artikel->game == 'Genshin Impact' ? "genshin-impact":"" }}/{{$artikel->type}}/{{$artikel->url}}"><h4 style="font-size: 1.2em;" class="card-title">{{$artikel->judul}}</h4></a>
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
