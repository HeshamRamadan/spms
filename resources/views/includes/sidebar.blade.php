<?php session('state',''); ?>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<img alt="" src="{{URL::to('src/img/user.png')}}" style="width:90%;">
		<hr>
		<ul class="nav menu">
		<li class="item @if($state == 'dashboard') active @endif">
			<a href="{{route('dashboard')}}">
				<svg class="glyph stroked dashboard-dial">
					<use xlink:href="#stroked-dashboard-dial">
					</use>
				</svg>Dashboard
			</a>
		</li>
		<li class="parent ">
				
				<a data-toggle="collapse" href="#User">
					<span data-toggle="collapse" href="#User"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>Users</span>  
				</a>
				
				<ul class="children collapse @if($state == 'addnewuser'||$state == 'edituser') in @endif" id="User">
					<li>
						<a class="item @if($state == 'addnewuser') active @endif" href="{{route('reg')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Add User
						</a>
					</li>
					<li>
						<a class="item @if($state == 'edituser') active @endif" href="{{route('edituser')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Edit User
						</a>
					</li>
					
				</ul>
			</li>
		<li class="item @if($state == 'Projects') active @endif">
			<a href="{{route('viewproject')}}">
				<svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg>Projects
			</a>
		</li>
		
	
		
		
		
		
		<li class="item @if($state == 'dailyreports') active @endif">
			<a href="{{route('dailyreports')}}">
				<svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg>Daily Reports
			</a>
		</li>
		
		<li role="presentation" class="divider"></li>
		
		
		</ul>

	</div><!--/.sidebar-->