<div>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('plugins/img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>{{$producto->nombre}}</h2>
                        <div class="breadcrumb__option">
                            <a href="{{url('/tienda')}}">Tienda</a>
                            <a href="#">Vegetables</a>
                            <span>{{$producto->nombre}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                 src="{{ asset("/storage/productos/$producto->imagen") }}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="{{ asset('plugins/img/product/details/product-details-2.jpg') }}"
                                 src="{{ asset('plugins/img/product/details/thumb-1.jpg') }}" alt="">
                            <img data-imgbigurl="{{ asset('plugins/img/product/details/product-details-3.jpg') }}"
                                 src="{{ asset('plugins/img/product/details/thumb-2.jpg') }}" alt="">
                            <img data-imgbigurl="{{ asset('plugins/img/product/details/product-details-5.jpg') }}"
                                 src="{{ asset('plugins/img/product/details/thumb-3.jpg') }}" alt="">
                            <img data-imgbigurl="{{ asset('plugins/img/product/details/product-details-4.jpg') }}"
                                 src="{{ asset('plugins/img/product/details/thumb-4.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{$producto->nombre}}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">S/ {{number_format($producto->precio_venta,2)}}</div>
                        <p>{!! nl2br(htmlspecialchars($producto->caracteristicas)) !!}</p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">ADD TO CARD</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Disponibilidad</b> <span>Con Stock</span></li>
                            <li><b>Envío</b> <span>01 día de envío</span></li>
                            <li><b>Peso</b> <span>0.5 kg</span></li>
                            <li><b>Compartir</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--<div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                   aria-selected="true">Caracteristicas</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Informacion del producto</h6>
                                    <p>{!! nl2br(htmlspecialchars($producto->caracteristicas)) !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </section>
</div>
