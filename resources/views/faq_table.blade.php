@include('layouts.header')

<!-- Page Heading -->
<center>
<h1 class="h3 mb-2 text-gray-800">Tables Data Seputar Pertanyaan</h1>
<p class="mb-4">Pertanyaan umum yang sering ditanyakan.</p>
</center>

<!-- DataTales Example -->
<div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              {{-- <h6 class="m-0 font-weight-bold text-primary">List Data Artikel Toram</h6> --}}
              {{-- <a href="{{ URL::to('/dashboard/add/') }}" class="btn btn-primary float-right">New label +</a> --}}
              <a href="javascript:;" class="btn btn-primary float-right" data-toggle="modal" data-target="#AddModal">New FAQ <i class="fa fa-plus"></i></a>
              </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Type</th>
                      <th>Pertanyaan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $faq)
                      <tr style="text-align: center;">
                        <td>{{ $faq->nama_label }}</td>
                        <td>{!! $faq->pertanyaan !!}</td>
                        <td>
                            <a href="javascript:;" class="btn btn-warning" data-toggle="modal" onclick="sendData({{ $faq->id_faq }},'{{ $faq->pertanyaan }}','{!! $faq->jawaban !!}')"
                                data-target="#sendModal">Edit</a>
                            <a href="javascript:;" class="btn btn-danger" data-toggle="modal" onclick="deleteData({{ $faq->id_faq }})" data-target="#DeleteModal" ><i class="fa fa-trash"></i> Delete</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">

    </div>
</div>

<div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Label</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="{{ URL::to('/dashboard/faq/store') }}" id="addForm" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="modal-body">
                <div class="form-group row">
                    <label for="pertanyaan" class="col-md-4 col-form-label text-md-right">Pertanyaan</label>

                    <div class="col-md-6">
                        <textarea placeholder="Pertanyaan" id="pertanyaan" type="text" class="form-control @error('pertanyaan') is-invalid @enderror" name="pertanyaan" value="{{ old('pertanyaan') }}" required autofocus></textarea>
                        @error('pertanyaan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jawaban" class="col-md-4 col-form-label text-md-right">Jawaban</label>

                    <div class="col-md-6">
                        <textarea placeholder="Jawaban dari pertanyaan" id="jawaban" type="text" class="form-control @error('jawaban') is-invalid @enderror" name="jawaban" value="{{ old('jawaban') }}" required autofocus></textarea>
                        @error('jawaban')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="type" class="col-md-4 col-form-label text-md-right"><b>Type</b></label>

                    <div class="col-md-6">
                        <select id="type" name="type" class="form-control" required>
                            <option selected disabled>-- Select Type --</option>
                            @foreach($label as $lable)
                            <option value='{{ $lable->id_label }}'>{{ $lable->nama_label }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ttd" class="col-md-4 col-form-label text-md-right"></label>
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}

                        @error('g-recaptcha-response')
                            <span class="help-block">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                        @enderror
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Add">
            </div>
        </form>
      </div>
    </div>
</div>

<div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="" id="deleteForm" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <div class="modal-body">
                <div class="form-group row">
                    <label for="ttd" class="col-md-4 col-form-label text-md-right"></label>
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}

                        @error('g-recaptcha-response')
                            <span class="help-block">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                        @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type=button data-dismiss="modal">Cancel</button>
                <button class="btn btn-danger" type=submit name="" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
            </div>
        </form>
      </div>
    </div>
</div>

<script type="text/javascript">
    //delete start
    function deleteData(id)
    {
        var id = id;
        var url = '{{ route("delete_faq", ":id_faq") }}';
        url = url.replace(':id_faq', id);
        $("#deleteForm").attr('action', url);
    }

    function formSubmit()
    {
        $("#deleteForm").submit();
    }
    //delete end
</script>

<div class="modal fade" id="sendModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Send Confirmation</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="" id="sendForm" method="post">
            {{ csrf_field() }}
            {{-- {{ method_field('POST') }} --}}
            <div class="modal-body">
                <div class="form-group row">
                    <label for="pertanyaan" class="col-md-4 col-form-label text-md-right">Pertanyaan</label>

                    <div class="col-md-6">
                        <textarea placeholder="Pertanyaan" id="pertanyaan_update" type="text" class="form-control @error('pertanyaan') is-invalid @enderror" name="pertanyaan" value="" required autofocus></textarea>
                        @error('pertanyaan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jawaban" class="col-md-4 col-form-label text-md-right">Jawaban</label>

                    <div class="col-md-6">
                        <textarea placeholder="Jawaban dari pertanyaan" id="jawaban_update" type="text" class="form-control @error('jawaban') is-invalid @enderror" name="jawaban" value="" required autofocus></textarea>
                        @error('jawaban')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="type" class="col-md-4 col-form-label text-md-right"><b>Type</b></label>

                    <div class="col-md-6">
                        <select id="type" name="type" class="form-control" required>
                            <option selected disabled>-- Select Type --</option>
                            @foreach($label as $lable)
                            <option value='{{ $lable->id_label }}'>{{ $lable->nama_label }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ttd" class="col-md-4 col-form-label text-md-right"></label>
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}

                        @error('g-recaptcha-response')
                            <span class="help-block">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                        @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type=button data-dismiss="modal">Cancel</button>
                <button class="btn btn-success" type=submit name="" data-dismiss="modal" onclick="formSendSubmit()">Update</button>
            </div>
        </form>
      </div>
    </div>
</div>

<script type="text/javascript">
    $("#pertanyaan").keydown(function(e){
    // Enter was pressed without shift key
    if (e.keyCode == 13 && !e.shiftKey)
    {
        // prevent default behavior
        e.preventDefault();
    }
    });

    $("#jawaban").keydown(function(e){
    // Enter was pressed without shift key
    if (e.keyCode == 13 && !e.shiftKey)
    {
        // prevent default behavior
        e.preventDefault();
    }
    });

    $("#pertanyaan_update").keydown(function(e){
    // Enter was pressed without shift key
    if (e.keyCode == 13 && !e.shiftKey)
    {
        // prevent default behavior
        e.preventDefault();
    }
    });

    $("#jawaban_update").keydown(function(e){
    // Enter was pressed without shift key
    if (e.keyCode == 13 && !e.shiftKey)
    {
        // prevent default behavior
        e.preventDefault();
    }
    });

    //send start
    function sendData(id, pertanyaan, jawaban)
    {
        var id = id;
        var pertanyaan = pertanyaan;
        var jawaban = jawaban;
        var url = '{{ route("update_faq", ":id") }}';
        url = url.replace(':id', id);
        $("#pertanyaan_update").text(pertanyaan);
        $("#jawaban_update").html(jawaban);
        $("#sendForm").attr('action', url);

    }

    function formSendSubmit()
    {
        $("#sendForm").submit();
    }
    //send end
</script>

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

@include('layouts.footer')
