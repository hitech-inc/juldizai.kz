<table class="table table-responsive" id="testmenus-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Path</th>
        <th>Parent Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($testmenus as $testmenu)
        <tr>
            <td>{!! $testmenu->title !!}</td>
            <td>{!! $testmenu->path !!}</td>
            <td>{!! $testmenu->parent_id !!}</td>
            <td>
                {!! Form::open(['route' => ['testmenus.destroy', $testmenu->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('testmenus.show', [$testmenu->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('testmenus.edit', [$testmenu->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>