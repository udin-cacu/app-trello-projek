@include('layout.head')
<style>
  .module-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card-item {
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
    cursor: move;
}
.card-white {
    background-color: #ffffff;
}
.card-gray {
    background-color: #f1f1f1;
}

</style>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <div class="container">
                <a class="brand" href="/home">{{$board->title}} </a>
                
            </div>

            <div class="module">
                <div class="module-head d-flex justify-content-between align-items-center">
                  <h3 class="m-0">{{$board->title}}</h3>
                  <button class="btn btn-success" id="{{ $board->id }}" onclick="TambahBoard({{ $board->id }});">Tambah</button>
              </div>
              <div class="row-fluid">
                 <div class="span12">
                    <div class="content">
                      <div class="btn-controls">
                        <div class="btn-box-row row-4">
                            <ul id="list" class="btn-box small span3 widget widget-menu unstyled" ondrop="drop(event, 'list')" ondragover="allowDrop(event)" >
                                <h4>Data List</h4>
                                @foreach($lists as $index => $item)
                                <div class="card card-item " 
                                draggable="true" 
                                ondragstart="drag(event)" 
                                id="card-{{ $item->id }}">
                                <div class="card-body p-2" style="text-align: left;">
                                    <span class="btn btn-success btn-mini">{{ $item->title }}</span>
                                    <h6>{{$item->deskripsi}}</h6>
                                    <i class="fa fa-eye" style="color: #48494b; font-size: 15px;">                                  
                                        @php
                                        $user = DB::table('users')
                                        ->select('users.*')
                                        ->join('user_board_details', 'users.id', '=', 'user_board_details.user_id')
                                        ->join('board_details','user_board_details.board_detail_id','=','board_details.id')
                                        ->where('user_board_details.board_detail_id', '=', $item->id)
                                        ->get();
                                        @endphp
                                        @foreach($user as $data)
                                        {{$data->name}}
                                        @endforeach
                                    </i>
                                </div>
                            </div>
                            @endforeach

                        </ul>

                        <ul id="progres" class="btn-box small span3 widget widget-menu unstyled" ondrop="drop(event, 'progres')" ondragover="allowDrop(event)" >
                            <h4>Data Progres</h4>
                            @foreach($progres as $index => $item)
                            <div class="card card-item " 
                            draggable="true" 
                            ondragstart="drag(event)" 
                            id="card-{{ $item->id }}">
                            <div class="card-body p-2" style="text-align: left;">
                                <span class="btn btn-info btn-mini">{{ $item->title }}</span>
                                <h6>{{$item->deskripsi}}</h6>
                                <i class="fa fa-eye" style="color: #48494b; font-size: 15px;">
                                    @php
                                    $user = DB::table('users')
                                    ->select('users.*')
                                    ->join('user_board_details', 'users.id', '=', 'user_board_details.user_id')
                                    ->join('board_details','user_board_details.board_detail_id','=','board_details.id')
                                    ->where('user_board_details.board_detail_id', '=', $item->id)
                                    ->get();
                                    @endphp
                                    @foreach($user as $data)
                                    {{$data->name}}
                                    @endforeach
                                </i>
                            </div>
                        </div>
                        @endforeach
                    </ul>

                    <ul id="cek" class="btn-box small span3 widget widget-menu unstyled" ondrop="drop(event, 'cek')" ondragover="allowDrop(event)" >
                        <h4>Data Cek</h4>
                        @foreach($cek as $index => $item)
                        <div class="card card-item " 
                        draggable="true" 
                        ondragstart="drag(event)" 
                        id="card-{{ $item->id }}">
                        <div class="card-body p-2" style="text-align: left;">
                            <span class="btn btn-success btn-mini">{{ $item->title }}</span>
                            <h6>{{$item->deskripsi}}</h6>
                            <i class="fa fa-eye" style="color: #48494b; font-size: 15px;">
                                @php
                                $user = DB::table('users')
                                ->select('users.*')
                                ->join('user_board_details', 'users.id', '=', 'user_board_details.user_id')
                                ->join('board_details','user_board_details.board_detail_id','=','board_details.id')
                                ->where('user_board_details.board_detail_id', '=', $item->id)
                                ->get();
                                @endphp
                                @foreach($user as $data)
                                {{$data->name}}
                                @endforeach
                            </i>
                        </div>
                    </div>
                    @endforeach
                </ul>

                <ul id="selesai" class="btn-box small span3 widget widget-menu unstyled" ondrop="drop(event, 'selesai')" ondragover="allowDrop(event)" >
                    <h4>Data Selesai</h4>
                    @foreach($selesai as $index => $item)
                    <div class="card card-item " 
                    draggable="true" 
                    ondragstart="drag(event)" 
                    id="card-{{ $item->id }}">
                    <div class="card-body p-2" style="text-align: left;">
                        <span class="btn btn-success btn-mini">{{ $item->title }}</span>
                        <h6>{{$item->deskripsi}}</h6>
                        <i class="fa fa-eye" style="color: #48494b; font-size: 15px;">
                            @php
                            $user = DB::table('users')
                            ->select('users.*')
                            ->join('user_board_details', 'users.id', '=', 'user_board_details.user_id')
                            ->join('board_details','user_board_details.board_detail_id','=','board_details.id')
                            ->where('user_board_details.board_detail_id', '=', $item->id)
                            ->get();
                            @endphp
                            @foreach($user as $data)
                            {{$data->name}}
                            @endforeach
                        </i>
                    </div>
                </div>
                @endforeach
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </div>
</div>
<!-- /navbar-inner -->
</div>
</div>
</div>
</div>
</div>

@include('board.modal') 
<script>
    function TambahBoard(id){

        $('#boardid').val(id);

        $('#new').modal('show');

    }

    function SimpanBoard(){

// Ambil checkbox terpilih
        let selectedUsers = [];
        $('#user-checkboxes input[type="checkbox"]:checked').each(function () {
          selectedUsers.push($(this).val());
      });


        $.ajax({
          type: 'POST',
          url: "{{ route('boarddetail.store') }}",
          header: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {
            '_token': $('input[name=_token]').val(),
            'title': $('#title').val(),
            'deskripsi': $('#deskripsi').val(),
            'id': $('#boardid').val(),
            'user_id': selectedUsers, // array of user_id

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

          setTimeout(function() {
            window.location.reload()
        }, 1000);

      }

  });
    }


    function allowDrop(ev) {
        ev.preventDefault();
    }

    function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
    }

    function drop(ev, status) {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        var card = document.getElementById(data);
        ev.target.appendChild(card);

        let id = data.replace('card-', '');

        fetch("{{ route('update.status') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                id: id,
                status: status
            })
        }).then(res => res.json()).then(data => {
            console.log('Status updated');
        });
    }
</script>

@include('layout.footer')  
