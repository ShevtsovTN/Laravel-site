@extends('admin.layout')
@section('title')
    @lang('title.ads')
@endsection
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Forms</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Listing elements</div>
                <div class="panel-body">
                    <div class="col-12">
                        <form class="col-12" name="listingForm" role="form">
                            <div class="row">
                                <div class="form-group">
                                    <label>Title ES</label>
                                    <input name="title_es" class="form-control" placeholder="Placeholder">
                                </div>
                                <div class="form-group">
                                    <label>Title EN</label>
                                    <input name="title_en" class="form-control" placeholder="Placeholder">
                                </div>
                                <div class="form-group">
                                    <label>Title RU</label>
                                    <input name="title_ru" class="form-control" placeholder="Placeholder">
                                </div>

                            </div>
                            <input value="Submit" form="listingForm" type="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
@endsection
