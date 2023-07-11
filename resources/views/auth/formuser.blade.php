@extends('layouts.app')

@section('title','Form User')

@section('contents')

<form action="{{ isset($user) ? route('addUser.updateUser',$user->id) : route('addUser.simpan') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ isset($user) ? 'Form Edit User' : 'Form Tambah User'}}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama User</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ isset($user) ? $user->nama : '' }}"> 
                        </div>   
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ isset($user) ? $user->email : '' }}"> 
                        </div>   
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Password</label>
                            <input type="text" class="form-control" id="password" name="password"> 
                        </div>   
                    </div>
                    
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Level</label>
                            <select name="level" id="level" class="custom-select">
                            <option value="" selected disabled hidden>--Pilih Level--</option>
                            
                            <option value="Akademik"> Admin Akademik </option>
                            <option value="Vokasi"> Admin Vokasi </option>
                            <option value="Reviewer"> Reviewer </option>

                            </select> 
                        </div>   
                    </div>
                    </div class="card-footer">
                       <button type="submit" class="btn btn-primary">Simpan</button> 
                    </div>
                </div>
        </div>
    </div>
</form>
@endsection