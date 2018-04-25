<div class="form-group row">
    {{ Form::label('name', 'Name', ['class'=>'col-form-label col-sm-2']) }}
    <div class="col-sm-10">
        {{ Form::text('name', old('name'), ['class'=>'form-control', 'required']) }}
    </div>
</div>

<div class="form-group row">
    {{ Form::label('type', 'Type', ['class'=>'col-form-label col-sm-2']) }}
    <div class="col-sm-10">
        <label>{{ Form::radio('type','cat-basics') }} Basic</label> &nbsp;
        <label>{{ Form::radio('type','cat-color') }} Color</label>
    </div>
</div>

<div class="form-group row">
    {{ Form::label('minutes_needed', 'Time Needed', ['class'=>'col-form-label col-sm-2']) }}
    <div class="col-sm-10">
        <label>{{ Form::radio('minutes_needed','30') }} 30 Minutes</label> &nbsp;
        <label>{{ Form::radio('minutes_needed','60') }} 1 Hour</label> &nbsp;
        <label>{{ Form::radio('minutes_needed','90') }} 1 Hour 30 Minutes</label> &nbsp;
        <label>{{ Form::radio('minutes_needed','120') }} 2 Hours</label> &nbsp;
        <label>{{ Form::radio('minutes_needed','150') }} 2 Hours 30 Minutes</label> &nbsp;
        <label>{{ Form::radio('minutes_needed','180') }} 3 Hours</label>
    </div>
</div>

<div class="form-group row">
    {{ Form::label('description', 'Description', ['class'=>'col-form-label col-sm-2']) }}
    <div class="col-sm-10">
        {{ Form::text('description', old('description'), ['class'=>'form-control', 'placeholder'=>'Short description about this service']) }}
    </div>
</div>

<div class="form-group row">
    {{ Form::label('price', 'Price', ['class'=>'col-form-label col-sm-2']) }}
    <div class="col-sm-10">
        {{ Form::text('price', old('price'), ['class'=>'form-control','required']) }}
    </div>
</div>
