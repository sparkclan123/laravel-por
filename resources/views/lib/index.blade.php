{{Html::style(('css/bootstrap.css'))}}

<h1>บันทึก URL</h1>

@if(Session::has('message'))
  <div class="alert alert-info">
    {{ Session::get('message')}}
  </div>
@endif


<table border="1">
  <thead>
    <tr>
        <th>ID</th>
        <th>title</th>
        <th>url</th>
        <th>description</th>
        <th width="200">Action</th>
      </tr>
    </thead>
    <tbody>
@forelse ($lib as $l)
  <tr>
    <td>{{ $l ['id'] }} </td>
    <td>{{ $l ['title'] }}</td>
    <td>{{ $l ['url'] }}</td>
    <td>{{ $l ['description'] }}</td>
      <td>
        {{Form::open(['route'=>['lib.destroy',$l['id'], 'method' => 'DELETE' ]] )}}
        <input type="hidden" name="_method" value="delete"/>
        {{Html::link('lib/'.$l['id'],'ดูข้อมูล')}}
        {{Html::link('lib/'.$l['id'].'/edit','เเก้ไขข้อมูล')}}
        {{Form::submit('Delete' )}}
        {{Form::close()}}
      </td>

  </tr>
@empty
  <tr>
    <td colspan="6">No data!! </td>

  </tr>

@endforelse





</table>
<div class="row">
  <div class="col-xs-5">
    {{ Html::link('lib/create','กลับหน้าเพิ่มข้อมูล', array(
        'class' => 'btn btn-primry'
    ))}}

  </div>
</div>
{{Html::script('js/jquery.min.js')}}
{{Html::script('js/bootstrap.min.js')}}
