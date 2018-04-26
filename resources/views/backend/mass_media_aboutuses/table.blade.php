<table class="table table-responsive" id="massMediaAboutuses-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Img</th>
        <th>Link</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($massMediaAboutuses as $massMediaAboutUs)
        <tr>
            <td>{!! $massMediaAboutUs->title !!}</td>
            <td>{!! $massMediaAboutUs->img !!}</td>
            <td>{!! $massMediaAboutUs->link !!}</td>
            <td>
                {!! Form::open(['route' => ['massMediaAboutuses.destroy', $massMediaAboutUs->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('massMediaAboutuses.show', [$massMediaAboutUs->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('massMediaAboutuses.edit', [$massMediaAboutUs->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>