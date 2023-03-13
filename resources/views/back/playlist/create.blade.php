@extends('layouts.default')
@section('content')

<div class="panel-header bg-primary-gradient">
<style type="text/css">
    .bg-color {
        background-image: linear-gradient(	#228B22, #32CD32);
    }
    .bg-btn {
        background-color: #228B22;
    }
    .bg2 {
        background-color: #32CD32;
    }
    .bg3 {
        background-color: #FFFFFF;
    }
</style> 
	<div class="page-inner py-5 bg-color">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div class="ml-md-auto py-2 py-md-0">
				{{-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
				<a href="#" class="btn btn-secondary btn-round">Add Cu`stomer</a> --}}
			</div>
		</div>
	</div>
</div>

<div class="page-inner mt--5">	
</div>
<div class="row">
  <div class="col-md-12">
     <div class="card full-height">
        <div class="card-header">
           <div class="card-head-row">
              <div class="card-title">Form Bukti</div>
              <a href="{{ route('playlist.index') }}" class="btn btn-success btn-sm ml-auto" style="text-decoration: none; color:white;"><i class="fa-solid fa-rotate-left mr-1"></i>Back</a>
          </div>
      </div>
      <div class="card-body">
        <form method="post" action="{{ route('playlist.store') }}" enctype="multipart/form-data"> 
            @csrf
            <div class="form-group">
                <label for="Nama">Judul</label>
                <input type="text" name="judul_playlist" class="form-control" placeholder="Enter Nama Prestasi">
            </div>

            <div class="form-group">
                <label for="Detail">Deskripsi</label>
                <textarea name="deskripsi" id="editor1" class="form-control"></textarea>
            </div>


           <div class="form-group">
            <label for="Dokumentasi">Gambar</label>
            <input type="file" name="gambar_playlist" class="form-control">
        </div>

        <div class="form-group">
            <label for="Status">Status</label>
            <select name="is_active" class="form-control">
                <option value="1">publis</option>
                <option value="0">draft</option>
            </select>
        </div>

        <div class="form-group">
            <button class="btn btn-success btn-sm" type="submit">Save</button>
            <button class="btn btn-danger btn-sm" type="reset">Reset</button>
        </div>
    </form>

</div>
</div>
</div>
</div>
</div>
@endsection
