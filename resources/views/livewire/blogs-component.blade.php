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
                                    <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
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
                                <div class="row">
                                    {{-- <div class="col-lg-4 col-md-6 col-sm-12 mb-6 ec-blog-block">
                                        <div class="ec-blog-inner">
                                            <div class="ec-blog-image">
                                                <a href="blog-detail-left-sidebar.html">
                                                    <img class="blog-image" src="{{ asset('assets/images/blog-image/1.jpg') }}"
                                                        alt="Blog" />
                                                </a>
                                            </div>
                                            <div class="ec-blog-content">
                                                <h5 class="ec-blog-title"><a href="blog-detail-left-sidebar.html">The best fashion influencers.</a></h5>

                                                <div class="ec-blog-date">By <span>Mr Admin</span> / February 10, 2021-2022</div>
                                                <div class="ec-blog-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>

                                                <div class="ec-blog-btn"><a href="#" class="btn btn-primary">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    @foreach ($blogs as $blog)
                                    <div class="col-lg-4 col-md-6 mb-6 ec-blog-block">
                                        <div class="ec-blog-inner">
                                            <div class="ec-blog-image">
                                                <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}">
                                                    <img class="blog-image" src="{{ asset('assets/images/blogs') }}/{{ $blog->image }}"
                                                        alt="{{ $blog->name }}" />
                                                </a>
                                            </div>
                                            <div class="ec-blog-content">
                                                <h5 class="ec-blog-title"><a href="{{ route('blog.details', ['slug' => $blog->slug]) }}">{{ $blog->name }}</a></h5>
                                                <div class="ec-blog-date">By <span>Mr Admin</span> / {{date('d F, Y', strtotime(   $blog->created_at )) }}</div>
                                                <div class="ec-blog-desc">{!! str_limit(strip_tags($blog->description),50,'...')  !!}</div>
                                                <div class="ec-blog-btn"><a href="{{ route('blog.details', ['slug' => $blog->slug]) }}" class="btn btn-primary">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <!-- Ec Pagination Start -->
                            <div class="ec-pro-pagination">
                                <span>Showing 1-12 of 21 item(s)</span>
                                <ul class="ec-pro-pagination-inner">
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a class="next" href="#">Next <i class="ecicon eci-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <!-- Ec Pagination End -->
                        </div>
                        <!--Blog content End -->
                    </div>
                </div>
            </div>
        </section>
</div>
