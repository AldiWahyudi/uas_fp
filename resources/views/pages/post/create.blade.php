@extends('layouts.app')
@section('nama')
    Create Post
@endsection

@section('content')
<div class="container">
  <br>
    <div class="row justify-content-center">
    	<div class="col-md-6">
    		<h2>Tambah Surat Masuk</h2>
    	</div>
    	<div class="col-md-6">
    		<div class="float-right">
    			<a href="{{ route('post.index') }}" class="btn btn-primary">Back</a>
    		</div>
    	</div>
    	<br>
        <div class="col-md-12">
        	@if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-error" role="alert">
                    {{ session('error') }}
                </div>
            @endif
      <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="nomorsurat">Nomor Surat :</label>
          <input type="text" class="form-control" id="nomorsurat" name="nomorsurat" required>
        </div>
        <div class="form-group">
          <label for="tanggalsurat">Tanggal Surat:</label>
          <input type="text" class="form-control" id="tanggalsurat" name="tanggalsurat" required>
        </div>
        <div class="form-group">
          <label for="pengirim">Pengirim:</label>
          <textarea name="pengirim" class="form-control" id="pengirim" rows="4" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
        </div>
    </div>
    
</div>
<x-footer />
@endsection