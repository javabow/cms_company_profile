@include('layouts.header')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables Data Komentar</h1>
<p class="mb-4">Komentar.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">List Komentar</h6>
    <div class="alert alert-info"> <center>Anda mempunyai {{$count}} komentar untuk ditinjau</center></div>
    </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No. Index</th>
            <th>Nama</th>
            <th>Komentar</th>
            <th>URL</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $komentar)
            <tr style="text-align: center;">
              <td>{{ $komentar->id }}</td>
              <td>{{ $komentar->nama }}</td>
              <td style="font-size: 12px;">{{ $komentar->komentar }}</td>
              <td>{{ $komentar->url }}</td>
              <td>{{ $komentar->created_at->format('j F Y') }}</td>
              <td>
                {{-- <a href="/dashboard/preview/{{ $komentar->id_artikel }}" class="btn btn-success">Look</a> --}}
                {{-- <a href="/dashboard/edit/{{ $komentar->id_artikel }}" class="btn btn-warning">Edit</a> --}}
                @if ($komentar->status == 0)
                    <a href="/dashboard/komentar/approve/{{ $komentar->id }}" class="btn btn-success">Approve</a>
                @endif
                    <a href="/dashboard/komentar/delete/{{ $komentar->id }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
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

@include('layouts.footer')
