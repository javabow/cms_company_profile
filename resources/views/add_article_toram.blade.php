@include('layouts.header')
            <div class="card mt-5">
                <div class="card-header text-center">
                    Add Artikel Blog
                </div>
                <div class="card-body">
                    <a href="{{ URL::to('/dashboard') }}" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-9">
                            <form method="post" action="{{ URL::to('/dashboard/store') }}" enctype="multipart/form-data">

                                {{ csrf_field() }}

                                {{-- <input type="hidden" name="id_admin" value="{{ Auth::id() }}"> --}}

                                <div class="form-group">
                                    <label><b>Judul</b></label>
                                    <input type="text" name="judul" class="form-control" value="{{ old('judul') }}" placeholder="Judul Artikel">

                                    @if($errors->has('judul'))
                                        <div class="text-danger">
                                            {{ $errors->first('judul')}}
                                        </div>
                                    @endif

                                </div>



                                <div class="form-group">
                                    <label><b>Artikel</b></label>
                                    <textarea class="form-control" name="content" id="description-textarea" rows="8">{{ old('content') }}</textarea>

                                    @if($errors->has('content'))
                                        <div class="text-danger">
                                            {{ $errors->first('content')}}
                                        </div>
                                    @endif

                                </div>


                        </div>
                        <div class="col-3">
                                <div class="form-group">
                                    <label><b>Page</b></label>
                                    <select name="page" class="form-control" required>
                                        <option selected disabled>-- Select Page --</option>
                                        <option value="service">Service</option>
                                        <option value="project">Project</option>
                                        <option value="artikel">Artikel</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><b>Label</b></label>
                                    <select name="label" class="form-control" required>
                                        <option selected disabled>-- Select Label --</option>
                                        @foreach($label as $lable)
                                        <option value='{{ $lable->id_label }}'>{{ $lable->nama_label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><b>Tag</b></label>
                                    <input type="text" id="tag-artikel" style="width: 300px;" name="tag" value="{{ old('tag') }}" placeholder="Tag Artikel">

                                    @if($errors->has('tag'))
                                        <div class="text-danger">
                                            {{ $errors->first('tag')}}
                                        </div>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label><b>Main Image</b></label>
                                    <p>Select an image to be the main picture of this page</p>
                                    <input name="thumbnail" type="hidden" id="thumbnail">
                                    <a href="{{ url::to('laravel-filemanager') }}?type=images" id="feature-img-container"><img width="300" height="300" src="{{ asset('assets/no-photo.jpg') }}"></a>
                                </div>
                                <div class="form-group">
                                    <label><b>Header Page Image</b></label>
                                    <p>Select an image to be the header picture of this page</p>
                                    <input name="header_thumbnail" type="hidden" id="header_thumbnail">
                                    <a href="{{ url::to('laravel-filemanager') }}?type=images" id="feature-img-container-2"><img width="300" height="300" src="{{ asset('assets/no-photo.jpg') }}"></a>
                                </div>


                        </div>
                        <div class="col-12">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Simpan" data-toggle="modal" data-target="#spinnerModal" data-backdrop="static" data-keyboard="false">
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="modal" tabindex="-1" role="dialog" id="spinnerModal">
                        <div class="modal-dialog modal-dialog-centered text-center" role="document">
                            <span class="fa fa-spinner fa-spin fa-3x w-100" style="color: white;"></span>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                const options = [
                ];

                const items = options.map(x => x.name2);

                $('#tag-artikel').selectize({
                  options: options,
                  items: items,
                  valueField: 'name2',
                  labelField: 'name2',
                  searchField: ['name2'],
                  plugins: ['restore_on_backspace'],
                  plugins: ['remove_button'],
                  persist: false,
                  createOnBlur: true,
                  maxItems: 10,
                  create: true
                });


            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.5/tinymce.min.js"></script>
            <script>
                var editor_config = {

                  path_absolute : "/",
                  selector: "textarea",
                  height : "600",
                  image_dimensions: false,
                  plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table contextmenu directionality",
                    "emoticons template paste textcolor colorpicker textpattern"
                  ],
                  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                  relative_urls: false,
                  min_width: 600,
                  file_browser_callback : function(field_name, url, type, win) {
                    var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                    var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                    var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                    if (type == 'image') {
                      cmsURL = cmsURL + "&type=Images";
                    } else {
                      cmsURL = cmsURL + "&type=Files";
                    }

                    tinyMCE.activeEditor.windowManager.open({
                      file : cmsURL,
                      title : 'Filemanager',
                      width : x * 0.8,
                      height : y * 0.8,
                      resizable : "yes",
                      close_previous : "no"
                    });
                  },
                    setup: function (editor) {
                        editor.on('init', function(args) {
                            editor = args.target;

                            editor.on('NodeChange', function(e) {
                            if (e && e.element.nodeName.toLowerCase() == 'img') {
                                width = e.element.width;
                                height = e.element.height;
                                set_tengah = "display: block; margin-left: auto; margin-right: auto;";
                                // if (width != 10) {
                                //     height = 400;
                                //     width = 720;
                                // }
                                height = 400;
                                width = 720;
                            tinyMCE.DOM.setAttribs(e.element, {'width': width, 'height': height, 'style': set_tengah});
                            }
                            });
                        });
                    }

                };

                tinymce.init(editor_config);
              </script>
              <script>
                    $('#feature-img-container').on('click', function(e)
                    {

                            window.open(this.href, 'Filemanager', 'width=900,height=600');
                            $val1 = '#thumbnail';
                            $val2 = '#feature-img-container';
                            return false;
                    });

                    $('#feature-img-container-2').on('click', function(e)
                    {

                            window.open(this.href, 'Filemanager', 'width=900,height=600');
                            $val1 = '#header_thumbnail';
                            $val2 = '#feature-img-container-2';
                            return false;
                    });

                    function SetUrl(url){

                        //set the value of the desired input to image url,often this is a hidden input
                        $($val1).val(url);

                        //set or change the feature image src,recall wordpress feature image
                        $($val2).find('img').attr('src',url);
                    }
              </script>
              <script>
                    // $('#feature-img-container-2').on('click', function(e)
                    // {

                    //         window.open(this.href, 'Filemanager', 'width=900,height=600');

                    //         return false;
                    // });

                    // function SetUrl(url){

                    //     //set the value of the desired input to image url,often this is a hidden input
                    //     $('#header_thumbnail').val(url);

                    //     //set or change the feature image src,recall wordpress feature image
                    //     $('#feature-img-container-2').find('img').attr('src',url);
                    // }
              </script>
@include('layouts.footer')
