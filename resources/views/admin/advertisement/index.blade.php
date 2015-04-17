@extends('admin.adminLayout')
@section('title')
    Обьявления
@stop
@section('js')
    <!-- Tables -->
    <script src="/pub_admin/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="/pub_admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <script>
        function checkAll(bx) {
            var cbs = document.getElementsByTagName('input');
            for (var i = 0; i < cbs.length; i++) {
                if (cbs[i].type == 'checkbox') {
                    cbs[i].checked = bx.checked;
                }
            }
        }
    </script>
@stop
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Обьявления</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                Все Обьявления
                <div class="pull-right">
                    <div class="btn-toolbar  btn-group-xs" role="toolbar" aria-label="...">
                        <a href="{{route('admin.advertisement.create')}}"
                           data-toggle="tooltip"
                           data-original-title="Добавить обьявления"
                           class="btn btn-default btn-mini"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <!--<th>#</th>  -->
                            <th>Название</th>
                            <th>Одобрено</th>
                            <th>Категория</th>
                            <th>Текст</th>
                            <th>Пользователь</th>
                            <th>Фото</th>
                            <th>Цена</th>
                            <th>&nbsp;</th>
                            <th data-toggle="tooltip"
                                onclick="document.getElementsByName('ApproveAll')[0].click()"
                                data-original-title="Выберете обьявления">
                                <input name="ApproveAll" type="checkbox" value="" onclick="checkAll(this)"/>
                                <label for="ApproveAll"><i class="fa fa-list-ul"></i></label>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ads as $ad)
                            <tr>
                                <!-- <td>{{$ad->id}}</td> -->
                                <td>
                                    <a href="{{route('admin.advertisement.show',['id'=> $ad->id])}}">
                                    {{$ad->title}}</a></td>
                                <td>
                                    @if($ad->isApproved())
                                        <span class="label label-success">
                                            <i class="fa fa-hand-o-up"></i>
                                        </span>
                                    @else
                                        <span class="label label-warning">
                                            <i class="fa fa-hand-o-down"></i>
                                        </span>
                                    @endif
                                </td>
                                <td>{{$ad->category->title}}</td>
                                <td class="row-content-td ">{{$ad->text}}</td>
                                <td>{{$ad->user->email}}</td>
                                <td> 
                                    @if($ad->ads_attachment)

                                        @foreach($ad->ads_attachment as $image)
                                            {!! HTML::image(url('img', ['advertisements', $image->name]).'?w=50&h=50&fit=crop', 'a picture',
                                            ['class' => 'img-thumbnail img-responsive',
                                            'data-toggle'=>"tooltip",
                                            'data-original-title'=>"Коментарий:". $image->comment,
                                            ]) !!}
                                        @endforeach

                                    @else
                                        &nbsp;
                                    @endif
                                </td>
                                <!-- <td> HTML::image(Image::thumb($ad->attachment->getSrc(), 80), 'a picture', ['class' => 'img-thumbnail img-responsive']) !!}</td> -->
                                <td>{{$ad->price}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="...">
                                        {!! Form::open(['route'=>['admin.advertisement.destroy',$ad->id],
                                        'class'=>'form-horizontal confirm',
                                        'role'=>'form', 'method' => 'DELETE']) !!}
                                        <a href="{{route('admin.approve.approve',['id'=>$ad->id])}}"
                                           class="btn btn-primary" data-toggle="tooltip" data-placement="left"
                                           title="Подтвердить"><i class="fa fa-thumbs-o-up"></i></a>
                                        <a href="{{route('admin.advertisement.edit',['id'=>$ad->id])}}"
                                           data-toggle="tooltip"
                                           data-original-title="Редактитровать обьявление"
                                           class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                        <button
                                                data-toggle="tooltip"
                                                data-original-title="Удалить обьявление"
                                                {{-- $ad->advertisements()->count() == 0 ? '' : 'disabled' --}}
                                                type="submit" class="btn btn-danger confirm-btn"><i
                                                    class="fa fa-trash-o"></i></button>
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                                <td><input type="checkbox"/></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
            <div class="panel-footer">
                <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-warning">Подтвердить выбранные</button>
                    <button type="button" class="btn btn-danger">Удалить выбранные</button>

                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                            Че-то еще
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Dropdown link</a></li>
                            <li><a href="#">Dropdown link</a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center">{!! $ads->render() !!}</div>
            </div>
        </div>
        <!-- /.panel -->
        <!-- /.panel -->
    </div>
@stop
