@extends('layouts.app')

@section('content')

@include('includes.header-profile')

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
					<div class="h6 title">My Photo Gallery</div>

					<div class="block-btn align-right">
						<a href="#" data-toggle="modal" data-target="#create-photo-album" class="btn btn-primary btn-md-2">Create Album  +</a>

						<a href="#" data-toggle="modal" data-target="#update-local-photo" class="btn btn-md-2 btn-border-think custom-color c-grey">Add Photos</a>
					</div>

					<ul class="nav nav-tabs photo-gallery" role="tablist">
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#photo-page" role="tab" title="Photos">
								<svg class="olymp-photos-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#album-page" role="tab" title="Albums">
								<svg class="olymp-albums-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-albums-icon"></use></svg>
							</a>
						</li>

					</ul>
					<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane" id="photo-page" role="tabpanel">

					<div class="photo-album-wrapper">
						
						<div class="photo-item half-width">
							<img src="img/photo-item1.jpg" alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
								<span>15</span>
							</a>
							<a href="#" data-toggle="modal" data-target="#open-photo-popup-v1" class="  full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">Header Photos</a>
								<time class="published" datetime="2017-03-24T18:18">1 week ago</time>
							</div>
						</div>

						@foreach($photos as $photo)
						<div class="photo-item col-4-width">
							<img src="{{$photo->url}}" alt="photo">
							<div class="overlay overlay-dark"></div>
							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
							</a>
							<a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="full-block"></a>
							<div class="content">
								<a href="#" class="h6 title">{{$photo->title}}</a>
								<time class="published" datetime="2017-03-24T18:18">{{date('Y-m-d', strtotime($photo->created_at))}}</time>
							</div>
						</div>				
						@endforeach

						<a href="#" class="btn btn-control btn-more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

					</div>

				</div>

				<div class="tab-pane active" id="album-page" role="tabpanel">

					<div class="photo-album-wrapper">

						<div class="photo-album-item-wrap col-4-width" >
							
							<div class="photo-album-item create-album" data-mh="album-item" style="min-height: 150px;">
							
								<a href="#" data-toggle="modal" data-target="#create-photo-album" class="  full-block"></a>
							
								<div class="content">
							
									<a href="#" class="btn btn-control bg-primary" data-toggle="modal" data-target="#create-photo-album">
										<svg class="olymp-plus-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-plus-icon"></use></svg>
									</a>
							
									<a href="#" class="title h5" data-toggle="modal" data-target="#create-photo-album">Create an Album</a>
									<span class="sub-title">It only takes a few minutes!</span>
							
								</div>
							
							</div>
						</div>
						
						@foreach($photos as $photo)
						<div class="photo-album-item-wrap col-4-width">
							
							<div class="photo-album-item" data-mh="album-item">
								<div class="photo-item">
									<img src="{{$photo->url}}" alt="photo">
									<div class="overlay overlay-dark"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="post-add-icon">
										<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
									</a>
									<a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="full-block"></a>
								</div>
							
								<div class="content">
									<a href="#" class="title h5">{{$photo->title}}</a>
								<span class="sub-title">{{date('Y-m-d', strtotime($photo->created_at))}}</span>
							
									<div class="swiper-container">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<ul class="friends-harmonic">
													<li>
														<a href="#">
															<img src="img/friend-harmonic5.jpg" alt="friend">
														</a>
													</li>
												</ul>
											</div>
							
											<!--<div class="swiper-slide">
												<div class="friend-count" data-swiper-parallax="-500">
													<a href="#" class="friend-count-item">
														<div class="h6">24</div>
														<div class="title">Photos</div>
													</a>
													<a href="#" class="friend-count-item">
														<div class="h6">86</div>
														<div class="title">Comments</div>
													</a>
													<a href="#" class="friend-count-item">
														<div class="h6">16</div>
														<div class="title">Share</div>
													</a>
												</div>
											</div>-->
										</div>
							
										<!-- If we need pagination -->
										<div class="swiper-pagination"></div>
									</div>
								</div>
							
							</div>
						</div>
						@endforeach

					</div>

				</div>
			</div>

		</div>
	</div>
</div>


<!-- Window-popup Open Photo Popup V1 -->

<div class="modal fade modal-has-swiper" id="open-photo-popup-v1" tabindex="-1" role="dialog" aria-labelledby="open-photo-popup-v1" aria-hidden="true">
	<div class="modal-dialog window-popup open-photo-popup open-photo-popup-v1" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-body">
				<div class="open-photo-thumb">
					<div class="swiper-container" data-slide="fade">
						<div class="swiper-wrapper">

							<div class="swiper-slide">
								<div class="photo-item">
									<img src="img/open-photo1.jpg" alt="photo">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item">
									<img src="img/open-photo1.jpg" alt="photo">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item">
									<img src="img/open-photo1.jpg" alt="photo">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

						</div>

						<!--Prev Next Arrows-->

						<svg class="btn-next-without olymp-popup-right-arrow"><use xlink:href="svg-icons/sprites/icons.svg#olymp-popup-right-arrow"></use></svg>

						<svg class="btn-prev-without olymp-popup-left-arrow"><use xlink:href="svg-icons/sprites/icons.svg#olymp-popup-left-arrow"></use></svg>
					</div>
				</div>

				<div class="open-photo-content">

					<article class="hentry post">

						<div class="post__author author vcard inline-items">
							<img src="{{ profilePhoto(Auth::user()) }}" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="/">{{ Auth::user()->first_name.' '.Auth::user()->last_name }}</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										2 hours ago
									</time>
								</div>
							</div>

							<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<ul class="more-dropdown">
									<li>
										<a href="#">Edit Post</a>
									</li>
									<li>
										<a href="#">Delete Post</a>
									</li>
									<li>
										<a href="#">Turn Off Notifications</a>
									</li>
									<li>
										<a href="#">Select as Featured</a>
									</li>
								</ul>
							</div>

						</div>

						<p>Here’s a photo from last month’s photoshoot. We really had a great time and got a batch of incredible shots for the new catalog.</p>

						<p>With: <a href="#">Jessy Owen</a>, <a href="#">Marina Valentine</a></p>

						<div class="post-additional-info inline-items">

							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
								<span>148</span>
							</a>

							<ul class="friends-harmonic">
								<li>
									<a href="#">
										<img src="img/friend-harmonic7.jpg" alt="friend">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/friend-harmonic8.jpg" alt="friend">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/friend-harmonic9.jpg" alt="friend">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/friend-harmonic10.jpg" alt="friend">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/friend-harmonic11.jpg" alt="friend">
									</a>
								</li>
							</ul>

							<div class="names-people-likes">
								<a href="#">Diana</a>, <a href="#">Nicholas</a> and
								<br>13 more liked this
							</div>


							<div class="comments-shared">
								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-speech-balloon-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
									<span>61</span>
								</a>

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-share-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
									<span>32</span>
								</a>
							</div>


						</div>

						<div class="control-block-button post-control-button">

							<a href="#" class="btn btn-control">
								<svg class="olymp-like-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-like-post-icon"></use></svg>
							</a>

							<a href="#" class="btn btn-control">
								<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
							</a>

							<a href="#" class="btn btn-control">
								<svg class="olymp-share-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
							</a>

						</div>

					</article>

					<div class="mCustomScrollbar" data-mcs-theme="dark">

						<ul class="comments-list">
							<li class="comment-item">
								<div class="post__author author vcard inline-items">
									<img src="img/avatar48-sm.jpg" alt="author">

									<div class="author-date">
										<a class="h6 post__author-name fn" href="#">Marina Valentine</a>
										<div class="post__date">
											<time class="published" datetime="2017-03-24T18:18">
												46 mins ago
											</time>
										</div>
									</div>

									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

								</div>

								<p>I had a great time too!! We should do it again!</p>

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
									<span>8</span>
								</a>
								<a href="#" class="reply">Reply</a>
							</li>

							<li class="comment-item">
								<div class="post__author author vcard inline-items">
									<img src="img/avatar4-sm.jpg" alt="author">

									<div class="author-date">
										<a class="h6 post__author-name fn" href="#">Chris Greyson</a>
										<div class="post__date">
											<time class="published" datetime="2017-03-24T18:18">
												1 hour ago
											</time>
										</div>
									</div>

									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

								</div>

								<p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>

								<a href="#" class="post-add-icon inline-items">
									<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
									<span>7</span>
								</a>
								<a href="#" class="reply">Reply</a>

							</li>
						</ul>

					</div>

					<form class="comment-form inline-items">

						<div class="post__author author vcard inline-items">
							<img src="{{ profilePhoto(Auth::user()) }}" alt="author">

							<div class="form-group with-icon-right ">
								<textarea class="form-control" placeholder="Press Enter to post..."></textarea>
								<div class="add-options-message">
									<a href="#" class="options-message">
										<svg class="olymp-camera-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
									</a>
								</div>
							</div>
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Window-popup Open Photo Popup V1 -->

<!-- Window-popup Open Photo Popup V2 -->

<div class="modal fade modal-has-swiper" id="open-photo-popup-v2" tabindex="-1" role="dialog" aria-labelledby="open-photo-popup-v2" aria-hidden="true">
	<div class="modal-dialog window-popup open-photo-popup open-photo-popup-v2" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-body">
				<div class="open-photo-thumb">

					<div class="swiper-container" data-effect="fade" data-autoplay="4000">

						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->

							<div class="swiper-slide">
								<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img src="img/open-photo2.jpg" alt="photo">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img src="img/open-photo2.jpg" alt="photo">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img src="img/open-photo2.jpg" alt="photo">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img src="img/open-photo2.jpg" alt="photo">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img src="img/open-photo2.jpg" alt="photo">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img src="img/open-photo2.jpg" alt="photo">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img src="img/open-photo2.jpg" alt="photo">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img src="img/open-photo2.jpg" alt="photo">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="photo-item" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
									<img src="img/open-photo2.jpg" alt="photo">
									<div class="overlay"></div>
									<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
									<a href="#" class="tag-friends" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
										<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</a>

									<div class="content">
										<a href="#" class="h6 title">Photoshoot 2016</a>
										<time class="published" datetime="2017-03-24T18:18">2 weeks ago</time>
									</div>
								</div>
							</div>


						</div>

					</div>

					<!--Pagination tabs-->

					<div class="slider-slides">
						<a href="#" class="slides-item ">
							<img src="img/photo-tabs1.jpg" alt="slide">
							<div class="overlay overlay-dark"></div>
						</a>

						<a href="#" class="slides-item ">
							<img src="img/photo-tabs2.jpg" alt="slide">
							<div class="overlay overlay-dark"></div>
						</a>

						<a href="#" class="slides-item ">
							<img src="img/photo-tabs3.jpg" alt="slide">
							<div class="overlay overlay-dark"></div>
						</a>

						<a href="#" class="slides-item ">
							<img src="img/photo-tabs4.jpg" alt="slide">
							<div class="overlay overlay-dark"></div>
						</a>
						<a href="#" class="slides-item ">
							<img src="img/photo-tabs5.jpg" alt="slide">
							<div class="overlay overlay-dark"></div>
						</a>

						<a href="#" class="slides-item ">
							<img src="img/photo-tabs6.jpg" alt="slide">
							<div class="overlay overlay-dark"></div>
						</a>

						<a href="#" class="slides-item ">
							<img src="img/photo-tabs7.jpg" alt="slide">
							<div class="overlay overlay-dark"></div>
						</a>

						<a href="#" class="slides-item ">
							<img src="img/photo-tabs8.jpg" alt="slide">
							<div class="overlay overlay-dark"></div>
						</a>

						<a href="#" class="slides-item ">
							<img src="img/photo-tabs9.jpg" alt="slide">
							<div class="overlay overlay-dark"></div>
						</a>

						<!--Prev Next Arrows-->

						<svg class="btn-next olymp-popup-right-arrow"><use xlink:href="svg-icons/sprites/icons.svg#olymp-popup-right-arrow"></use></svg>

						<svg class="btn-prev olymp-popup-left-arrow"><use xlink:href="svg-icons/sprites/icons.svg#olymp-popup-left-arrow"></use></svg>

					</div>

				</div>

				<div class="open-photo-content">

			<article class="hentry post">

				<div class="post__author author vcard inline-items">
					<img src="{{ profilePhoto(Auth::user()) }}" alt="author">

					<div class="author-date">
						<a class="h6 post__author-name fn" href="/">{{ Auth::user()->first_name.' '.Auth::user()->last_name }}</a>
						<div class="post__date">
							<time class="published" datetime="2017-03-24T18:18">
								2 hours ago
							</time>
						</div>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
						<ul class="more-dropdown">
							<li>
								<a href="#">Edit Post</a>
							</li>
							<li>
								<a href="#">Delete Post</a>
							</li>
							<li>
								<a href="#">Turn Off Notifications</a>
							</li>
							<li>
								<a href="#">Select as Featured</a>
							</li>
						</ul>
					</div>

				</div>

				<p>Here’s a photo from last month’s photoshoot. We really had a great time and got a batch of incredible shots for the new catalog.</p>

				<p>With: <a href="#">Jessy Owen</a>, <a href="#">Marina Valentine</a></p>

				<div class="post-additional-info inline-items">

					<a href="#" class="post-add-icon inline-items">
						<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
						<span>148</span>
					</a>


					<div class="comments-shared">
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-speech-balloon-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
							<span>61</span>
						</a>

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-share-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
							<span>32</span>
						</a>
					</div>


				</div>

				<div class="control-block-button post-control-button">

					<a href="#" class="btn btn-control">
						<svg class="olymp-like-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-like-post-icon"></use></svg>
					</a>

					<a href="#" class="btn btn-control">
						<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
					</a>

					<a href="#" class="btn btn-control">
						<svg class="olymp-share-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
					</a>

				</div>

			</article>

			<div class="mCustomScrollbar" data-mcs-theme="dark">

				<ul class="comments-list">
					<li class="comment-item">
						<div class="post__author author vcard inline-items">
							<img src="img/avatar48-sm.jpg" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="#">Marina Valentine</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										46 mins ago
									</time>
								</div>
							</div>

							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

						</div>

						<p>I had a great time too!! We should do it again!</p>

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
							<span>8</span>
						</a>
						<a href="#" class="reply">Reply</a>
					</li>

					<li class="comment-item">
						<div class="post__author author vcard inline-items">
							<img src="img/avatar4-sm.jpg" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="#">Chris Greyson</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										1 hour ago
									</time>
								</div>
							</div>

							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

						</div>

						<p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
							<span>7</span>
						</a>
						<a href="#" class="reply">Reply</a>

					</li>
				</ul>

			</div>

			<form class="comment-form inline-items">

				<div class="post__author author vcard inline-items">
					<img src="img/avatar73-sm.jpg" alt="author">
					<div class="form-group with-icon-right ">
						<textarea class="form-control" placeholder="Press Enter to post..." ></textarea>
						<div class="add-options-message">
							<a href="#" class="options-message">
								<svg class="olymp-camera-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
							</a>
						</div>
					</div>
				</div>

			</form>

		</div>
			</div>
		</div>
	</div>
</div>

<!-- Window-popup Open Photo Popup V2 -->
<!-- Window-popup Create Photo Album -->

<div class="modal fade" id="create-photo-album" tabindex="-1" role="dialog" aria-labelledby="create-photo-album" aria-hidden="true">
	<div class="modal-dialog window-popup create-photo-album" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Create Photo Album</h6>
			</div>

			<div class="modal-body">

			<form class="form-group label-floating">
				<label class="control-label">Album Name</label>
				<input class="form-control" placeholder="" type="text" value="Rock Garden Festival - Day 4">
			</form>

			<div class="photo-album-wrapper">
				<div class="photo-album-item-wrap col-3-width" >
					<div class="photo-album-item create-album" data-mh="album-item">
						<div class="content">
							<a href="#" class="btn btn-control bg-primary">
								<svg class="olymp-plus-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-plus-icon"></use></svg>
							</a>

							<a href="#" class="title h5">Add More Photos...</a>
						</div>
					</div>
				</div>

				<div class="photo-album-item-wrap col-3-width" >
					<div class="photo-album-item" data-mh="album-item">
						<div class="form-group">
							<img src="img/photo-album6.jpg" alt="photo">
							<textarea class="form-control" placeholder="Write something about this photo..."></textarea>
						</div>

						<form class="form-group label-floating is-select">
							<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>

							<select class="selectpicker form-control style-2 show-tick" multiple data-max-options="2" data-live-search="true">
								<option title="Green Goo Rock" data-content='<div class="inline-items">
										<div class="author-thumb">
											<img src="img/avatar52-sm.jpg" alt="author">
										</div>
											<div class="h6 author-title">Green Goo Rock</div>

										</div>'>Green Goo Rock
								</option>

								<option title="Mathilda Brinker" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar74-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Mathilda Brinker</div>
										</div>'>Mathilda Brinker
								</option>

								<option title="Marina Valentine" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar48-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Marina Valentine</div>
										</div>'>Marina Valentine
								</option>

								<option title="Dave Marinara" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar75-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Dave Marinara</div>
										</div>'>Dave Marinara
								</option>

								<option title="Rachel Howlett" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar76-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Rachel Howlett</div>
										</div>'>Rachel Howlett
								</option>

							</select>
						</form>
					</div>
				</div>

				<div class="photo-album-item-wrap col-3-width" >
					<div class="photo-album-item" data-mh="album-item">
						<div class="form-group">
							<img src="img/photo-album7.jpg" alt="photo">
							<textarea class="form-control" placeholder="Write something about this photo..."></textarea>
						</div>
						<form class="form-group label-floating is-select">
							<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>

							<select class="selectpicker form-control style-2 show-tick" multiple data-max-options="2" data-live-search="true">
								<option title="Green Goo Rock" data-content='<div class="inline-items">
										<div class="author-thumb">
											<img src="img/avatar52-sm.jpg" alt="author">
										</div>
											<div class="h6 author-title">Green Goo Rock</div>

										</div>'>Green Goo Rock
								</option>

								<option title="Mathilda Brinker" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar74-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Mathilda Brinker</div>
										</div>'>Mathilda Brinker
								</option>

								<option title="Marina Valentine" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar48-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Marina Valentine</div>
										</div>'>Marina Valentine
								</option>

								<option title="Dave Marinara" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar75-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Dave Marinara</div>
										</div>'>Dave Marinara
								</option>

								<option title="Rachel Howlett" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar76-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Rachel Howlett</div>
										</div>'>Rachel Howlett
								</option>

							</select>
						</form>
					</div>
				</div>

				<div class="photo-album-item-wrap col-3-width" >
					<div class="photo-album-item" data-mh="album-item">
						<div class="form-group">
							<img src="img/photo-album8.jpg" alt="photo">
							<textarea class="form-control" placeholder="Write something about this photo..."></textarea>
						</div>

						<form class="form-group label-floating is-select">
							<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>

							<select class="selectpicker form-control style-2 show-tick" multiple data-max-options="2" data-live-search="true">
								<option title="Green Goo Rock" data-content='<div class="inline-items">
										<div class="author-thumb">
											<img src="img/avatar52-sm.jpg" alt="author">
										</div>
											<div class="h6 author-title">Green Goo Rock</div>

										</div>'>Green Goo Rock
								</option>

								<option title="Mathilda Brinker" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar74-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Mathilda Brinker</div>
										</div>'>Mathilda Brinker
								</option>

								<option title="Marina Valentine" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar48-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Marina Valentine</div>
										</div>'>Marina Valentine
								</option>

								<option title="Dave Marinara" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar75-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Dave Marinara</div>
										</div>'>Dave Marinara
								</option>

								<option title="Rachel Howlett" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar76-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Rachel Howlett</div>
										</div>'>Rachel Howlett
								</option>

							</select>
						</form>
					</div>
				</div>

				<div class="photo-album-item-wrap col-3-width" >
					<div class="photo-album-item" data-mh="album-item">
						<div class="form-group">
							<img src="img/photo-album9.jpg" alt="photo">
							<textarea class="form-control" placeholder="Write something about this photo..."></textarea>
						</div>

						<form class="form-group label-floating is-select">
							<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>

							<select class="selectpicker form-control style-2 show-tick" multiple data-max-options="2" data-live-search="true">
								<option title="Green Goo Rock" data-content='<div class="inline-items">
										<div class="author-thumb">
											<img src="img/avatar52-sm.jpg" alt="author">
										</div>
											<div class="h6 author-title">Green Goo Rock</div>
										</div>'>Green Goo Rock
								</option>

								<option title="Mathilda Brinker" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar74-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Mathilda Brinker</div>
										</div>'>Mathilda Brinker
								</option>

								<option title="Marina Valentine" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar48-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Marina Valentine</div>
										</div>'>Marina Valentine
								</option>

								<option title="Dave Marinara" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar75-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Dave Marinara</div>
										</div>'>Dave Marinara
								</option>

								<option title="Rachel Howlett" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar76-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Rachel Howlett</div>
										</div>'>Rachel Howlett
								</option>

							</select>
						</form>
					</div>
				</div>

				<div class="photo-album-item-wrap col-3-width" >
					<div class="photo-album-item" data-mh="album-item">
						<div class="form-group">
							<img src="img/photo-album10.jpg" alt="photo">
							<textarea class="form-control" placeholder="Write something about this photo..."></textarea>
						</div>

						<form class="form-group label-floating is-select">
							<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>

							<select class="selectpicker form-control style-2 show-tick" multiple data-max-options="2" data-live-search="true">
								<option title="Green Goo Rock" data-content='<div class="inline-items">
										<div class="author-thumb">
											<img src="img/avatar52-sm.jpg" alt="author">
										</div>
											<div class="h6 author-title">Green Goo Rock</div>

										</div>'>Green Goo Rock
								</option>

								<option title="Mathilda Brinker" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar74-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Mathilda Brinker</div>
										</div>'>Mathilda Brinker
								</option>

								<option title="Marina Valentine" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar48-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Marina Valentine</div>
										</div>'>Marina Valentine
								</option>

								<option title="Dave Marinara" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar75-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Dave Marinara</div>
										</div>'>Dave Marinara
								</option>

								<option title="Rachel Howlett" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar76-sm.jpg" alt="author">
											</div>
											<div class="h6 author-title">Rachel Howlett</div>
										</div>'>Rachel Howlett
								</option>

							</select>
						</form>

					</div>
				</div>
			</div>

			<a href="#" class="btn btn-secondary btn-lg btn--half-width">Discard Everything</a>
			<a href="#" class="btn btn-primary btn-lg btn--half-width">Post Album</a>

		</div>
		</div>
	</div>
</div>

<!-- ... end Window-popup Create Photo Album -->
<!-- Window-popup Update Header Photo -->

{{-- <div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
	<div class="modal-dialog window-popup update-header-photo" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Update Header Photo</h6>
			</div>

			<div class="modal-body">
				<a href="#" class="upload-photo-item">
				<svg class="olymp-computer-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>

				<h6>Upload Photo</h6>
				<span>Browse your computer.</span>
			</a>

				<a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

			<svg class="olymp-photos-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>

			<h6>Choose from My Photos</h6>
			<span>Choose from your uploaded photos</span>
		</a>
			</div>
		</div>
	</div>
</div> --}}


<!-- ... end Window-popup Update Header Photo -->

<!-- Window-popup Choose from my Photo -->

{{-- <div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo" aria-hidden="true">
	<div class="modal-dialog window-popup choose-from-my-photo" role="document">

		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-header">
				<h6 class="title">Choose from My Photos</h6>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
							<svg class="olymp-photos-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
							<svg class="olymp-albums-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-albums-icon"></use></svg>
						</a>
					</li>
				</ul>
			</div>

			<div class="modal-body">
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">

						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="img/choose-photo1.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="img/choose-photo2.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="img/choose-photo3.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>

						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="img/choose-photo4.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="img/choose-photo5.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="img/choose-photo6.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>

						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="img/choose-photo7.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="img/choose-photo8.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="img/choose-photo9.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>


						<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
						<a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

					</div>
					<div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="img/choose-photo10.jpg" alt="photo">
								<figcaption>
									<a href="#">South America Vacations</a>
									<span>Last Added: 2 hours ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="img/choose-photo11.jpg" alt="photo">
								<figcaption>
									<a href="#">Photoshoot Summer 2016</a>
									<span>Last Added: 5 weeks ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="img/choose-photo12.jpg" alt="photo">
								<figcaption>
									<a href="#">Amazing Street Food</a>
									<span>Last Added: 6 mins ago</span>
								</figcaption>
							</figure>
						</div>

						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="img/choose-photo13.jpg" alt="photo">
								<figcaption>
									<a href="#">Graffity & Street Art</a>
									<span>Last Added: 16 hours ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="img/choose-photo14.jpg" alt="photo">
								<figcaption>
									<a href="#">Amazing Landscapes</a>
									<span>Last Added: 13 mins ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="img/choose-photo15.jpg" alt="photo">
								<figcaption>
									<a href="#">The Majestic Canyon</a>
									<span>Last Added: 57 mins ago</span>
								</figcaption>
							</figure>
						</div>


						<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
						<a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</div> --}}

<!-- Window-popup Upload Photo -->

<div class="modal fade" id="update-local-photo" tabindex="-1" role="dialog" aria-labelledby="update-local-photo" aria-hidden="true">
	<div class="modal-dialog window-popup update-local-photo create-photo-album" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Update Photo</h6>
			</div>

			<div class="modal-body">
				<div class="upload-photo-item">
					<h6>Photo Title</h6>
					<span>Please describe your photo.</span>
					<input class="form-control" id="id-photo-title" type="text" placeholder="">
				</div>

				<div class="upload-photo-item">
					<div class="photo-button-container file-upload">
						<label for="upload" class="file-upload__label">Select Photo</label>
						<input id="upload" class="file-upload__input file-photo-upload" type="file" accept="image/*" name="file-upload">
					</div>
					<div class="photo-preview-container d-none">
						<img id="blah" src="" />
						<button class="btn btn-primary btn-sm" id="blash-upload">
							<span class="spinner-grow spinner-grow-sm d-none" role="status" aria-hidden="true"></span>
							Upload
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@push('styles')
	<link href="{{ asset('css/import/import.css') }}" rel="stylesheet">
@endpush

@push('scriptsAfter')
	<script src="{{ asset('js/pages/photo/action.js') }}"></script>
@endpush