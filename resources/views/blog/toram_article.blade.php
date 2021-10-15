@include('blog.blog_header')
<section style="padding-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <nav aria-label="breadcrumb bg-transparent">
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/toram">Toram</a></li>
                        <li class="breadcrumb-item">{{ $data->type }}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $data->judul }}</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-8 offset-md-2">
                <article style="font-family: 'Lato', sans-serif;">
                    <div><span id="date">{{ $data->created_at->format('l j F Y') }}</span> <span> / </span> <span id="tag">#{{ $data->type }}</div>
                        <h1>{{ $data->judul }}</span></h1>
                    <div style="padding-top: 20px;"><img width="50" height="50" src="{{ asset('assets/person-icon.png') }}" alt="javabow author"> <span id="author-name">Hilmi Farhandika</span></div>
                    <div style="padding-top: 10px;padding-bottom: 30px;" id="main-image"><img class="img-fluid" src="{{ $data->image }}" alt=""></div>
                    {!! $data->isi !!}
                </article>
                <hr class="my-4">
                <p><center>Recent Toram Article</center></p>
                <div style="padding-bottom: 20px;">
                    @isset($pre)
                    <div class="card">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <a href="#"><img class="img-fluid" src="{{$pre->image}}" alt="Card image cap"></a>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <div class="card-body">
                                    <span id="label">#{{$pre->type}}</span>
                                    {{-- <a style="color: black;" href="{{$artikel->type}}"><span id="label">#{{$artikel->type}}</span><br></a> --}}
                                    <a style="color: black;" href="/toram/{{$pre->type}}/{{$pre->url}}"><h4 style="font-size: 1.2em;" class="card-title">{{$pre->judul}}</h4></a>
                                    <div><img width="40" height="40" src="{{ asset('assets/person-icon.png') }}" alt="javabow author"> <span style="font-size: 0.9em;" id="author-name">Hilmi Farhandika</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">{{$pre->created_at->format('l j F Y')}}</small>
                    </div>
                    @endisset
                    @isset($next)
                    <div class="card">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <a href="#"><img class="img-fluid" src="{{$next->image}}" alt="Card image cap"></a>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <div class="card-body">
                                    <span id="label">#{{$next->type}}</span>
                                    {{-- <a style="color: black;" href="{{$artikel->type}}"><span id="label">#{{$artikel->type}}</span><br></a> --}}
                                    <a style="color: black;" href="/toram/{{$next->type}}/{{$next->url}}"><h4 style="font-size: 1.2em;" class="card-title">{{$next->judul}}</h4></a>
                                    <div><img width="40" height="40" src="{{ asset('assets/person-icon.png') }}" alt="javabow author"> <span style="font-size: 0.9em;" id="author-name">Hilmi Farhandika</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">{{$next->created_at->format('l j F Y')}}</small>
                    </div>
                    @endisset
                </div>
            </div>
            <div class="col-md-8 offset-md-2">
                <hr class="my-4">
                <p><center>Comments ({{$total_komentar}})</center></p>
                <div class="row">
                    @foreach($komentar as $comments)
                        <div class="col-md-12">
                            <div class="media g-mb-30 media-comment">
                                <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" width="50" height="50" src="{{ asset('assets/person-icon.png') }}" alt="Comments Avatar">
                                <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                                <div class="g-mb-15">
                                    <h5 class="h5 g-color-gray-dark-v1 mb-0">{{$comments->nama}}</h5>
                                </div>

                                {{$comments->komentar}}

                                </div>
                                
                            </div>
                            <span class="g-color-gray-dark-v4 g-font-size-12 pull-right">{{$comments->created_at->format('F Y')}}</span>
                            <hr class="my-4">
                        </div>
                        
                    @endforeach
                </div>
            </div>
            <div class="col-md-8 offset-md-2">
                <hr class="my-4">
                <form method="post" action="/komentar/post">
                    {{ csrf_field() }}
                    @csrf
                    <div class="form-group">
                        <label><span style="color: red">*</span><b>Nama</b></label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" placeholder="Username anda" required>

                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label><b>Email</b></label>
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email anda">

                        @if($errors->has('email'))
                            <div class="text-danger">
                                {{ $errors->first('email')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label><span style="color: red">*</span><b>Komentar</b></label>
                        <textarea name="isi_komentar" placeholder="Write your comment here!" class="form-control" required>{{ old('isi_komentar') }}</textarea>

                        @if($errors->has('isi_komentar'))
                            <div class="text-danger">
                                {{ $errors->first('isi_komentar')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="url" value="{{ $data->url }}">
                    </div>

                    <div class="form-group">
                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}

                        @if ($errors->has('g-recaptcha-response'))
                            <span class="help-block">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                        @endif
                    </div>
                    <label><span style="color: red">*</span>Wajib diisi, email optional</label>
                    <div class="form-group">

                        <input type="submit" class="btn btn-primary pull-left" value="Post" data-toggle="modal" data-target="#spinnerModal" data-backdrop="static" data-keyboard="false">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if(Session::has('message'))
    <!-- Notification Result Modal-->
    <div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <!-- <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div> -->
        <div class="modal-body">
            <center>
            <div class="alert {{ Session::get('alert-class', 'alert-info') }}">
                {{ Session::get('message') }}
            </div>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </center>
        </div>
        <!-- <div class="modal-footer">

        </div> -->
        </div>
    </div>
    </div>
    <script type="text/javascript">
        $(window).on('load',function(){
            $('#resultModal').modal('show');
        });
    </script>
    @endif
</section>
@include('blog.blog_footer')
