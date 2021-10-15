@include('blog.blog_header')
    <section style="padding-bottom: 20px;padding-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <nav aria-label="breadcrumb bg-transparent">
                        <ol class="breadcrumb bg-transparent">
                          <li class="breadcrumb-item"><a href="/">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Genshin Impact</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-8 offset-md-2">
                    <center><h4>Genshin Impact</h4></center>
                    <p>
                    Genshin Impact merupakan game yang dikembangkan oleh developer Mihoyo yang bertemakan Open World MMORPG dimana di dunia ini kamu akan memainkan game berupa story dengan dunia mu sendiri tanpa player lain, dan kalian bisa bertemu dengan player lain dengan memainkan dungeon.
                    </p>

                    <p>Guide Genshin Impact yang berada di website ini merupakan murni pengalaman admin, jika ada kesalahan maupun kekurangan harap notice melalui komentar. Thanks !</p>

                    <p>Kalian bisa bisa menggunakan menu yang tersedia untuk menuju ke halaman masing-masing artikel yang ada di blog ini.</p>
                    <hr class="my-4">
                </div>

                <div class="col-md-8 col-xs-12 offset-md-2">
                    <article style="">
                        <p><center>Recent Genshin Impact Article</center></p>
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
                                                <a style="color: black;" href="genshin-impact/{{$artikel->type}}/{{$artikel->url}}"><h4 style="font-size: 1.2em;" class="card-title">{{$artikel->judul}}</h4></a>
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
