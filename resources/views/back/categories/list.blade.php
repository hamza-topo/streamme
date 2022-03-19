<x-layout.back>
    <x-slot name="css">
        <link href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Menu CSS -->
        <link href="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <!-- color CSS -->
        <link href="{{asset('css/colors/default.css')}}" id="theme" rel="stylesheet">
    </x-slot>

    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">@lang('Categories')</h4>
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
                <h3 class="box-title">@lang('Catgeories List')</h3>
                <div class="row">
                    <a href="{{route('categories.create')}}"  class="btn btn-primary pull-left m-l-20 hidden-xs hidden-sm waves-effect waves-light">
                        @lang('New')
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>@lang('name')</th>
                                <th>@lang('number of animes')</th>
                                <th>@lang('Action')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                             <x-admin.category.category-line :category='$category'></x-admin.category.category-line>
                            @endforeach
  
                        </tbody>
                    </table>
                </div>
                {{-- $categories->links() --}}
            </div>
        </div>
    </div>

    <x-slot name='scripts'>
        <script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
        <!-- Custom Theme JavaScript -->
        <script src="{{asset('js/custom.min.js')}}"></script>
        <script src="{{asset('js/dashboard1.js')}}"></script>

    </x-slot>
</x-layout.back>