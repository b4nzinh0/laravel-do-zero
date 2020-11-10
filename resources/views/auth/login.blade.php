@extends("auth.template.index")

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{route("login")}}"><b>Admin</b>B4nzinh0</a>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Entrar com seus dados!</p>

                <form action="{{route("login")}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <label for="email"></label>
                        <input type="email" class="form-control @error("email") has-error @enderror" name="email" id="email" value="{{old("email") ?? ""}}" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error("email")
                        <span ></span>
                        @enderror


                    </div>
                    <div class="input-group mb-3">
                        <label for="password"></label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Lembrar-me
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Acessar</button>
                        </div>

                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                   <hr>
                    <a href="{{route("password.email")}}" class="btn btn-block btn-primary">
                        <i class="fa fa-lock mr-2"></i> Esqueci minha senha
                    </a>
                    <a href="{{route("register")}}" class="btn btn-block btn-danger">
                        <i class="fa fa-user-plus mr-2"></i> Ainda nao tenho conta
                    </a>
                </div>



            </div>

        </div>
    </div>
@endsection
