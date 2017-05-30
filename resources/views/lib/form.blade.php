{{Html::style(('css/bootstrap.css'))}}

<h1>Form lib</h1>
<div class="panel panel-primary">
<div class="panel-heading">
 @if(isset($lib))
    Edit form
  @else
    add form
 @endif

</div>
@if(isset($lib))
   {{ Form::open(['method' => 'put', 'route' => ['lib.update', $lib->id] ])}}
 @else
   {{ Form::open(['url' => 'lib' ])}}
@endif
<div class="panel-body">
  @if (count( $errors ) >0 )
    <div class="alert alert-denger">
      <ul>
          @foreach ($errors->all as $error)
          <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div>
@endif

=========================================
  <div class="row">
    <div class="col-xs-2">
{{ Form::label('title','TITLE')}}
      </div>
    <div class="col-xs-5">
      @if(isset($lib->title))
      {{Form::text('title' ,$lib->title,['class' => 'form-control'] )}}
    @else
      {{Form::text('title' ,'',['class' => 'form-control'] )}}
    @endif
    </div>
  </div>
  =========================================
  <div class="row">
    <div class="col-xs-2">
{{ Form::label('url','URL')}}
      </div>
    <div class="col-xs-5">
      @if(isset($lib->url))
      {{Form::text('url ',$lib->url,['class' => 'form-control'] )}}
    @else
      {{Form::text('url' ,'',['class' => 'form-control'] )}}
    @endif
    </div>
  </div>

  =========================================
  <div class="row">
    <div class="col-xs-2">
{{ Form::label('description','description')}}
      </div>
    <div class="col-xs-5">
      @if(isset($lib->description))
      {{Form::text('description' ,$lib->description,['class' => 'form-control'] )}}
    @else
      {{Form::text('description' ,'',['class' => 'form-control'] )}}
    @endif
    </div>
  </div>

  =========================================
  <div class="row">
    <div class="col-xs-2">
  {{Form::submit('บันทึกข้อมูล' ,['class' => 'btn btn-primry'] )}}
  

    </div>
  </div>




</div>
{{ Form::close()}}
</div>

{{Html::script('js/jquery.min.js')}}
{{Html::script('js/bootstrap.min.js')}}
