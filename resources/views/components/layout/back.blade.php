<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>{{ config('app.name') }}</title>
    <!-- Bootstrap Core CSS -->
    {{$css}}
    @livewireStyles
</head>

<body class="fix-header">
    <div id="wrapper">
    <livewire:tools.modal></livewire:tools.modal>

        <x-admin.side-bar.nav-bar></x-admin.side-bar.nav-bar>
        <!-- End Top Navigation -->
        <x-admin.side-bar.side-bar></x-admin.side-bar.side-bar>
        <div id="page-wrapper">
            {{$slot}}
            <!-- /.container-fluid -->
            <x-admin.footer.footer></x-admin.footer.footer>
        </div>
    </div>
    @livewireScripts
    {{$scripts}}
</body>
    </html>