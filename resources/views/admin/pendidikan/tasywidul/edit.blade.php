@extends('admin.admin_master')


@section('admin')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Data RA Tasywidul Arifin</h2>
        </div>
        <div class="card-body">

            <form action="{{ url('tasywidul/update/'.$tasywidul->id) }}" method="POST" >
                @csrf
                
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" >{{ $tasywidul->alamat }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1"> Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="{{ $tasywidul->email }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1"> Hp</label>
                    <input type="text" name="hp" class="form-control" id="exampleFormControlInput1" value="{{ $tasywidul->hp }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Visi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="visi" >{{ $tasywidul->visi }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Misi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="misi" >{{ $tasywidul->misi }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Tujuan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tujuan" >{{ $tasywidul->tujuan }}</textarea>
                </div>

                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update Data</button>
                    <a href="/tasywidul/admin" class="btn btn-success">Back</a>
                </div>
            </form>
        </div>
    </div>

    

@endsection