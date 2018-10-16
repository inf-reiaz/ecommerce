@extends('admin.layouts.app')


@section('content')




<div id="content" class="ui-content">
        <div class="ui-content-body">

            <div class="ui-container">

                <div class="row">
                    <div class="col-md-12">

                        <div class="panel">
                            <header class="panel-heading">
                                Subscriber
                                <span class="tools pull-right">
                                    <a class="refresh-box fa fa-repeat" href="javascript:;"></a>
                                    <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="close-box fa fa-times" href="javascript:;"></a>
                                </span>
                            </header>
                            <div class="panel-body">
                                
                            
                            <div class="text-center"></div>
                            
                            <form method="POST" action="http://kdecom-infreiaz.c9users.io/admin/role-to-permissions" accept-charset="UTF-8" class="form-horizontal">
                                <input name="_method" type="hidden" value="PUT">
                                <input name="_token" type="hidden" value="9oTSbHRDYxXKghyHUKVMeaJvfTzMDLmi97aD6YgT">

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"></label>
                                        
                                        <div class="col-lg-8">
                                            
                                            
                                            @foreach($sub as $s)
                                                <div class="checkbox">
                                                    <label class="i-checks">
                                                        <input name="" type="checkbox" value="{{ $s->id }}">
                                                        <i></i>{{ $s->email }}
                                                    </label>
                                                </div>
                                            @endforeach
                                                
                                        </div>
                                        
                                    </div>
                                    
                                           
                                    <!--<div class="form-group">-->
                                    <!--    <label class="col-sm-4 control-label"></label>-->
                                    <!--    <div class="col-lg-4">-->
                                    <!--        <button type="submit" class="btn btn-info btn-block">Create User</button>-->
                                    <!--    </div>-->
                                    <!--    <label class="col-sm-4 control-label"></label>-->
                                    <!--</div>-->
                                    
                                    

                            </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


@endsection

