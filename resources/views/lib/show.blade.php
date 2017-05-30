{{Html::style(('css/bootstrap.css'))}}

<h1>Showข้อมูล</h1>
<div class="panel panel-primary">
    <div class="panel-heading">
        {{ $lib->title }}
    </div>
<div class="panel-body">
    <ul>
        <li>{{ $lib->title}}</li>
        <li>{{ $lib->url}}</li>
        <li>{{ $lib->description}}</li>

    </ul>
    <div>
    {{ Html::link('lib/create','กลับหน้าหลัก', array(
        'class' => 'btn btn-primry'
    ))}}
  </div>
</div>
</div>
