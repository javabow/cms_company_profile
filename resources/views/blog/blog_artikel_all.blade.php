@include('blog.blog_header')
            <!--=====================================-->
			<!--=         Main Banner Start         =-->
			<!--=====================================-->
			<section id="page-banner" class="fxt-page-banner bg-position-center bg-no-repeat bg-size-cover" data-bg-image="{{ url::to('/media') }}/banner/banner5.jpg">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="breadcrumbs-area">
								<h1>Artikel Terbaru</h1>
								<ul>
									<li>
										<a href="{{ url::to('/') }}">Home</a>
									</li>
									<li>Artikel</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=          Main Banner End          =-->
			<!--=====================================-->
			<!--=====================================-->
			<!--=          Blog Area Start          =-->
			<!--=====================================-->
			<section class="fxt-blog-wrap-layout3">
				<div class="container menu-list-wrapper">
					<div class="row menu-list">
                        @foreach ($data_artikel as $artikel)
                            <div class="col-xl-4 col-md-6 col-12 menu-item">
                                <div class="fxt-blog-box-layout3">
                                    <div class="item-img">
                                        <img style="width: 360px;height: 360px;" src="{{ $artikel->image }}" alt="blog">
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title text-row-2"><a href="{{ URL::to('/artikel') }}/{{ $artikel->url }}">{{ $artikel->judul }}</a></h3>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><i class="far fa-calendar-alt"></i>{{ $artikel->created_at->format('F Y') }}</li>
                                                <li><i class="far fa-user"></i>By: <span>Admin</span></li>
                                            </ul>
                                        </div>
                                        {{-- <p>{!! Str::limit($artikel->isi, 20) !!}</p> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div style="text-align: center;" class="col-12 text-center">
                            <div style="display:inline-block;">
                            @if ($data_artikel->lastPage() > 1)
                            <ul class="pagination">
                                <li style="padding-right: 20px;" class="{{ ($data_artikel->currentPage() == 1) ? ' disabled' : '' }}">
                                    <a class="btn-fill" href="{{ $data_artikel->url(1) }}">Previous</a>
                                </li>
                                @for ($i = 1; $i <= $data_artikel->lastPage(); $i++)
                                    <li style="padding-right: 20px;" class="{{ ($data_artikel->currentPage() == $i) ? ' active' : '' }}">
                                        <a class="btn-fill" href="{{ $data_artikel->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li style="padding-right: 20px;" class="{{ ($data_artikel->currentPage() == $data_artikel->lastPage()) ? ' disabled' : '' }}">
                                    <a class="btn-fill" href="{{ $data_artikel->url($data_artikel->currentPage()+1) }}" >Next</a>
                                </li>
                            </ul>
                            @endif
                            </div>
                        </div>

						{{-- <div class="col-12 text-center mb--30 loadmore" data-item="3" data-lg="2" data-md="2" data-sm="1" data-xs="1">
							<a href="#" class="btn-fill">LOAD MORE</a>
						</div> --}}
					</div>
				</div>
			</section>
			<!--=====================================-->
			<!--=           Blog Area End           =-->
			<!--=====================================-->
@include('blog.blog_footer')
