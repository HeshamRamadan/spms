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
					<span data-toggle="collapse" href="#User"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg>User</span>  
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
		
		<li class="parent "  >
				<a data-toggle="collapse" href="#Project">
					<span data-toggle="collapse" href="#Project"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg>Project</span>  
				</a>
				
				<ul class="children collapse @if($state == 'addproject'||$state == 'viewproject'||$state == 'editproject'||$state == 'deleteproject') in @endif" id="Project">
					<li>
						<a class="item @if($state == 'addproject') active @endif" href="{{route('addproject')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Add Project
						</a>
					</li>
					<li>
						<a class="item @if($state == 'viewproject') active @endif" href="{{route('viewproject')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> View Project
						</a>
					</li>
					<li>
						<a class="item @if($state == 'editproject') active @endif" href="{{route('editproject')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Edit Project
						</a>
					</li>
					<li>
						<a class="item @if($state == 'deleteproject') active @endif" href="{{route('deleteproject')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Delete Project
						</a>
					</li>
				</ul>
			</li>
	
		<li class="parent ">
				<a data-toggle="collapse" href="#Task">
					<span data-toggle="collapse" href="#Task"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg>Task</span>  
				</a>
				
				<ul class="children collapse @if($state == 'addtask'||$state == 'viewtask'||$state == 'edittask'||$state == 'deletetask') in @endif" id="Task">
					<li>
						<a class="item @if($state == 'addtask') active @endif" href="{{route('addtask')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Add Task
						</a>
					</li>
					<li>
						<a class="item @if($state == 'viewtask') active @endif" href="{{route('viewtask')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> View Task
						</a>
					</li>
					<li>
						<a class="item @if($state == 'edittask') active @endif" href="{{route('edittask')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Edit Task
						</a>
					</li>
					<li>
						<a class="item @if($state == 'deletetask') active @endif" href="{{route('deletetask')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Delete Task
						</a>
					</li>
				</ul>
			</li>
		
		
		<li class="parent ">
				<a data-toggle="collapse" href="#Issue">
					<span data-toggle="collapse" href="#Issue"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg>Issue</span>  
				</a>
				<ul class="children collapse @if($state == 'addissue'||$state == 'assignissue'||$state == 'viewissue'||$state == 'editissue'||$state == 'deleteissue') in @endif" id="Issue">
					<li>
						<a class="item @if($state == 'addissue') active @endif" href="{{route('addissue')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Add Issue
						</a>
					</li>
					<li>
						<a class="item @if($state == 'assignissue') active @endif" href="{{route('assignissue')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Assign Issue
						</a>
					</li>
					<li>
						<a  class="item @if($state == 'viewissue') active @endif" href="{{route('viewissue')}}" >
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> View Issue
						</a>
					</li>
					<li>
						<a class="item @if($state == 'editissue') active @endif" href="{{route('editissue')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Edit Issue
						</a>
					</li>
					<li>
						<a class="item @if($state == 'deleteissue') active @endif" href="{{route('deleteissue')}}">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Delete Issue
						</a>
					</li>
				</ul>
			</li>
		
		<li class="item @if($state == 'dailyreports') active @endif">
			<a href="{{route('dailyreports')}}">
				<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>Daily Reports
			</a>
		</li>
		
		<li role="presentation" class="divider"></li>
		
		
		</ul>

	</div><!--/.sidebar-->