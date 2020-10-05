<!--Action Button-->
    @if(Active::checkUriPattern('admin/blog1s'))
        <export-component></export-component>
    @endif
<!--Action Button-->
<div class="btn-group">
  <button type="button" class="btn btn-primary btn-flat dropdown-toggle" data-toggle="dropdown">Action
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="{{route('admin.blog1s.index')}}"><i class="fa fa-list-ul"></i> {{trans('menus.backend.blog1s.all')}}</a></li>
    @permission('create-blog1')
    <li><a href="{{route('admin.blog1s.create')}}"><i class="fa fa-plus"></i> {{trans('menus.backend.blog1s.create')}}</a></li>
    @endauth
  </ul>
</div>
<div class="clearfix"></div>