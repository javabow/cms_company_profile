@include('layouts.header')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables Data Page ITCC</h1>
<p class="mb-4">Page ITCC.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">List Data Page ITCC</h6>
    <a href="{{ URL::to('/dashboard/add/') }}" class="btn btn-primary float-right">New Page</a>
    </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            {{-- <th>No. Index</th> --}}
            <th>Judul</th>
            <th>Page</th>
            <th>Created Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $article)
            <tr style="text-align: center;">
              {{-- <td>{{ $article->id_artikel }}</td> --}}
              <td>{{ $article->judul }}</td>
              <td>{{ $article->page }}</td>
              <td>{{ $article->created_at->format('d F Y') }}</td>
              <td>
                <a href="{{ URL::to('/') }}/{{ $article->page }}/{{ $article->url }}" target="_blank" class="btn btn-success">Preview</a>
                <a href="{{ URL::to('/dashboard/edit') }}/{{ $article->id_artikel }}" class="btn btn-warning">Edit</a>
                <a href="javascript:;" class="btn btn-danger" data-toggle="modal" onclick="deleteData({{ $article->id_artikel }})" data-target="#DeleteModal" ><i class="fa fa-trash"></i> Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
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
        var url = '{{ route("delete_artikel", ":id_artikel") }}';
        url = url.replace(':id_artikel', id);
        $("#deleteForm").attr('action', url);
    }

    function formSubmit()
    {
        $("#deleteForm").submit();
    }
    //delete end
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
