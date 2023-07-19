<!DOCTYPE html>
<html>

<head>
    <title>Cadastramento</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top: 200px">
        <!-- Pills navs -->
        <h2 class="text-center">Registo</h2>
        <!-- Pills navs -->
        <!-- Pills content -->
        <div class="tab-content">
            <div class="w-50 m-auto">
                <form method="POST" action="{{ url('usuarios/cadastramento') }}">
                    @csrf()
                    <!-- Username input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="registerUsername">Nome</label>
                        <input type="text" id="registerUsername" name="nome" class="form-control" />
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="registerEmail">Email</label>
                        <input type="email" id="registerEmail" name="email" class="form-control" />
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="registerUsername">Telefone</label>
                        <input type="text" id="registerUsername" name="telefone" class="form-control" />
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="registerUsername">Endereço</label>
                        <input type="text" id="registerUsername" name="endereco" class="form-control" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="registerPassword">Senha</label>
                        <input type="password" id="registerPassword" name="senha" class="form-control" />
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-3">Registar</button>
                </form>
            </div>
        </div>
        <!-- Pills content -->
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</html>
