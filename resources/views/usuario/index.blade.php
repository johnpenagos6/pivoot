<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>PIVOOT</title>
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="../assets/LOGO-VF-PIVOOT.png" type="image/x-icon">
    <link rel="stylesheet" href="/vendor/chartist/css/chartist.min.css">
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="./vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/inicio.css') }}" rel="stylesheet">
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

</head>

<body>

    <!--*******
        Preloader start
    ********-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******
        Preloader end
    ********-->

    <!--************
        Main wrapper start
    *************-->
    <div id="main-wrapper">

        <!--************
            Nav header start
        *************-->
        <div class="nav-header">
            <a href="{{'inicio'}}" class="brand-logo">
                <img class="logo-abbr" src="{{ secure_asset('assets/LOGO-VF-PIVOOT.png') }}" alt="">
                <img class="logo-compact" src="{{ secure_asset('assets/logo-2.png') }}" alt="">
                <img class="brand-title" src="{{ secure_asset('assets/logo-2.png') }}" alt="">
            </a>

            <div class=" nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span
                        class="line"></span>
                </div>
            </div>
        </div>

        <!--************
            Header start
        *************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Pivoot
                            </div>
                        </div>




                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">

                                <div class="header-info">
                                    <span class="text-black"><strong>{{ Auth::user()->email }}</strong></span>
                                    <p class="fs-12 mb-0">{{ Auth::user()->name }}</p>

                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="./app-profile.html" class="dropdown-item ai-icon">
                                    <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                        width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span class="ml-2">Profile </span>
                                </a>
                                <a href="./email-inbox.html" class="dropdown-item ai-icon">
                                    <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success"
                                        width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                    <span class="ml-2">Inbox </span>
                                </a>
                                <a href="{{ url('logout') }}" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                        width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    <span class="ml-2" href="{{ url('logout') }}">Cerrar sesión</span>
                                </a>
                            </div>
                        </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>


        <!--************
            Header end ti-comment-alt
        *************-->

        <!--************
            Sidebar start
        *************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">INICIO</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ 'inicio' }}">Inicio</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-notepad"></i>

                            <span class="nav-text">JUGADORES</span>
                        </a>
                        <ul aria-expanded="false">
                            <ul aria-expanded="false">
                                <li><a class="nav-link" href="{{ 'jugadores' }}">Ver jugadores</a></li>
                            </ul>
                    </li>
                    </li>
                </ul>
                </li>

                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-notepad"></i>

                        <span class="nav-text">ENTRENADOR</span>
                    </a>
                    <ul aria-expanded="false">
                        <ul aria-expanded="false">
                            <li><a class="nav-link" href="{{ 'entrenador' }}">Ver entrenadores</a></li>
                        </ul>
                </li>
                </li>
                </ul>
                </li>


                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">CATEGORÍAS</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a class="nav-link" href="{{ 'categorias' }}">Ver categorías</a></li>

                    </ul>
                </li>

                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-notepad"></i>

                        <span class="nav-text">ENTRENAMIENTO</span>
                    </a>
                    <ul aria-expanded="false">
                        <ul aria-expanded="false">
                            <li><a class="nav-link" href="{{ 'entrenamiento' }}">Ver entrenamiento</a></li>
                            <li><a class="nav-link" href="{{ 'Tipo_entrenamiento' }}">Tipo de entrenamiento</a></li>
                        </ul>
                </li>
                </li>
                </ul>
                </li>

                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-layer-1"></i>
                        <span class="nav-text">SEGUIMIENTOS </span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a class="nav-link" href="{{ 'seguimiento' }}">Ver seguimintos</a></li>

                    </ul>
                </li>

                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-notepad"></i>
                        <span class="nav-text">ACUDIENTES</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a class="nav-link" href="{{ 'Acudiente' }}">Ver acudientes</a></li>

                    </ul>
                </li>

                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">NOVEDADES</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a class="nav-link" href="{{ 'Novedad' }}">Ver novedades</a></li>

                    </ul>
                </li>


                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-layer-1"></i>
                        <span class="nav-text">USUARIOS</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a class="nav-link" href="{{ 'usuario' }}">Ver usuarios</a></li>


                    </ul>
                </li>

                <div class="copyright">
                    <p class="d-inline-block ml-2">&COPY;Equipo desarrollador ESBALCA</a>.</p>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item active"><a href="javascript:void(0)"></a></li>
                    </ol>
                </div>
                <!-- row -->
                <center>
                    @if (session('mensaje_exito'))
                        <div>
                            <strong class="alert alert-success">
                                {{ session('mensaje_exito') }}
                            </strong>
                        </div><br>
                    @endif
                </center>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{'inicio'}}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
                    </ol>
                  </nav>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Usuarios</h4><a href="{{'usuarios-excel/create'}}" type="button" class="btn btn-primary">🡱</a>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal" data-whatever="@getbootstrap">+</button>



                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="jugadores" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Rol</th>
                                                <th>Nombre usuario</th>
                                                <th>Correo usuario</th>
                                                <th>Ver</th>
                                                <th>Actualizar</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($usuarios as $usuario)
                                                @if ($usuario->habilitado == 1 or $usuario->habilitado == null)
                                                    <tr>
                                                        <td>{{ $usuario->id }}</td>
                                                        <td>{{ $usuario->rol()->first()->nombreRol }}</td>
                                                        <td>{{ $usuario->name }}</td>
                                                        <td>{{ $usuario->email }}</td>

                                                        <td>
                                                            <a type="button"
                                                                href="{{ url('usuario/' . $usuario->id) }}"
                                                                class="btn btn-primary shadow btn-xs sharp mr-1 fa fa-eye" data-toggle="modal"
                                                                data-target="#Modal{{ $usuario->id }}">
                                                                </a>

                                                            <div data-backdrop="static" class="modal fade" id="Modal{{ $usuario->id }}"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="ModalLabel">
                                                                                <strong>{{ $usuario->name }}
                                                                                </strong>
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <ul>
                                                                                <li><strong>Usuario:
                                                                                    </strong>{{ $usuario->id }}</li>
                                                                                <br>
                                                                                <li><strong>Rol:
                                                                                    </strong>{{ $usuario->rol()->first()->nombreRol }}
                                                                                </li><br>
                                                                                <li><strong>Nombre usuario:
                                                                                    </strong>{{ $usuario->name }}
                                                                                </li>
                                                                                <br>
                                                                                <li><strong>Correo usuario:
                                                                                    </strong>{{ $usuario->email }}
                                                                                </li>
                                                                                <br>


                                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <center>
                                                            <a type="button"
                                                                href="{{ url('usuario/' . $usuario->id . '/index') }}"
                                                                class="btn btn-primary shadow btn-xs sharp mr-1 bton-actualizar" data-toggle="modal"
                                                                data-target="#update{{ $usuario->id }}"
                                                                data-whatever="@getbootstrap"><i class="fa fa-pencil"></i>
                                                            </a>
                                                            </center>

                                                            <div data-backdrop="static" class="modal fade" id="update{{ $usuario->id }}"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="ModalLabel">
                                                                                <strong>{{ $usuario->name }}</strong>
                                                                            </h5>
                                                                            <button type="button"
                                                                                class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <center>
                                                                                <form method="POST"
                                                                                    action="{{ url('usuario/' . $usuario->id) }}"
                                                                                    class="form-horizontal formulario-editar">
                                                                                    @method('PUT')
                                                                                    @csrf
                                                                                    <div class="form-group">
                                                                                        <label for="recipient-name"
                                                                                            class="col-form-label">Rol
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <input
                                                                                            value="{{ $usuario->rol()->first()->nombreRol }}"
                                                                                            name="rol"
                                                                                            readonly="readonly"
                                                                                            class="form-control input-md">
                                                                                        <strong
                                                                                            class="alert-danger">{{ $errors->first('rol') }}</strong>
                                                                                    </div>


                                                                                    <div class="form-group">
                                                                                        <label for="recipient-name"
                                                                                            class="col-form-label">Nombre
                                                                                            usuario
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <input
                                                                                            value="{{ $usuario->name }}"
                                                                                            name="nombre"
                                                                                            placeholder="Ingrese usuario"
                                                                                            class="form-control input-md">
                                                                                        <strong
                                                                                            class="alert-danger">{{ $errors->first('nombre') }}</strong>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="recipient-name"
                                                                                            class="col-form-label">Correo
                                                                                            usuario
                                                                                            <span
                                                                                                class="text-danger">*</span>
                                                                                        </label>
                                                                                        <input
                                                                                            value="{{ $usuario->email }}"
                                                                                            name="email" type="email"
                                                                                            placeholder="Ingrese correo"
                                                                                            class="form-control input-md">
                                                                                        <strong
                                                                                            class="alert-danger">{{ $errors->first('email') }}</strong>
                                                                                    </div>


                                                                            </center>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-dismiss="modal">Cerrar</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Actualizar</button>
                                                                            </div>
                                                                            </form>
                                                                        </div>
                                                        </td>
                                                        <td>
                                                            @switch ($usuario->habilitado)
                                                                @case(null)
                                                                    <a>

                                                                        <a href="{{ url('usuario/' . $usuario->id . '/habilitar') }}"
                                                                            class="btn btn-success">
                                                                            Habilitar
                                                                        </a>

                                                                @break
                                                                @case(1)

                                                                    <a href="{{ url('usuario/' . $usuario->id . '/habilitar') }}"
                                                                        class="btn btn-warning">
                                                                        Inhabilitar
                                                                    </a>

                                                                @break
                                                                @case(2)
                                                                    <a>Estado: Inactivo</a>
                                                                    <a href="{{ url('usuario/' . $usuario->id . '/habilitar') }}"
                                                                        class="btn btn-success">
                                                                        Habilitar
                                                                    </a>

                                                                @break

                                                            @endswitch
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>
                                <center>


                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <h5 class="modal-title" id="exampleModalLabel"><strong>Nuevo
                                                            usuario</strong>

                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ url('usuario') }}"
                                                        class="form-horizontal formulario-confirmar"
                                                        onsubmit="verificarPasswords(); return false">
                                                        @csrf

                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Rol
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <select class="form-control default-select"
                                                                aria-label="Default select example"
                                                                class="box" name="rol"
                                                                value="{{ old('rol') }}">

                                                                <option value="">Seleccione el rol</option>
                                                                <option value="1">Jugador</option>
                                                                <option value="2">Entrenador</option>
                                                            </select>
                                                            <strong
                                                                class="alert-danger">{{ $errors->first('rol') }}</strong>
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Nombre
                                                                usuario
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input value="{{ old('nombre') }}" name="nombre"
                                                                type="text" placeholder="Ingrese usuario"
                                                                class="form-control input-md">
                                                            <strong
                                                                class="alert-danger">{{ $errors->first('nombre') }}</strong>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Correo
                                                                usuario
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input value="{{ old('email') }}" name="email"
                                                                type="text" placeholder="Ingrese email"
                                                                class="form-control input-md">
                                                            <strong
                                                                class="alert-danger">{{ $errors->first('email') }}</strong>
                                                        </div>




                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Cerrar</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Registrar</button>
                                                        </div>
                                                    </form>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>



                    <!-- Required vendors -->
                    <script src="./vendor/global/global.min.js"></script>
                    <script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
                    <script src="./js/custom.min.js"></script>
                    <script src="./js/deznav-init.js"></script>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                    <!-- Datatable -->
                    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
                    <script src="./js/plugins-init/datatables.init.js"></script>
                    <script>
                        $('#jugadores').DataTable({
                            responsive: true,
                            autoWidth: false,

                            "language": {
                                "lengthMenu": "Mostrar _MENU_ registros por página",
                                "zeroRecords": "Nada encontrado - disculpa",
                                "info": "Mostrando la página _PAGE_ de _PAGES_",
                                "infoEmpty": "No hay registros disponibles",
                                "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                                'search': 'Buscar:',
                                'paginate': {
                                    'next': 'Siguiente',
                                    'previous': 'Anterior'
                                }
                            }
                        });
                    </script>

<script>
    $('.formulario-confirmar').submit(function(e){
        e.preventDefault();

     Swal.fire({
     title: '¿Estás seguro?',
     text: "¡Se registrará este usuario!",
     icon: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'Si, registrar'
   }).then((result) => {
     if (result.isConfirmed) {
//         Swal.fire(
//           'Deleted!',
//           'Your file has been deleted.',
//           'success'
//  )

this.submit();
 }
})
});

</script>


<script>
    $('.formulario-editar').submit(function(e){
        e.preventDefault();

     Swal.fire({
     title: '¿Estás seguro?',
     text: "¡Se actualizará este usuario!",
     icon: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'Si, actualizar'
   }).then((result) => {
     if (result.isConfirmed) {
//         Swal.fire(
//           'Deleted!',
//           'Your file has been deleted.',
//           'success'
//  )

this.submit();
 }
})
});

</script>

</body>

</html>
