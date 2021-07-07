<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Novo Orçamento</title>
        <meta name="description" content="Tela de novo usuário">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('site/style.css')}}">

    </head>

    <body>
    
        <x-layout/>
        <div class="py-4 center">

            <h2 class="text-dark font-monospace py-4">Novo Orçamento</h2>

            <div class="card center-div text-white" style="min-width: 700px;height: 100%;">
                <form class="" style="height: 100%; width: 100%;" method="POST" action="{{route('orcamento_set')}}">
                    @csrf
                    <div class="full-width mb-2 center">
                        <label for="cliente">Cliente:</label>

                        <select id="cliente" class="input-3" name="cliente" required>
                            @foreach ($clientes as $cli)
                                <option value="{{$cli->id}}">{{$cli->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row p-3 center-div pt-5" style="width: 300px;">
                        <label for="desconto" class="pr-2 col-form-label" style="color: white">Desconto(%):</label>
                        <input id="desconto" type="number" name="desconto" class="form-control" placeholder="">
                    </div>

                    <div class="full-width mb-2 center">
                        <textarea id="observation" name="observacao" placeholder="Observações"
                            style="height: 100px; width: 65%; border-radius: 10px;"></textarea>
                    </div>

                    <div class="pt-4">
                        <a class="rounded-pill btn btn-md btn-cancelar mx-4" href="{{route('dashboard')}}" type="reset">Cancelar</a>
                        <button class="rounded-pill btn btn-sm btn-success ml-5" type="submit">Seguir</button>
                    </div>
                </form>
            </div>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>

        @endif

        @if($errors->all())
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        @endif

        <x-footer/>
    </body>
</html>