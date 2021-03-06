@extends('layouts.template')
@section('content')

<<div class="col-md-10 col-md-offset-2">
  <div class="panel panel-primary">
    <div class="panel-heading"> Supplier
    <div class="panel-title pull-right">
      </div></div>
      <div class="panel-body">
     <div class="table-responsive">
     <table class="table">

			<div class="panel-body">
				<form action="{{route('supplier.store')}}" method="post"> 
				{{csrf_field()}}

				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="nama" class="form-control" required>
				</div>

				<div class="form-group">
					<label class="control-lable">Alamat</label>
					<textarea name="alamat" class="form-control" required></textarea>
					</div>
				
				<div class="form-group">
					<label class="control-lable">No Hp</label>
					<input type="text" name="no" class="form-control" required>
				</div>
				

				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>


				</form>
				</div>
		</div>
		</div>
		</div>
		</section>
		</div>

@endsection