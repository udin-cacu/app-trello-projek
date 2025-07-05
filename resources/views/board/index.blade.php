@include('layout.head')

<!-- /navbar -->
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                <div class="sidebar">
                   <!--/.widget-nav-->
                   @foreach ($workspace as $work)
                   <p>{{ $work->name }}<button onclick="Tambah();" class="btn  pull-right"><i class="icon-plus pull-right"></i></button></a></p>
                   @php
                   $boards = DB::table('board')
                   ->select('board.*', 'board.title as board_title')
                   ->join('workspace', 'board.id_workspace', '=', 'workspace.id')
                   ->where('id_workspace', '=', $work->id)
                   ->get();
                   @endphp
                   @foreach ($boards as $b)
                   <ul class="widget widget-menu unstyled">
                    <li><a href="/board/{{$b->id}}"><i class="menu-icon icon-inbox"></i> 
                        {{ $b->board_title }}
                    </a></li>
                </ul>
                @endforeach
                @endforeach
                <p>
                    
                </div>
                <!--/.sidebar-->
            </div>

            <!--/.span3-->
            <div class="span9">
                <div class="content">
                    <div class="btn-controls">
                        <div class="btn-box-row row-fluid">
                            @foreach ($workspace as $work)
                            <a href="/board/{{$b->id}}" class="btn-box big span4"><i class="icon-envelope"></i><b>{{ $work->name }}</b></a>
                            @endforeach
                        </div>                               
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


@include('workspace.modal') 
@include('layout.footer')  
<script type="text/javascript">
    function Tambah(){

      $('#new').modal('show');

  }

  function Simpan(){

      var empty = false;
      $('input.isi, textarea.isi').each(function() {
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
          url: "{{ route('workspace.store') }}",
          header: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
            '_token': $('input[name=_token]').val(),
            'name': $('#nama').val(),
            'type': $('#tipe').val(),
            'description': $('#deskripsi').val(),

        },
        success: function(data) {

          $('#new').modal('hide');

          swal({
            title: "Success",
            text: "Hero Produk Berhasil Tersimpan",
            icon: "success",
            buttons: false,
            timer: 2000,
        });

          setTimeout(function(){ window.location.href = '/home'; }, 2000);

      }

  });
    }
}

</script>
