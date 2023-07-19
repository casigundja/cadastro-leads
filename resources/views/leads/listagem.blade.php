<!Doctype HTML>
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
        <p class="logo"><span>Gundja</span>Tech </p>
        <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
        <a href="#" class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;{{ Auth::user()->nome }}</a>
        <a href="{{ url('leads/cadastramento') }}" class="icon-a"><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Cadastrar Leads</a>
        <a href="{{ url('leads') }}" class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Leads</a>
        <a href="{{ url('logout') }}" class="icon-a"><i class="fas fa-address-book"></i> &nbsp;&nbsp;Sair</a>
    </div>
    
    <div id="main">
        <div class="head">
            <div class="col-div-6">
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; Dashboard</span>
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">&#9776; Dashboard</span>
            </div>

            <div class="col-div-6">
                <div class="profile">
                    <img src="{{ url ('img/perfil.png')}}" class="pro-img" />
                    <p>{{ Auth::user()->nome }}<span>CEO & Founder</span></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
        <br />
        <div class="clearfix"></div>
        <br /><br />
        <div class="col-div-8">
            <div class="box-8">
                <div class="content-box">
                    <p>Listagem<span>View All</span></p>
                    <br />
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Leads Cadastrados</th>
                        </tr>
                        <tr>
                            @foreach ($leads as $item)
                            @if (Auth::user()->id == $item->usuario_id )
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nome }}</td>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        <div class="col-div-4">
            <div class="box-4">
                <div class="content-box">
                    <p>Leads Recente <span>View All</span></p>
                    <div class="circle-wrap">
                        <div class="circle">
                            <div class="mask full">
                                <div class="fill"></div>
                            </div>
                            <div class="mask half">
                                <div class="fill"></div>
                            </div>
                            <div class="inside-circle"> 70% </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(".nav").click(function () {
            $("#mySidenav").css('width', '70px');
            $("#main").css('margin-left', '70px');
            $(".logo").css('visibility', 'hidden');
            $(".logo span").css('visibility', 'visible');
            $(".logo span").css('margin-left', '-10px');
            $(".icon-a").css('visibility', 'hidden');
            $(".icons").css('visibility', 'visible');
            $(".icons").css('margin-left', '-8px');
            $(".nav").css('display', 'none');
            $(".nav2").css('display', 'block');
        });

        $(".nav2").click(function () {
            $("#mySidenav").css('width', '300px');
            $("#main").css('margin-left', '300px');
            $(".logo").css('visibility', 'visible');
            $(".icon-a").css('visibility', 'visible');
            $(".icons").css('visibility', 'visible');
            $(".nav").css('display', 'block');
            $(".nav2").css('display', 'none');
        });
    </script>
</body>

</html>
