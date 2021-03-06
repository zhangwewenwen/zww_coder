@extends('layouts.banner')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Welcome to admin Coder</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-clock-o fa-fw"></i> 首页寄语管理
            @if($type==1)
                （已通过留言）
                @endif
            @if($type==0)
                待审核留言
            @endif
            @if($type==-1)
                未通过留言
            @endif
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
                <div class="alert alert-danger">
                    {!! implode('<br>', $errors->all()) !!}
                </div>
            <ul class="timeline">
                @foreach($messages as $key=>$value)
                    @if($key%2==0)
                <li>
                    <div class="timeline-badge"><i class="fa fa-check"></i>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">姓名：{{$value->name}}</h4>
                         <p>   <small class="text-muted"><i class="fa fa-clock-o"></i>{{$value->updated_at}}</small>
                            </p>

                        </div>
                        <div class="timeline-body">
                          留言内容： {{$value->text}}
                        </div>
                        <hr>
                        @if($type==1)
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-gear"></i> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url('/manager/delete_np/message_board')}}{{'/'.$value->id}}"onclick= "javascript:return confirm('您确定要删除吗?')">删除</a>&nbsp;&nbsp;
                                </li>
                            </ul>
                        </div>
                            @endif
                        @if($type==0||$type==-1)
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-gear"></i> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{url('/manager/pass/message_board')}}{{'/'.$value->id}}"onclick= "javascript:return confirm('您确定要通过此留言吗?')">通过</a>&nbsp;&nbsp;
                                    </li>
                                    <li><a href="{{url('/manager/deny/message_board')}}{{'/'.$value->id}}"onclick= "javascript:return confirm('您确定不通过此留言吗?')">不通过</a>&nbsp;&nbsp;
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </li>
                    @endif
                        @if($key%2!=0)
                <li class="timeline-inverted">
                    <div class="timeline-badge warning"><i class="fa fa-graduation-cap"></i>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">姓名：{{$value->name}}</h4>
                            <p> <small class="text-muted"><i class="fa fa-clock-o"></i>{{$value->updated_at}}</small>
                            </p>
                        </div>
                        <div class="timeline-body">
                           留言内容： {{$value->text}}
                        </div>
                        <hr>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-gear"></i> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url('/manager/delete_np/message_board')}}{{'/'.$value->id}}">删除</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>
                        @endif
                @endforeach
                {{$messages->links()}}
            </ul>
        </div>
        <!-- /.panel-body -->
    </div>
    @stop