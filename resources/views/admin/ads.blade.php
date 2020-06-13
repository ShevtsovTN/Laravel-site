@extends('admin.layout')
@section('title')
    @lang('title.ads')
@endsection
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Get Listing Data</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Listing data elements</div>
                <div class="panel-body">
                    <div class="col-md-8">
                        <form class="" name="listingForm" role="form" enctype="multipart/form-data">
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
                            <div class="form-group">
                                <label>DescriptionTitle ES</label>
                                <input name="description_title_es" class="form-control" placeholder="Placeholder">
                            </div>
                            <div class="form-group">
                                <label>DescriptionTitle EN</label>
                                <input name="description_title_en" class="form-control" placeholder="Placeholder">
                            </div>
                            <div class="form-group">
                                <label>DescriptionTitle RU</label>
                                <input name="description_title_ru" class="form-control" placeholder="Placeholder">
                            </div>
                            <div class="form-group">
                                <label>Description ES</label>
                                <textarea name="description_es" class="form-control" placeholder="Placeholder"
                                          rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Description EN</label>
                                <textarea name="description_en" class="form-control" placeholder="Placeholder"
                                          rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Description RU</label>
                                <textarea name="description_ru" class="form-control" placeholder="Placeholder"
                                          rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Options ES</label>
                                <input name="options_es" class="form-control" placeholder="Placeholder">
                                <label>Options EN</label>
                                <input name="options_en" class="form-control" placeholder="Placeholder">
                                <label>Options RU</label>
                                <input name="options_ru" class="form-control" placeholder="Placeholder">
                            </div>
                            <div class="form-group">
                                <label>Address ES</label>
                                <input name="address_es" class="form-control" placeholder="Placeholder">
                                <label>Address EN</label>
                                <input name="address_en" class="form-control" placeholder="Placeholder">
                                <label>Address RU</label>
                                <input name="address_ru" class="form-control" placeholder="Placeholder">
                            </div>
                            <div class="form-group">
                                <label>Cities RU</label>
                                <select multiple name="cities" class="form-control">
                                    <option value="1">Benidorm</option>
                                    <option value="2">Alicante</option>
                                    <option value="3">Torrevieja</option>
                                    <option value="4">Alcoy</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Categories</label>
                                <select multiple name="categories" id="" class="form-control">
                                    <option value="1" selected>Apartment</option>
                                    <option value="2">Bar</option>
                                    <option value="3">Bungalo</option>
                                    <option value="4">House</option>
                                    <option value="5">Shop</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Types</label>
                                <div class="radio">
                                    <label><input type="radio" name="type" checked>For Sale</label>
                                    <label><input type="radio" name="type">For Rent</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>File input</label>
                                <input type="file">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-inline">
                                <input name="amount" class="form-control" placeholder="Price">
                                <input name="area" class="form-control" placeholder="Floor area">
                                <input name="rooms" class="form-control" placeholder="Number of rooms">
                                <input name="baths" class="form-control" placeholder="Number of baths">
                                <input value="Submit" form="listingForm" type="submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
@endsection
