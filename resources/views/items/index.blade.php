@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Moje zadania</h2>
    <ul class="nav nav-tabs nav-tabs-dark"> 
        <li class = 'active'><a data-toggle="tab" href="#active">Aktywne</a></li>
        <li><a data-toggle="tab" href="#inactive">Nieaktywne</a></li>
    </ul>

<div class="tab-content" style="padding: 10px;">

  
      <div id="active" class="tab-pane fade in active tab-dark">
          <table class="table table-striped table-dark table-all">
              <thead>
                  <th>Zadanie</th>
                  <th>Opis</th>
                  <th>Data utworzenia</th>
                  <th>Data rozpoczęcia</th>
                  <th>Data zakończenia</th>
                  <th>Działanie</th>
              </thead> 
              <tbody>
                @foreach ($active as $task)
                  <tr class='{{$task->item->type->color}}'>
                    <td>{{$task->item->title}}</td>
                    <td>{{$task->item->desc}}</td>
                    <td>{{date('Y-m-d', strtotime($task->created_at))}}</td>
                    <td>{{$task->item->date_from}}</td>
                    <td>{{$task->item->date_to}}</td>
                    <td><a class="btn btn-success btn-xs" href="{{url('/user/my-tasks/'.$task->id.'/edit')}}">Edytuj</a>
                      <a class="btn btn-success btn-xs" href="{{url('/user/my-tasks/'.$task->id.'/end')}}">Zakończ</a>
                      <a class="btn btn-success btn-xs" href="{{url('/user/my-tasks/'.$task->id.'/delete')}}">Usuń</a>
                    </td>                    
                  </tr>     
                @endforeach
              </tbody>   
          </table>
      </div>
      <div id="inactive" class="tab-pane fade in tab-dark">
          <table class="table table-striped table-dark table-all">
              <thead>
                  <th>Zadanie</th>
                  <th>Opis</th>
                  <th>Data utworzenia</th>
                  <th>Data rozpoczęcia</th>
                  <th>Data zakończenia</th>
              </thead> 
              <tbody>
                @foreach ($inactive as $task)
                  <tr class='{{$task->item->type->color}}'>
                    <td>{{$task->item->title}}</td>
                    <td>{{$task->item->desc}}</td>
                    <td>{{date('Y-m-d', strtotime($task->created_at))}}</td>
                    <td>{{$task->item->date_from}}</td>
                    <td>{{$task->item->date_to}}</td>                  
                  </tr>     
                @endforeach
              </tbody>   
          </table>
      </div>

</div>
</div>
@endsection
