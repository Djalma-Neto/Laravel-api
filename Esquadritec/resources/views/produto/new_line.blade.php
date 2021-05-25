<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tela nova linha">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('site/style.css')}}">


    <title>Nova Linha</title>
</head>
<style>
    .card {
        background-color: #318A90;
        border-radius: 28px;
        height: 255px;
    }
    .center {
        text-align:center;
    }
    .center-div {
        margin: auto;
        width: 50%;
        padding: 10px;
    }
    .form-control{
        width:65%;
    }
    .bottom-div{
        position: absolute;
        bottom:20%;
        left:25%;
    }

    label {
        color: white;
    }
</style>

<body>
    <div class="py-4 center" style="min-height: 200px;">
        <h2 class="text-main font-monospace ">NOVA LINHA</h2>

        <div class="card center-div" style="width: 500px;min-height: 100%;">
            <form class="" style="height: 100%;">
                @csrf
                <div class="row p-3 center-div pt-5" style="width: 300px;">
                    <label for="linha" class="pr-2" style="color: white">LINHA:</label>
                    <input id="linha" type="text" name="linha" class="form-control" placeholder="">
                </div>
                <div class="center-div bottom-div">
                    <button class="rounded-pill btn btn-md btn-cancelar" type="submit">Cancelar</button>
                    <button class="rounded-pill btn btn-md btn-green" type="submit">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
