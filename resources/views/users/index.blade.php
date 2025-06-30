@include('layouts.head')
<!-- Header -->
<style>

.btn:not(:last-child) {
    margin-right: .2rem;
}
</style>
<div class="header bg-survey pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
      <!-- Card stats -->
      <div class="row">
        <div class="col-12">
          <div style="font-size: 24px;font-weight: bold;color: white;">
            Data Users
          </div>
          <div style="font-size: 12px;color: white;">
            List data User berisi data lengkap dari data-data User, Anda dapat reset password User, dan mengubah data User.
          </div>
        </div>

          <div class="col-12">
            <button onclick="Tambah();" class="btn btn-secondary"><i class="fa fa-plus"></i> Tambah User</button>
          </div>
      </div>
      <hr>
    </div>
  </div>
</div>
<div class="container-fluid mt--9">
  <div class="row">
    <div class="col-xl-12">
      <div class="card shadow" style="padding: 1.5rem;">
        <div class="table-responsive">
          <!-- Projects table -->
          <table id="customers" class="datatables" width="100%">
            <thead>
              <tr>
                <th style="display: none;">ID</th>
                <th>Role Name</th>
                <th>Nama Lengkap</th>
                <th>Lokasi</th>
                <th width="21%">Opsi</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@include('users.modal')  
@include('layouts.footer')  
<script type="text/javascript">
  
  var table = "";
    $(function() {

        table = $('.datatables').DataTable({
            pageLength: 20,
            processing: true,
            serverSide: true,
            columnDefs: [
                {
                    "targets": [ 0 ],
                    "visible": false
                }
            ],
            order: [[ 0, 'desc' ]],
            ajax:{
                 url: "{{ route('users.data') }}",
                 dataType: "json",
                 type: "GET",
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'role_name', name: 'role_name' },
                { data: 'name', name: 'name' },
                { data: 'wilayah_name', name: 'wilayah_name' },
                { 
                    render: function ( data, type, row ) {
                      
                      return '<button class="btn btn-success btn-sm" data-nama="'+row.name+'" onclick="Reset('+row.id+')"><i class="fa fa-key"></i></button><button class="btn btn-danger btn-sm" onclick="Delete('+row.id+')"><i class="fa fa-trash"></i></button><button class="btn btn-info btn-sm" onclick="Edit('+row.id+')"><i class="fa fa-edit"></i></button>';

                    }
                }
            ]
        });
    });

    function Reset(id){

      $('#idkar').val(id);

      $('#reset').modal('show');

    }

    function YakinReset(){

      $('#reset').modal('hide');

      var ids = $('#idkar').val();

      $.ajax({
        type: 'POST',
        url: "{{ route('users.reset') }}",
        data: {
          '_token': $('input[name=_token]').val(),
          'id': ids,
        },
        success: function(data) {

          swal({
              title: "Success",
              text: "Password Users Berhasil di Reset!",
              icon: "success",
              buttons: false,
              timer: 2000,
          });

          setTimeout(function(){ window.location.href = '/users'; }, 2000);

        }

      });

    }

    function Tambah(){

      $('#new').modal('show');

    }

    function SimpanKaryawan(){

      var empty = false;
      $('input.isi, select.isi').each(function() {
          if ($(this).val() == '') {
              empty = true;
          }
      });
      if (empty) { 
          swal({
              text: "Isian Tidak Boleh Kosong!",
              icon: "error",
              buttons: false,
              timer: 2000,
          });

      } else {

        $.ajax({
          type: 'POST',
          url: "{{ route('users.store') }}",
          data: {
            '_token': $('input[name=_token]').val(),
            'nama': $('#nama').val(),
            'username': $('#username').val(),
            'location_id': $('#location').val(),
            'role_id': $('#role').val(),
          },
          success: function(data) {

            if(data == 0){

              $('#new').modal('hide');

              swal({
                title: "Success",
                text: "User Berhasil Tersimpan",
                icon: "success",
                buttons: false,
                timer: 2000,
              });

              setTimeout(function(){ window.location.href = '/users'; }, 2000);

            } else {

              swal({
                title: "Perhatikan",
                text: "User Tersebut sudah Digunakan!",
                icon: "error",
                buttons: false,
                timer: 2000,
              });

              $('.loading').attr('style','display: none');

            }  

          }

        });

      }

    }

    function Delete(id){

      $('#iddel').val(id);

      $('#delete').modal('show');

    }

    function YakinDelete(){

      $('#delete').modal('hide');

      var ids = $('#iddel').val();

      $.ajax({
        type: 'POST',
        url: "{{ route('users.delete') }}",
        data: {
          '_token': $('input[name=_token]').val(),
          'id': ids,
        },
        success: function(data) {

          swal({
              title: "Success",
              text: "Karyawan Berhasil di Delete!",
              icon: "success",
              buttons: false,
              timer: 2000,
          });

          setTimeout(function(){ window.location.href = '/users'; }, 2000);

        }

      });

    }

    function ResetDevice(id){

      $('#idx').val(id);

      $('#resetdevice').modal('show');

    }


    function Edit(id){

      $.ajax({
        type: 'POST',
        url: "{{ route('users.edit') }}",
        data: {
          '_token': $('input[name=_token]').val(),
          'id': id,
        },
        success: function(data) {

          $('#usernameedit').val(data.email);
          $('#namaedit').val(data.name);
          $('#locationedit').val(data.wilayah_id);
          $('#idedit').val(data.id);
          $('#roleedit').val(data.role_id);

        }

      });

      $('#edit').modal('show');

    }

    function UpdateKaryawan(){

      var empty = false;
      $('input.isiedit, select.isiedit').each(function() {
          if ($(this).val() == '') {
              empty = true;
          }
      });
      if (empty) { 
          swal({
              text: "Isian Tidak Boleh Kosong!",
              icon: "error",
              buttons: false,
              timer: 2000,
          });

      } else {

        $.ajax({
          type: 'POST',
          url: "{{ route('users.update') }}",
          data: {
            '_token': $('input[name=_token]').val(),
            'name': $('#namaedit').val(),
            'username': $('#usernameedit').val(),
            'location_id': $('#locationedit').val(),
            'id': $('#idedit').val(),
            'role_id': $('#roleedit').val(),
          },
          success: function(data) {


              $('#edit').modal('hide');

              swal({
                title: "Success",
                text: "User Berhasil Di Update",
                icon: "success",
                buttons: false,
                timer: 2000,
              });

              setTimeout(function(){ window.location.href = '/users'; }, 2000);

          }

        });

      }

    }

</script>   