@include('layouts.header')

<!-- Page Heading -->
<center>
<h1 class="h3 mb-2 text-gray-800">Tables Data Label Article Enhaii</h1>
<p class="mb-4">Artikel Label Enhaii.</p>
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
              <a href="javascript:;" class="btn btn-primary float-right" data-toggle="modal" data-target="#AddModal">New Label<i class="fa fa-plus"></i></a>
              </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No. Index</th>
                      <th>Nama Label</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $label)
                      <tr style="text-align: center;">
                        <td>{{ $label->id_label }}</td>
                        <td>{{ $label->nama_label }}</td>
                        <td>
                            <a href="javascript:;" class="btn btn-warning" data-toggle="modal" onclick="sendData({{ $label->id_label }},'{{ $label->nama_label }}')"
                                data-target="#sendModal">Edit</a>
                            <a href="javascript:;" class="btn btn-danger" data-toggle="modal" onclick="deleteData({{ $label->id_label }})" data-target="#DeleteModal" ><i class="fa fa-trash"></i> Delete</a>
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
        <form action="{{ URL::to('/dashboard/label/store') }}" id="addForm" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="modal-body">
                <div class="form-group row">
                    <label for="nama_label" class="col-md-4 col-form-label text-md-right">Nama Label</label>

                    <div class="col-md-6">
                        <input placeholder="Label Name" id="label" type="text" class="form-control @error('nama_label') is-invalid @enderror" name="nama_label" value="{{ old('nama_label') }}" required autofocus>

                        @error('nama_label')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
        var url = '{{ route("delete_label", ":id_label") }}';
        url = url.replace(':id_label', id);
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
                    <label for="nama_label" class="col-md-4 col-form-label text-md-right">Edit Label Artikel</label>

                    <div class="col-md-6">
                        <input placeholder="Label" id="nama_label" type="text" class="form-control @error('nama_label') is-invalid @enderror" name="nama_label" value="{{ old('nama_label') }}" required>

                        @error('nama_label')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
    //send start
    function sendData(id, label)
    {
        var id = id;
        var label = label;
        var url = '{{ route("update_label", ":id") }}';
        url = url.replace(':id', id);
        $("#nama_label").val(label);
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
