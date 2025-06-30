<div class="modal fade" id="reset" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-default"> </h3>
                
            </div>
            
            <div class="modal-body"  style="padding-bottom: 0px;padding-top: 0px;">
                <div class="row content">
                    <div class="col-12">
                        <div style="font-size: 18px; color: #1d8ee5;">
                            <b>RESET PASSWORD</b>
                        </div>
                        <div style="font-size: 12px;" >
                            Anda Yakin akan Reset Password User ini?
                        </div>
                        <input type="hidden" id="idkar">
                    </div>
                </div>
            </div>
            
            <div class="modal-footer tombol">
                <table width="100%">
                    <tr>
                        <td>
                            <button type="button" class="btn btn-secondary btn-block ml-auto" data-dismiss="modal">Tidak</button> 
                        </td>
                        <td width="5%">
                            &nbsp;
                        </td>
                        <td>
                            <button type="button" onclick="YakinReset()" class="btn btn-block btn-absen ml-auto menusxx">Yakin</button> 
                        </td>
                    </tr> 
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-default">Tambah Karyawan</h3>
                <hr>
            </div>
            
            <div class="modal-body"  style="padding-bottom: 0px;padding-top: 0px;">
                <div class="row content">
                    <div class="col-12">
                        <label>Username</label>
                        <input type="text" class="form-control isi" placeholder="Username" id="username">
                        <br>
                        <label>Nama Users</label>
                        <input type="text" class="form-control isi" placeholder="Nama Lengkap" id="nama">
                        <br>
                        <label>Locations</label>
                        <select class="form-control isi" id="location">
                            <option value="">Pilih Lokasi</option>
                            @foreach($locations as $loc)
                            <option value="{{ $loc->id }}">{{ $loc->name }}</option>
                            @endforeach
                        </select>
                        <br>
                        <label>Role</label>
                        <select class="form-control isi" id="role">
                            <option value="">Pilih Role</option>
                            @foreach($roles as $rol)
                            <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer tombol">
                <table width="100%">
                    <tr>
                        <td>
                            <button type="button" class="btn btn-secondary btn-block ml-auto" data-dismiss="modal">Batal</button> 
                        </td>
                        <td width="5%">
                            &nbsp;
                        </td>
                        <td>
                            <button type="button" onclick="SimpanKaryawan();" class="btn btn-block btn-absen ml-auto menusxx">Simpan</button> 
                        </td>
                    </tr> 
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-default"> </h3>
                
            </div>
            
            <div class="modal-body"  style="padding-bottom: 0px;padding-top: 0px;">
                <div class="row content">
                    <div class="col-12">
                        <div style="font-size: 18px; color: #1d8ee5;">
                            <b>DELETE PASSWORD</b>
                        </div>
                        <div style="font-size: 12px;" >
                            Anda Yakin akan Delete Karyawan ini?
                        </div>
                        <input type="hidden" id="iddel">
                    </div>
                </div>
            </div>
            
            <div class="modal-footer tombol">
                <table width="100%">
                    <tr>
                        <td>
                            <button type="button" class="btn btn-secondary btn-block ml-auto" data-dismiss="modal">Tidak</button> 
                        </td>
                        <td width="5%">
                            &nbsp;
                        </td>
                        <td>
                            <button type="button" onclick="YakinDelete()" class="btn btn-block btn-absen ml-auto menusxx">Yakin</button> 
                        </td>
                    </tr> 
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title-default">Edit User</h3>
                <hr>
            </div>
            
            <div class="modal-body"  style="padding-bottom: 0px;padding-top: 0px;">
                <div class="row content">
                    <input type="hidden" id="idedit">
                    <div class="col-12">
                        <label>Username</label>
                        <input type="text" class="form-control isiedit" placeholder="Username" id="usernameedit">
                        <br>
                        <label>Nama User</label>
                        <input type="text" class="form-control isiedit" placeholder="Nama Lengkap" id="namaedit">
                        <br>
                        <label>Locations</label>
                        <select class="form-control isiedit" id="locationedit">
                            <option value="">Pilih Lokasi</option>
                                @foreach($locations as $loc)
                                <option value="{{ $loc->id }}">{{ $loc->name }}</option>
                                @endforeach
                    
                        </select>
                        <br>
                        <label>Role</label>
                        <select class="form-control isiedit" id="roleedit">
                            <option value="">Pilih Role</option>
                                @foreach($roles as $rol)
                                <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                                @endforeach
                    
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer tombol">
                <table width="100%">
                    <tr>
                        <td>
                            <button type="button" class="btn btn-secondary btn-block ml-auto" data-dismiss="modal">Batal</button> 
                        </td>
                        <td width="5%">
                            &nbsp;
                        </td>
                        <td>
                            <button type="button" onclick="UpdateKaryawan();" class="btn btn-block btn-absen ml-auto menusxx">Update</button> 
                        </td>
                    </tr> 
                </table>
            </div>
        </div>
    </div>
</div>