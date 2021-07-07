<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de Orçamento</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">
</head>

<body>

    <x-layout/>
    
    <h2>Lista de Orçamento</h2>

    <div class="col-lg-12" style="text-align: right; margin-bottom: 0.5%;">
        <a type="button" href="{{route('new_orcamento')}}" class="btn btn-primary btn-sm">ADICIONAR +</a>
    </div>

    <div class="card table">
        <table class="table table-sm center">
            <thead>
                <tr>
                <th scope="col" class="table_first_row">CLIENTE</th>
                <th scope="col" class="table_first_row">CPF</th>
                <th scope="col" class="table_first_row">CNPJ</th>
                <th scope="col" class="table_first_row">TELEFONE</th>
                <th scope="col" class="table_first_row">EMAIL</th>
                <th scope="col" class="table_first_row">ENDERECO PRINCIPAL</th>
                <th scope="col" class="table_first_row">DATA DE EMISSÃO</th>
                <th scope="col" class="table_first_row">Q. PRODUTO</th>
                <th scope="col" class="table_first_row">VALOR TOTAL</th>
                <th scope="col" class="table_first_row">VALOR DESCONTO</th>
                <th scope="col" class="table_first_row">VALOR FINAL</th>
                <th scope="col" class="table_first_row">STATUS</th>
                <th scope="col" class="table_first_row">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                    @foreach($orcamentos as $orcamento)
                        <td class="table_rows">{{$orcamento['cliente']->name}}</td>
                        <td class="table_rows">{{$orcamento['cliente']->cpf}}</td>
                        <td class="table_rows">{{$orcamento['cliente']->cnpj}}</td>
                        <td class="table_rows">{{$orcamento['cliente']->telefone}}</td>
                        <td class="table_rows">{{$orcamento['cliente']->email}}</td>
                        <td class="table_rows">
                        {{$orcamento['cliente']->endereco[0]['cidade']}};
                        Rua {{$orcamento['cliente']->endereco[0]['rua']}};
                        Bairro {{$orcamento['cliente']->endereco[0]['bairro']}};
                        Nº {{$orcamento['cliente']->endereco[0]['numero']}}
                        </td>
                        <td>{{$orcamento['created_at']->format('d/m/Y')}} as {{$orcamento['created_at']->format('H:i')}}</td>
                        <td class="table_rows">{{$orcamento['quantidade_produto']}}</td>
                        <td class="table_rows">R$ {{$orcamento['valor_t_b']}}</td>
                        <td class="table_rows">{{$orcamento['desconto']}}%</td>
                        <td class="table_rows">R${{$orcamento['valor_f']}}</td>
                        <td class="table_rows">{{$orcamento['status']}}</td>
                        <td class="row">
                            <form method="GET">
                                <button class="btn" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                        <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                                    </svg>
                                </button>
                            </form>

                            <form method="GET">
                                <button class="btn" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </button>
                            </form>

                            <form method="GET">
                                <button class="btn" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    @endforeach
            </tbody>
        </table>
    </div>

    <x-footer/>
</body>

</html>