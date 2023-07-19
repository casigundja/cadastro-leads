<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link href="{{ asset('css/styless.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>

    <div id="mySidenav" class="sidenav">
        <p class="logo"><span>Gundja</span>Tech</p>
        <a href="#" class="icon-a"><img src="{{ url ('img/perfil.png')}}"></i> &nbsp;&nbsp;</a>
        <a href="{{ url('leads') }}" class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;{{ Auth::user()->nome }}</a>
        <a href="{{ url('leads') }}" class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Leads</a>
        <a href="{{ url('logout') }}" class="icon-a"><i class="fas fa-address-book"></i> &nbsp;&nbsp;Sair</a>
    </div>

    <div id="main">
        <div class="head">
            <div class="col-div-6">
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; Cadastro de Leads</span>
            </div>
            <div class="col-div-6">
            </div>
        </div>

        <div class="clearfix"></div>
        <br /><br />

        <div class="col-div-8">
            <div class="box-8">
                <div class="content-box">
                    <form method="POST" action="{{ url('leads/cadastramento') }}">
                        @csrf()
                        <table>
                            <tr>
                                <th>Nome do lead</th>
                            </tr>
                            <tr>
                                <th><input style="width: 450px;"  type="text" id="registerUsername" name="lead" class="form-control"></th>
                            </tr>
                            <th><button type="submit" class="btn btn-primary btn-lg">Registar</button></th>
                    </form>
                        </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
