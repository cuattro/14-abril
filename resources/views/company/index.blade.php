<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Compañias Registradas</title>
</head>
<body>
<h1>LISTADO DE COMPAÑIAS REGISTRADAS EN LA BASE DE DATOS</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE COMPAÑIA</th>
                    <th>NIT COMPAÑIA</th>
                    <th>DIRECCION COMPAÑIA</th>
                </tr>
                </thead>
                <tbody>
                @foreach($companies as $company)
                    <tr>
                        <td>
                            {{$company->id}}
                        </td>
                        <td>
                            {{$company->name_company}}
                        </td>
                        <td>
                            {{$company->nit_company}}
                        </td>
                        <td>
                            {{$company->address_company}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$companies->links()}}
        </div>
    </div>
</div>
</body>
</html>
