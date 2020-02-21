<section class="content">

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">All Movies</h3>

        </div>
        <div class="box-body">
            <a href="{{url(route('movie.create'))}}" class="btn btn-primary"> add new movie  <i class="fa fa-plus"></i></a>
            <br>
            <br>
            @if(count($records))
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>movie name</th>
                            <th class="text-center">edit</th>
                            <th class="text-center">delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($records as $record)
                            {{--                                <tr id="removable{{$record->id}}">--}}
                            <td>{{$loop->iteration}}</td>
                            <td>{{$record->name}}</td>
                            {{--                            <td class="text-center" style="direction: ltr">{{optional($record->movies)->name}}</td>--}}
                            <td class="text-center">
                                <a href="{{url(route('movie.edit',$record->id))}}" class="btn btn-success btn-xs">edit <i class="ion-edit"></i></a>
                            </td>
                            <td class="text-center">
                                {!! Form::open([
                                    'action'        =>         ['Admin\MovieController@destroy',$record->id],
                                    'method'        =>          'delete'
                                 ]) !!}
                                <button type="submit" class="btn btn-danger btn-xs"> delete <i class="ion-android-delete"></i></button>

                                {!! Form::close() !!}
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-center">No data</p>
            @endif
        </div>

    </div>


</section>
