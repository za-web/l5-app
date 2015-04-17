@extends('admin.adminLayout')
@section('title')
    Обьявление
@stop
@section('js')
@stop
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Обьявление</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Обьявление
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12   ">
                            <tr>
                                <!-- <td>{{$advertisement->id}}</td> -->
                                <td>
                                    <a href="{{route('admin.advertisement.show',['id'=> $advertisement->id])}}">
                                        {{$advertisement->title}}</a></td>
                                <td>
                                    @if($advertisement->isApproved())
                                        <span class="label label-success">
                                            <i class="fa fa-hand-o-up"></i>
                                        </span>
                                    @else
                                        <span class="label label-warning">
                                            <i class="fa fa-hand-o-down"></i>
                                        </span>
                                    @endif
                                </td>
                                <td>{{$advertisement->category->title}}</td>
                                <td>{{$advertisement->text}}</td>
                                <td>{{$advertisement->user->email}}</td>
                                <td>
                                    @if($advertisement->ads_attachment)

                                        @foreach($advertisement->ads_attachment as $image)
                                            {!! HTML::image(Image::thumb($image->getSrc(), 80), 'a picture',
                                            ['class' => 'img-thumbnail img-responsive',
                                            'data-toggle'=>"tooltip",
                                            'data-original-title'=>"Коментарий:". $image->comment,
                                            ]) !!}
                                        @endforeach

                                    @else
                                        &nbsp;
                                    @endif
                                </td>
                                <!-- <td> HTML::image(Image::thumb($advertisement->attachment->getSrc(), 80), 'a picture', ['class' => 'img-thumbnail img-responsive']) !!}</td> -->
                                <td>{{$advertisement->price}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="...">
                                        {!! Form::open(['route'=>['admin.advertisement.destroy',$advertisement->id],
                                        'class'=>'form-horizontal confirm',
                                        'role'=>'form', 'method' => 'DELETE']) !!}
                                        <a href="{{route('admin.approve.approve',['id'=>$advertisement->id])}}"
                                           class="btn btn-primary" data-toggle="tooltip" data-placement="left"
                                           title="Подтвердить"><i class="fa fa-thumbs-o-up"></i></a>
                                        <a href="{{route('admin.advertisement.edit',['id'=>$advertisement->id])}}"
                                           data-toggle="tooltip"
                                           data-original-title="Редактировать обьявление"
                                           class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                        <button
                                                data-toggle="tooltip"
                                                data-original-title="Удалить обьявление"
                                                {{-- $advertisement->advertisements()->count() == 0 ? '' : 'disabled' --}}
                                                type="submit" class="btn btn-danger confirm-btn"><i
                                                    class="fa fa-trash-o"></i></button>
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                                <td><input type="checkbox"/></td>
                            </tr>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
@stop
