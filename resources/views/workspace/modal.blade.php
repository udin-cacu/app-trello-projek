<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            
            <div class="module module-login">
                        <div class="module-head">
                            <h3>Add WorkSpace</h3>
                        </div>
                    <form class="form-vertical">
                         @csrf
                        <div class="module-body">
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <input class="span12" type="text" id="nama" placeholder="Password">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <input class="span12" type="text" id="tipe" placeholder="Password">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls row-fluid">
                                    <input class="span12" type="text" id="deskripsi" placeholder="Password">
                                </div>
                            </div>
                        </div>
                    
                </div>
            <div class="modal-footer tombol">
                <table width="100%">
                    <tr>
                        <td>
                            <button type="button" onclick="Simpan();" class="btn btn-small btn-success">Simpan</button> 
                        </td>
                        <td width="5%">
                            &nbsp;
                        </td>
                        <td>
                            <button type="button" class="btn btn-small btn-inverse" data-dismiss="modal">Batal</button> 
                        </td>
                    </tr> 
                </table>
            </div>
            </form>
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
                            <b>DELETE TYPE PRODUK</b>
                        </div>
                        <div style="font-size: 12px;" >
                            Anda Yakin akan Delete Type Produk ini?
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
                <h3 class="modal-title" id="modal-title-default">Edit Produk</h3>
                <hr>
            </div>
            
            <div class="modal-body"  style="padding-bottom: 0px;padding-top: 0px;">
                <div class="row content">
                    <input type="hidden" id="idedit">
                    <div class="col-12">
                        <label>Nama Type Produk *</label>
                        <input type="text" class="form-control isiedit" placeholder="Nama Type Produk" id="namaedit">
                        <br>
                        <label>Keterangan</label>
                        <textarea class="form-control" id="ketedit" rows="5"></textarea>
                        <br>
                        <div style="font-size: 11px;"><i>* Harap diisi</i></div>
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
                            <button type="button" onclick="Update();" class="btn btn-block btn-absen ml-auto menusxx">Update</button> 
                        </td>
                    </tr> 
                </table>
            </div>
        </div>
    </div>
</div>