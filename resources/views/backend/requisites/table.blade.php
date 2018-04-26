<table class="table table-responsive" id="requisites-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Payment Via</th>
        <th>Webmonney</th>
        <th>Qiwi Wallet</th>
        <th>Yandex Money</th>
        <th>Rnn</th>
        <th>Checking</th>
        <th>Bank</th>
        <th>Mfo</th>
        <th>Bin</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($requisites as $requisite)
        <tr>
            <td>{!! $requisite->title !!}</td>
            <td>{!! $requisite->payment_via !!}</td>
            <td>{!! $requisite->webmonney !!}</td>
            <td>{!! $requisite->qiwi_wallet !!}</td>
            <td>{!! $requisite->yandex_money !!}</td>
            <td>{!! $requisite->rnn !!}</td>
            <td>{!! $requisite->checking !!}</td>
            <td>{!! $requisite->bank !!}</td>
            <td>{!! $requisite->mfo !!}</td>
            <td>{!! $requisite->bin !!}</td>
            <td>
                {!! Form::open(['route' => ['requisites.destroy', $requisite->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('requisites.show', [$requisite->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('requisites.edit', [$requisite->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>