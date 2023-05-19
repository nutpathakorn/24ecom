@extends('layouts.default')

@section('title_page')
Home - @parent
@stop

@section('content')

<!-- product tab start -->
<section class="whish-list-section theme1 pb-70">
    <div class="container grid-wraper">
        <div class="row">
            <div class="col-12">
                <h3 class="title pb-25 text-center text-md-start text-capitalize">Your cart items</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center" scope="col">Product Image</th>
                                <th class="text-center" scope="col">Product Name</th>
                                <th class="text-center" scope="col">Stock Status</th>
                                <th class="text-center" scope="col">Qty</th>
                                <th class="text-center" scope="col">Price</th>
                                <th class="text-center" scope="col">action</th>
                                <th class="text-center" scope="col">Checkout</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center" scope="row">
                                    <img src="{{URL::asset('resources/assets/img/product/2.jpg')}}" alt="img">
                                </th>
                                <td class="text-center">
                                    <span class="whish-title">Water and Wind Resistant</span>
                                </td>
                                <td class="text-center">
                                    <span class="badge badge-danger position-static my-badge">In Stock</span>
                                </td>
                                <td class="text-center">
                                    <div class="product-count style">
                                        <div class="count d-flex justify-content-center">
                                            <input type="number" min="1" max="10" step="1" value="1">
                                            <div class="button-group">
                                                <button class="count-btn increment"><i
                                                        class="fas fa-chevron-up"></i></button>
                                                <button class="count-btn decrement"><i
                                                        class="fas fa-chevron-down"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="whish-list-price">
                                        $38.24
                                    </span></td>

                                <td class="text-center">
                                    <a href="#"> <span class="trash"><i class="fas fa-trash-alt"></i> </span></a>
                                </td>
                                <td class="text-center">
                                    <a href="{{URL::to('checkout')}}" class="btn theme-btn--dark1 btn--xl text-uppercase">buy now</a>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center" scope="row">
                                    <img src="{{URL::asset('resources/assets/img/product/4.jpg')}}" alt="img">
                                </th>
                                <td class="text-center">
                                    <span class="whish-title">Originals Kaval Windbreaker</span>
                                </td>
                                <td class="text-center">
                                    <span class="badge badge-danger position-static my-badge">In Stock</span>
                                </td>
                                <td class="text-center">
                                    <div class="product-count style">
                                        <div class="count d-flex justify-content-center">
                                            <input type="number" min="1" max="10" step="1" value="1">
                                            <div class="button-group">
                                                <button class="count-btn increment"><i
                                                        class="fas fa-chevron-up"></i></button>
                                                <button class="count-btn decrement"><i
                                                        class="fas fa-chevron-down"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="whish-list-price">
                                        $38.24
                                    </span>
                                </td>

                                <td class="text-center">
                                    <a href="#"> <span class="trash"><i class="fas fa-trash-alt"></i> </span></a>
                                </td>
                                <td class="text-center">
                                    <a href="{{URL::to('checkout')}}" class="btn theme-btn--dark1 btn--xl text-uppercase">buy now</a>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center" scope="row">
                                    <img src="{{URL::asset('resources/assets/img/product/6.jpg')}}" alt="img">

                                </th>
                                <td class="text-center">
                                    <span class="whish-title">New Balance Arishi</span>
                                </td>
                                <td class="text-center">
                                    <span class="badge badge-danger position-static my-badge">In Stock</span>
                                </td>
                                <td class="text-center">
                                    <div class="product-count style">
                                        <div class="count d-flex justify-content-center">
                                            <input type="number" min="1" max="10" step="1" value="1">
                                            <div class="button-group">
                                                <button class="count-btn increment"><i
                                                        class="fas fa-chevron-up"></i></button>
                                                <button class="count-btn decrement"><i
                                                        class="fas fa-chevron-down"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="whish-list-price">
                                        $38.24
                                    </span></td>

                                <td class="text-center">
                                    <a href="#"> <span class="trash"><i class="fas fa-trash-alt"></i> </span></a>
                                </td>
                                <td class="text-center">
                                    <a href="{{URL::to('checkout')}}" class="btn theme-btn--dark1 btn--xl text-uppercase">buy now</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->

@stop