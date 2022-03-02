<x-layout.back>
    <x-slot name="css">
        <link href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Menu CSS -->
        <link href="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
        <!-- toast CSS -->
        <link href="{{asset('plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
        <!-- morris CSS -->
        <link href="{{ asset('plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
        <!-- chartist CSS -->
        <link href="{{asset('plugins/bower_components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
        <!-- animation CSS -->
        <link href="{{asset('css/animate.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <!-- color CSS -->
        <link href="{{asset('css/colors/default.css')}}" id="theme" rel="stylesheet">
    </x-slot>

    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">@lang('Animes')</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">@lang('Dashboard')</a></li>
                    <li class="active">@lang('List')</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>

    </div>
    <div class="row" style="margin-left: 0px;margin-right: 0px">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Anime List</h3>
                <div class="row">
                    <a href="{{route('animes.create')}}"  class="btn btn-primary pull-left m-l-20 hidden-xs hidden-sm waves-effect waves-light">
                        @lang('New')
                    </a>
                </div>
                    //TODO:use component inline for the list
                    //TODO: add to migration status quality and publish date and categories
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>@lang('Poster')</th>
                                <th>@lang('Titre')</th>
                                <th>@lang('Date')</th>
                                <th>@lang('status')</th>
                                <th>@lang('Genre')</th>
                                <th>@lang('Action')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($animes as $anime)
                            <tr>
                                <td><img src='https://placeholder.com/'></td>
                                <td>{{$anime->title}}</td>
                                <td>2016</td>
                                <td>Finished</td>
                                <td>Action,Drama,Adventure..</td>
                                <td>
                                    <button>Modifier</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <x-slot name='scripts'>
        <script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
        <!--slimscroll JavaScript -->
        <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
        <!--Wave Effects -->
        <script src="{{asset('js/waves.js')}}"></script>
        <!--Counter js -->
        <script src="{{asset('plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
        <script src="{{asset('plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
        <!-- chartist chart -->
        <script src="{{asset('plugins/bower_components/chartist-js/dist/chartist.min.js')}}"></script>
        <script src="{{asset('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
        <!-- Sparkline chart JavaScript -->
        <script src="{{asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <!-- Custom Theme JavaScript -->
        <script src="{{asset('js/custom.min.js')}}"></script>
        <script src="{{asset('js/dashboard1.js')}}"></script>
        <script src="{{asset('plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
    </x-slot>
</x-layout.back>