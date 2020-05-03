
    <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>@lang('content.components_search.title')</p>
                        </div>
                        <!-- Search Form -->
                        <form action="{{route('search_form')}}" method="post" id="advanceSearch">
                            @csrf
                            <div class="row">

                            <!--<div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <input type="input" class="form-control" name="keyword" placeholder="@lang('content.components_search.keyword')">
                                    </div>
                                </div>-->

                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <select class="form-control" id="cities" name="cities">
                                            <option value="0">@lang('content.components_search.cities.4')</option>
                                            <option>@lang('content.components_search.cities.0')</option>
                                            <option>@lang('content.components_search.cities.1')</option>
                                            <option>@lang('content.components_search.cities.2')</option>
                                            <option>@lang('content.components_search.cities.3')</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <select class="form-control" id="categories" name="categories">
                                            <option value="0">@lang('content.components_search.categories.0')</option>
                                            <option>@lang('content.components_search.categories.1')</option>
                                            <option>@lang('content.components_search.categories.2')</option>
                                            <option>@lang('content.components_search.categories.3')</option>
                                            <option>@lang('content.components_search.categories.4')</option>
                                            <option>@lang('content.components_search.categories.5')</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <select class="form-control" id="offers" name="offers">
                                            <option value="0">@lang('content.components_search.offers.0')</option>
                                            <option>100% @lang('content.components_search.offers.1')</option>
                                            <option>75% @lang('content.components_search.offers.1')</option>
                                            <option>50% @lang('content.components_search.offers.1')</option>
                                            <option>25% @lang('content.components_search.offers.1')</option>
                                            <option>10% @lang('content.components_search.offers.1')</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-3">
                                    <div class="form-group">
                                        <select class="form-control" id="types" name="type">
                                            <option value="0">@lang('content.components_search.actions.2')</option>
                                            <option>@lang('content.components_search.actions.0')</option>
                                            <option>@lang('content.components_search.actions.1')</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" id="rooms" name="rooms">
                                            <option value="0">@lang('content.components_search.rooms.0')</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" id="baths" name="baths">
                                            <option value="0">@lang('content.components_search.rooms.1')</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5+</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-8 col-lg-12 col-xl-5 d-flex">
                                    <!-- Space Range -->
                                    <div class="slider-range">
                                        <div data-min="20" data-max="820" data-unit=" sq. m" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="20" data-value-max="820">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <input type="hidden" class="from" name="area_from" id="area_from" value="20">
                                        <input type="hidden" class="to" name="area_to" id="area_to" value="820">
                                        <div class="range">20 @lang('content.components_search.units_measuring.0') - 820 @lang('content.components_search.units_measuring.0')</div>
                                    </div>

                                    <!-- Distance Range -->
                                    <div class="slider-range">
                                        <div data-min="10" data-max="1300" data-unit=" mil" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="10" data-value-max="1300">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <input type="hidden" class="from" name="amount_from" id="amount_from" value="10">
                                        <input type="hidden" class="to" name="amount_to" id="amount_to" value="1300">
                                        <div class="range">10 @lang('content.components_search.units_measuring.1') - 1300 @lang('content.components_search.units_measuring.1')</div>
                                    </div>
                                </div>

                            <!--<div class="col-12 search-form-second-steps">
                                    <div class="row">

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="types">
                                                    <option>@lang('content.components_search.types.0')</option>
                                                    <option>@lang('content.components_search.types.1') <span>(30)</span></option>
                                                    <option>@lang('content.components_search.types.2') <span>(69)</span></option>
                                                    <option>@lang('content.components_search.types.3') <span>(103)</span></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="catagories2">
                                                    <option>@lang('content.components_search.categories.0')</option>
                                                    <option>@lang('content.components_search.categories.1')</option>
                                                    <option>@lang('content.components_search.categories.2')</option>
                                                    <option>@lang('content.components_search.categories.3')</option>
                                                    <option>@lang('content.components_search.categories.4')</option>
                                                    <option>@lang('content.components_search.categories.5')</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="Actions">
                                                    <option>@lang('content.components_search.actions.2')</option>
                                                    <option>@lang('content.components_search.actions.0')</option>
                                                    <option>@lang('content.components_search.actions.1')</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="city2">
                                                    <option>@lang('content.components_search.cities.4')</option>
                                                    <option>@lang('content.components_search.cities.0')</option>
                                                    <option>@lang('content.components_search.cities.1')</option>
                                                    <option>@lang('content.components_search.cities.2')</option>
                                                    <option>@lang('content.components_search.cities.3')</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="Actions3">
                                                    <option>@lang('content.components_search.actions.2')</option>
                                                    <option>@lang('content.components_search.actions.0')</option>
                                                    <option>@lang('content.components_search.actions.1')</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="city3">
                                                    <option>@lang('content.components_search.cities.4')</option>
                                                    <option>@lang('content.components_search.cities.0')</option>
                                                    <option>@lang('content.components_search.cities.1')</option>
                                                    <option>@lang('content.components_search.cities.2')</option>
                                                    <option>@lang('content.components_search.cities.3')</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="city5">
                                                    <option>@lang('content.components_search.cities.4')</option>
                                                    <option>@lang('content.components_search.cities.0')</option>
                                                    <option>@lang('content.components_search.cities.1')</option>
                                                    <option>@lang('content.components_search.cities.2')</option>
                                                    <option>@lang('content.components_search.cities.3')</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->

                                <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- More Filter -->
                                <!--<div class="more-filter">
                                        <a href="#" id="moreFilter">+ @lang('content.components_search.filters')</a>
                                    </div>-->
                                    <!-- Submit -->
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn south-btn">@lang('content.components_search.buttons')</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


