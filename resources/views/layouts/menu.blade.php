
<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a href="{!! route('posts.index') !!}"><i class="fa fa-edit"></i><span>Posts</span></a>
</li>




<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{!! route('categories.index') !!}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>

<li class="{{ Request::is('lessons*') ? 'active' : '' }}">
    <a href="{!! route('lessons.index') !!}"><i class="fa fa-edit"></i><span>Lessons</span></a>
</li>

<li class="{{ Request::is('subjects*') ? 'active' : '' }}">
    <a href="{!! route('subjects.index') !!}"><i class="fa fa-edit"></i><span>Subjects</span></a>
</li>

<li class="{{ Request::is('comentaries*') ? 'active' : '' }}">
    <a href="{!! route('comentaries.index') !!}"><i class="fa fa-edit"></i><span>Comentaries</span></a>
</li>

<li class="{{ Request::is('documents*') ? 'active' : '' }}">
    <a href="{!! route('documents.index') !!}"><i class="fa fa-edit"></i><span>Documents</span></a>
</li>

<li class="{{ Request::is('enrolments*') ? 'active' : '' }}">
    <a href="{!! route('enrolments.index') !!}"><i class="fa fa-edit"></i><span>Enrolments</span></a>
</li>

