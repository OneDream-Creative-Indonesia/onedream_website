<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Task Management</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link href="./output.css" rel="stylesheet">
    <style>
        .task {
            padding: 10px;
            margin: 10px;
            cursor: pointer;
            border-radius: 7px;
            background-color:'01013D';
        }
        .dropzone{
            border-radius: 10px;
            padding: 10px;
            margin: 10px;
            background-color: white;
            box-shadow: 0 0 20px 20px 50%;
        }
        #todo, #in-progress, #done {
            flex: 1;
        }
        .task.tag{
            color: blue;
        }

    </style>
     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
     <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
     <script>
        $(function() {
            $(".task").click(function() {
                var taskId = $(this).attr("id");
                var editUrl = "{{ route('toolLending.edit', ['id' => '__taskId__']) }}";
                editUrl = editUrl.replace('__taskId__', taskId);
                window.location.href = editUrl;
            });

            $(".task").draggable({
                revert: "invalid",
                helper: "clone"
            });

            $(".dropzone").droppable({
                accept: ".task",
                drop: function(event, ui) {
                    var taskId = ui.draggable.attr("id");
                    var newStatus = $(this).data("status");
                    if (newStatus === 'done') {
                        ui.draggable.fadeOut("slow", function() {
                            $(this).remove();
                        });
                    } else {
                        ui.draggable.detach().css({top: 0, left: 0}).appendTo(this);
                    }
                    $.ajax({
                        url: '/task/' + taskId,
                        type: 'PUT',
                        data: {
                            status: newStatus,
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            console.log('Task status updated successfully.');
                        },
                        error: function(xhr, status, error) {
                            console.error('Error occurred:', error);
                        }
                    });
                }
            });
        });
    </script>
</head>
<body>
<div id="task-container"  class="flex grid flex-wrap justify-around grid-cols-12 md:grid-cols-3 sm:gap-3">
    <div id="todo" class="w-full p-4 dropzone md:w-1/3" data-status="todo">
        <h3 class="w-full mb-2 text-lg font-bold" style="margin-left: 10px; color:  rgb(36, 36, 36);">Dalam Antrian</h3>
        @foreach($tasks['todo'] as $task)
            <div id="{{ $task->id }}" class="p-4 mb-4 bg-white rounded-lg shadow-md task ui-widget-content" data-status="{{ $task->status }}">
                <p class="font-semibold tag">Nama Barang: {{ $task->nama_barang }}</p>
                <p class="text-sm tag">Tanggal Pinjam: {{ $task->tanggal_pinjam }}</p>
                <p class="text-sm tag">Tanggal Selesai: {{ $task->tanggal_kembali }}</p>
            </div>
        @endforeach
    </div>
    <div id="in-progress" class="w-full p-4 dropzone" data-status="in_progress">
        <h3 class="w-full mb-2 text-lg font-bold" style="margin-left: 10px;color: rgb(36, 36, 36);">Di Pinjam</h3>
        @foreach($tasks['in_progress'] as $task)
        <div id="{{ $task->id }}" class="p-4 mb-4 bg-white rounded-lg shadow-md task ui-widget-content" data-status="{{ $task->status }}">
                <p class="font-semibold tag">Nama Barang: {{ $task->nama_barang }}</p>
                <p class="text-sm tag">Tanggal Pinjam: {{ $task->tanggal_pinjam }}</p>
                <p class="text-sm tag">Tanggal Selesai: {{ $task->tanggal_kembali }}</p>
            </div>
        @endforeach
    </div>
    <div id="done" class="w-full p-4 dropzone" data-status="done">
        <h3 class="w-full mb-2 text-lg font-bold" style="margin-left: 10px;color:  rgb(36, 36, 36);">Selesai</h3>
        @foreach($tasks['done'] as $task)
        <div id="{{ $task->id }}" class="p-4 mb-4 bg-white rounded-lg shadow-md task ui-widget-content" data-status="{{ $task->status }}">
                <p class="font-semibold tag">Nama Barang: {{ $task->nama_barang }}</p>
                <p class="text-sm tag">Tanggal Pinjam: {{ $task->tanggal_pinjam }}</p>
                <p class="text-sm tag">Tanggal Selesai: {{ $task->tanggal_kembali }}</p>
            </div>
        @endforeach
    </div>

</div>


