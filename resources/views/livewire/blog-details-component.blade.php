<div>
        <!-- Ec breadcrumb start -->
        <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row ec_breadcrumb_inner">
                            <div class="col-md-6 col-sm-12">
                                <h2 class="ec-breadcrumb-title">Blog Page</h2>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <!-- ec-breadcrumb-list start -->
                                <ul class="ec-breadcrumb-list">
                                    <li class="ec-breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="ec-breadcrumb-item active">Blog Page</li>
                                </ul>
                                <!-- ec-breadcrumb-list end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec breadcrumb end -->

        <!-- Ec Blog page -->
        <section class="ec-page-content section-space-p">
            <div class="container">
                <div class="row">
                    <div class="ec-blogs-rightside col-lg-12 col-md-12">

                        <!-- Blog content Start -->
                        <div class="ec-blogs-content">
                            <div class="ec-blogs-inner">
                                <div class="ec-blog-main-img">
                                    <img class="blog-image" src="{{ asset('assets/images/blogs') }}/{{ $blog->image }}" alt="Blog" />
                                </div>
                                <div class="ec-blog-date">
                                    <p class="date">{{date('d F, Y', strtotime(   $blog->created_at )) }} - </p><a href="javascript:void(0)">5 Comments</a>
                                </div>
                                <div class="ec-blog-detail">
                                    <h3 class="ec-blog-title">{{ $blog->name }}</h3>
                                    <p>{{ $blog->description }}</p>

                                    <div class="ec-blog-sub-imgs">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img class="blog-image" src="{{ asset('assets/images/blog-image/2.jpg') }}" alt="Blog" />
                                            </div>
                                            <div class="col-md-6">
                                                <img class="blog-image" src="{{ asset('assets/images/blog-image/3.jpg') }}" alt="Blog" />
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p> --}}
                                </div>
                                <div class="ec-blog-tags">
                                    <a href="#">lifestyle ,</a>
                                    <a href="#">Outdoor ,</a>
                                    <a href="#">interior ,</a>
                                    <a href="#">sports ,</a>
                                    <a href="#">bloging ,</a>
                                    <a href="#">inspiration</a>
                                </div>
                                <div class="ec-blog-arrows">
                                    <a href="#"><i class="ecicon eci-angle-left"></i> Prev
                                        Post</a>
                                    <a href="#">Next Post <i
                                            class="ecicon eci-angle-right"></i></a>
                                </div>
                                <div class="ec-blog-comments">
                                    <div class="ec-blog-cmt-preview">
                                        <div class="ec-blog-comment-wrapper mt-55">
                                            <h4 class="ec-blog-dec-title">Comments : 05</h4>
                                            <div class="ec-single-comment-wrapper mt-35">
                                                <div class="ec-blog-user-img">
                                                    <img src="{{ asset('assets/images/blog-image/9.jpg') }}" alt="blog image">
                                                </div>
                                                <div class="ec-blog-comment-content">
                                                    <h5>John Deo</h5>
                                                    <span>October 14, 2018 </span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, </p>
                                                    <div class="ec-blog-details-btn">
                                                        <a href="#">read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-single-comment-wrapper mt-50 ml-150">
                                                <div class="ec-blog-user-img">
                                                    <img src="{{ asset('assets/images/blog-image/10.jpg') }}" alt="blog image">
                                                </div>
                                                <div class="ec-blog-comment-content">
                                                    <h5>Jenifer lowes</h5>
                                                    <span>October 14, 2018 </span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, </p>
                                                    <div class="ec-blog-details-btn">
                                                        <a href="#">read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-blog-cmt-form">
                                        <div class="ec-blog-reply-wrapper mt-50">
                                            <h4 class="ec-blog-dec-title">Leave A Reply</h4>
                                            <form class="ec-blog-form" action="#">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="ec-leave-form">
                                                            <input type="text" placeholder="Full Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="ec-leave-form">
                                                            <input type="email" placeholder="Email Address ">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="ec-text-leave">
                                                            <textarea placeholder="Message"></textarea>
                                                            <a href="#" class="btn btn-lg btn-secondary">Order Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Blog content End -->
                    </div>
                </div>
            </div>
        </section>
</div>
