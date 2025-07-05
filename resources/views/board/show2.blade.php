@include('layout.head')

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">

            <a class="brand" href="/home">{{$board->title}} </a>

            <div class="module">
             <div class="module-head d-flex justify-content-between align-items-center">
              <h3 class="m-0">{{$board->title}}</h3>
              <button class="btn btn-success">Tambah</button>
          </div>
          <div class="row-fluid">
           <div class="span12">
            <div class="content">
              <div class="btn-controls">
                <div class="btn-box-row row-4">
                    <ul id="list" class="btn-box small span3 widget widget-menu unstyled" ondrop="drop(event, 'list')" ondragover="allowDrop(event)">
                        <h4>Data List</h4>
                        @foreach($lists as $item)
                        <li class="active" draggable="true" ondragstart="drag(event)" id="card-{{ $item->id }}">
                            {{ $item->title }}
                        </li>
                        @endforeach
                    </ul>

                    <ul id="progres" class="btn-box small span3 widget widget-menu unstyled" ondrop="drop(event, 'progres')" ondragover="allowDrop(event)">
                        <h4>Data Progres</h4>
                        @foreach($progres as $item)
                        <li class="active" draggable="true" ondragstart="drag(event)" id="card-{{ $item->id }}">
                            {{ $item->title }}
                        </li>
                        @endforeach
                    </ul>

                    <ul id="cek" class="btn-box small span3 widget widget-menu unstyled" ondrop="drop(event, 'cek')" ondragover="allowDrop(event)">
                        <h4>Data Cek</h4>
                        @foreach($cek as $item)
                        <li class="active" draggable="true" ondragstart="drag(event)" id="card-{{ $item->id }}">
                            {{ $item->title }}
                        </li>
                        @endforeach
                    </ul>

                    <ul id="selesai" class="btn-box small span3 widget widget-menu unstyled" ondrop="drop(event, 'selesai')" ondragover="allowDrop(event)">
                        <h4>Data Selesai</h4>
                        @foreach($selesai as $item)
                        <li class="active" draggable="true" ondragstart="drag(event)" id="card-{{ $item->id }}">
                            {{ $item->title }}
                        </li>
                        @endforeach
                    </ul>


                </div>


                <!-- /.nav-collapse -->
            </div>
        </div>
        <!-- /navbar-inner -->
    </div>
</div></div></div></div>

@include('workspace.modal') 
<script>
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
