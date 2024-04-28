<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title ?? config('app.name') }} | Dashboard </title>
    @include('components.partials.styles')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    @include('components.partials.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('components.partials.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- /.content-header -->
        @include('components.partials.content-header')

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @livewire('messages')
                {{$slot}}

            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Main Footer -->
    @include('components.partials.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('components.partials.scripts')
<!-- PLUGINS -->
<script>

    document.addEventListener('livewire:init', () => {
        Livewire.on('close-modal', (idmodal) => {
            $('#'+idmodal).modal('hide')
        });
    });
    document.addEventListener('livewire:init', () => {
        Livewire.on('open-modal', (idmodal) => {
            $('#'+idmodal).modal('show')
        });
    });

</script>
</body>
</html>
