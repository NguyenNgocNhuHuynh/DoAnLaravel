@extends('user.layout.default')
@section('body')
<div class="ads-grid py-sm-5 py-4">
	<div class="container py-xl-4 py-lg-2">
		<!-- tittle heading -->
		<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
			<span>O</span>ur
			<span>N</span>ew
			<span>P</span>roducts</h3>
		<!-- //tittle heading -->
		<div class="row">
			<!-- product left -->
			<div class="agileinfo-ads-display col-lg-9">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
						<h3 class="heading-tittle text-center font-italic">Samsung</h3>
						<div class="row">

							@foreach($listspSS ?? '' as $item)
							
							<div class="col-md-4 product-men mt-5">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item text-center">
										<img height="150px" width="auto" src="{{asset('admin/img/product/'.$item->image)}}" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{route('show',$item->id)}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
									</div>
									<div class="item-info-product text-center border-top mt-4">
										<h4 class="pt-1">
											<a href="{{route('show',$item->id)}}"> {{$item->name}}</a>
										</h4>
										<div class="info-product-price my-2">
											<span class="item_price">{{$item->price}}</span>
											
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											{{-- <form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="{{$item->name}}" />
													<input type="hidden" name="amount" value="{{$item->price}}" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button btn" />
												</fieldset>
											</form> --}}
											<input type="submit" name="submit" value="Add to cart" class="button btn" />
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<!-- //first section -->
					<!-- second section -->
					<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
						<h3 class="heading-tittle text-center font-italic">Iphone</h3>
						<div class="row">
							@foreach($listspIP ?? '' as $item_IP)
							<div class="col-md-4 product-men mt-5">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item text-center">
										<img height="150px" width="auto" src="{{asset('admin/img/product/'.$item_IP->image)}}" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{route('show',$item_IP->id)}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
									</div>
									<div class="item-info-product text-center border-top mt-4">
										<h4 class="pt-1">
										<a href="{{route('show',$item_IP->id)}}">{{$item_IP->name}}</a>
										</h4>
										<div class="info-product-price my-2">
											<span class="item_price">{{$item_IP->price}}</span>
											
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											{{-- <form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="{{$item_IP->name}}" />
													<input type="hidden" name="amount" value="{{$item_IP->price}}" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button btn" />
												</fieldset>
											</form> --}}
											<input type="submit" name="submit" value="Add to cart" class="button btn" />
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<!-- //second section -->
					<!-- third section -->
					<div class="product-sec1 product-sec2 px-sm-5 px-3">
						<div class="row">
							<h3 class="col-md-4 effect-bg">Summer Carnival</h3>
							<p class="w3l-nut-middle">Get Extra 10% Off</p>
							<div class="col-md-8 bg-right-nut">
								<img src="{{asset('user/images/image1.png')}}" alt="">
							</div>
						</div>
					</div>
					<!-- //third section -->
					<!-- fourth section -->
					<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
						<h3 class="heading-tittle text-center font-italic">Xiaomi</h3>
						<div class="row">
							@foreach($listspXiaomi ?? '' as $item_XA)
							<div class="col-md-4 product-men mt-5">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item text-center">
										<img height="150px" width="auto" src="{{asset('admin/img/product/'.$item_XA->image)}}" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{route('show',$item_XA->id)}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
									</div>
									<span class="product-new-top">New</span>
									<div class="item-info-product text-center border-top mt-4">
										<h4 class="pt-1">
											<a href="{{route('show',$item_XA->id)}}">{{$item_XA->name}}</a>
										</h4>
										<div class="info-product-price my-2">
											<span class="item_price">{{$item_XA->price}}</span>
											
										</div>
										<div class="snipcart-details top_brand_home_de	tails item_add single-item hvr-outline-out">
											{{-- <form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="{{$item_XA->name}}" />
													<input type="hidden" name="amount" value="{{$item_XA->price}}" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button btn" />
												</fieldset>
											</form> --}}
											<input type="submit" name="submit" value="Add to cart" class="button btn" />
										</div>

									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<!-- //fourth section -->
				</div>
			</div>
			<!-- //product left -->

			<!-- product right -->
			<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
				<div class="side-bar p-sm-4 p-3">
				
						<!-- electronics -->
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Brand</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Search Brand..." name="search" required="">
								<input type="submit" value=" ">
							</form>
							<div class="left-side py-2">
								<ul>
									@foreach ($category as $item)
										
									
									<li>
										<input type="checkbox" class="checked">
										<span class="span">{{$item->name}}</span>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
	
	
					<!-- price -->
					<div class="range border-bottom py-2">
						<h3 class="agileits-sear-head mb-3">Price</h3>
						<div class="w3l-range">
							<ul>
								<li>
									<a href="#">Under $1,000</a>
								</li>
								<li class="my-1">
									<a href="#">$1,000 - $5,000</a>
								</li>
								<li>
									<a href="#">$5,000 - $10,000</a>
								</li>
								<li class="my-1">
									<a href="#">$10,000 - $20,000</a>
								</li>
								<li>
									<a href="#">$20,000 $30,000</a>
								</li>
								<li class="mt-1">
									<a href="#">Over $30,000</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- //price -->
				
			
				
					<!-- best seller -->
					<div class="f-grid py-2">
						<h3 class="agileits-sear-head mb-3">Best Seller</h3>
						<div class="box-scroll">
							<div class="scroll">
								<div class="row">
									<div class="col-lg-3 col-sm-2 col-3 left-mar">
										<img src="{{asset('user/images/k1.jpg')}}" alt="" class="img-fluid">
									</div>
									<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
										<a href="">Samsung Galaxy On7 Prime (Gold, 4GB RAM + 64GB Memory)</a>
										<a href="" class="price-mar mt-2">$12,990.00</a>
									</div>
								</div>
								<div class="row my-4">
									<div class="col-lg-3 col-sm-2 col-3 left-mar">
										<img src="{{asset('user/images/k2.jpg')}}" alt="" class="img-fluid">
									</div>
									<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
										<a href="">Haier 195 L 4 Star Direct-Cool Single Door Refrigerator</a>
										<a href="" class="price-mar mt-2">$12,499.00</a>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3 col-sm-2 col-3 left-mar">
										<img src="{{asset('user/images/k3.jpg')}}" alt="" class="img-fluid">
									</div>
									<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
										<a href="">Ambrane 13000 mAh Power Bank (P-1310 Premium)</a>
										<a href="" class="price-mar mt-2">$1,199.00 </a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- //best seller -->
							<!-- reviews -->
							<div class="customer-rev border-bottom left-side py-2">
								<h3 class="agileits-sear-head mb-3">Customer Review</h3>
								<ul>
									<li>
										<a href="#">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span>5.0</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span>4.0</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star-half"></i>
											<span>3.5</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<span>3.0</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star-half"></i>
											<span>2.5</span>
										</a>
									</li>
								</ul>
							</div>
							<!-- //reviews -->
				</div>
				<!-- //product right -->
			</div>
		</div>
	</div>
</div>
@endsection