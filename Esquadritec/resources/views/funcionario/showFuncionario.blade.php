<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$funcionario->name}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <x-content/>
</head>

<body>
    <x-layout/>
    <h2 class="text-black font-monospace py-4">{{$funcionario->name}}</h2>

    <div class="card-generico table">
        <table class="table table-sm center">
            <thead>
                <tr>
                    <th class="table_first_row">NOME</th>
                    <th class="table_first_row">EMAIL</th>
                    <th class="table_first_row">ADMIN</th>
                    <th class="table_first_row">CRIADO</th>
                    <th class="table_first_row">ATUALIZADO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$funcionario->name}}</td>
                    <td>{{$funcionario->email}}</td>
                    <td>{{$funcionario->admin==1?'SIM':'NÃO'}}</td>
                    <td>{{$funcionario->created_at->format('d/m/Y')}} as {{$funcionario->created_at->format('H:i')}}</td>
                    <td>{{$funcionario->updated_at->format('d/m/Y')}} as {{$funcionario->updated_at->format('H:i')}}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <x-footer/>
</body>

</html>