<!--Action Button-->
  @if(Active::checkUriPattern('admin/blog1Tags'))
      <export-component></export-component>
  @endif
<!--Action Button-->
<div class="btn-group">
  <button type="button" class="btn btn-primary btn-flat dropdown-toggle" data-toggle="dropdown">Action
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="{{route('admin.blog1Tags.index')}}"><i class="fa fa-list-ul"></i> {{trans('menus.backend.blog1tags.all')}}</a></li>
    @permission('create-blog1-tag')
    <li><a href="{{route('admin.blog1Tags.create')}}"><i class="fa fa-plus"></i> {{trans('menus.backend.blog1tags.create')}}</a></li>
    @endauth
  </ul>
</div>

<div class="clearfix"></div>