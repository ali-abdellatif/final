<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">movie edit</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        {!! Form::model($record,[
        'action'      =>          ['Admin\MovieController@update',$record->id],
        'method'      =>           'put'
        ]) !!}
        @include('movies.form')

        {!! Form::close() !!}
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
