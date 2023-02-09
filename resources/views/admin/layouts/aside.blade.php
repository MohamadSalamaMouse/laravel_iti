<nav class="navbar navbar-expand-sm navbar-default">
    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li>
                <a href="index.html"><i class="menu-icon fa fa-laptop"></i>{{trans('main_trans.Dashboard')}} </a>
            </li>

            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>{{trans('main_trans.students')}} </a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-puzzle-piece"></i><a href="{{route('student.index')}}">{{trans('main_trans.All_Students')}} </a></li>
                    <li><i class="fa fa-id-badge"></i><a href="{{route('student.create')}}">{{trans('main_trans.Add_Student')}} </a></li>
                    <li><i class="fa fa-id-badge"></i><a href="{{route('student.archive')}}">Archive </a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
