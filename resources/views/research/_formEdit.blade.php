<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>Edit Research</h1>
    </div>
    <div class="panel-body">

            <div class="form-group{{ $errors->has('publication') ? ' has-error' : '' }}">
                    {!! Form::label('publication', 'ปีที่ตีพิมพ์') !!}
                    {!! Form::selectRange('publication', date("Y") + 543 - 20, date("Y") + 543, null , ['class' => 'form-control']   ) !!}
                    @if ($errors->has('publication'))
                        <span class="help-block">
                            <strong>{{ $errors->first('publication') }}</strong>
                        </span>
                    @endif
                </div>
                {{-- {{ dd ($research->teacher()->firstOrFail()->id ) }} --}}
                <div class="form-group{{ $errors->has('owner') ? ' has-error' : '' }}">
                        {{-- {{ dd( $research->user()->first()->id ) }} --}}
                    {!! Form::label('owner', 'เจ้าของ') !!}
                    {!! Form::select('owner',App\Teacher::duty()->orderBy('rank', 'desc')->orderBy('name_th')->pluck('name_th', 'id'), $research->teacher()->firstOrFail()->id , ['class' => 'form-control']) !!}
                    {{-- {!! Form::select('owner',$teachers, null , ['class' => 'form-control']) !!} --}}
                    {{-- {!! Form::text('owner', null, ['class' => 'form-control']) !!} --}}
                    @if ($errors->has('owner'))
                        <span class="help-block">
                            <strong>{{ $errors->first('owner') }}</strong>
                        </span>
                    @endif
                </div>
        
                <div class="form-group{{ $errors->has('info') ? ' has-error' : '' }}">
                    {!! Form::label('info', 'รายละเอียด') !!}
                    {!! Form::textarea('info', null, ['class' => 'form-control']) !!}
                    @if ($errors->has('info'))
                        <span class="help-block">
                            <strong>{{ $errors->first('info') }}</strong>
                        </span>
                    @endif
                </div>
        
{{--         
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('owner', 'Owner') !!}
            {!! Form::text('owner', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('file', 'File') !!}
            {!! Form::file('file', ['class' => 'form-control']) !!}
        </div> --}}



        {{-- @for($i = $num + 1; $i <= 5; $i++)
            <hr>
            <div class="form-group">
                {!! Form::label('name'.$i, 'Section '.$i. ' Name') !!}
                {!! Form::text('name'.$i, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('image'.$i, 'Section '.$i. ' Image') !!}
                {!! Form::file('image'.$i, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description'.$i, 'Section '.$i.' Description') !!}
                {!! Form::textarea('description'.$i, null, ['class' => 'form-control']) !!}
            </div>
        @endfor --}}
    </div>
    <div class="panel-footer">
        {!! Form::submit($submit_text, ['class' => 'btn btn-primary btn-lg']) !!}
    </div>
</div>