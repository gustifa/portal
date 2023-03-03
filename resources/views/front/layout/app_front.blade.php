<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <meta name="description" content="" />
        <title>Job Hunt</title>

        <link rel="icon" type="image/png" href="{{asset('front/uploads/favicon.png')}}" />

        <!-- All CSS -->
        @include('front.layout.style_header')

        @include('front.layout.js_header')

        
    </head>
    <body>
        
        @include('front.layout.nav_top')

        @include('front.layout.nav')

        @include('front.layout.slider')
        
        @include('front.layout.category')

        <div
            class="why-choose"
            style="background-image: url(uploads/banner3.jpg)"
        >
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>Why Choose Us</h2>
                            <p>
                                Our Methods to help you build your career in
                                future
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="inner">
                            <div class="icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div class="text">
                                <h2>Quick Apply</h2>
                                <p>
                                    You can just create your account in our
                                    website and apply for desired job very
                                    quickly.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="inner">
                            <div class="icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="text">
                                <h2>Search Tool</h2>
                                <p>
                                    We provide a perfect and advanced search
                                    tool for job seekers, employers or
                                    companies.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="inner">
                            <div class="icon">
                                <i class="fas fa-share-alt"></i>
                            </div>
                            <div class="text">
                                <h2>Best Companies</h2>
                                <p>
                                    The best and reputed worldwide companies
                                    registered here and so you will get the
                                    quality jobs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="job">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>Featured Jobs</h2>
                            <p>Find the awesome jobs that matches your skill</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="item d-flex justify-content-start">
                            <div class="logo">
                                <img src="uploads/logo1.png" alt="" />
                            </div>
                            <div class="text">
                                <h3>
                                    <a href="job.html"
                                        >Software Engineer, Google</a
                                    >
                                </h3>
                                <div
                                    class="detail-1 d-flex justify-content-start"
                                >
                                    <div class="category">Web Development</div>
                                    <div class="location">United States</div>
                                </div>
                                <div
                                    class="detail-2 d-flex justify-content-start"
                                >
                                    <div class="date">3 days ago</div>
                                    <div class="budget">$300-$600</div>
                                    <div class="expired">Expired</div>
                                </div>
                                <div
                                    class="special d-flex justify-content-start"
                                >
                                    <div class="featured">Featured</div>
                                    <div class="type">Full Time</div>
                                    <div class="urgent">Urgent</div>
                                </div>
                                <div class="bookmark">
                                    <a href=""
                                        ><i class="fas fa-bookmark active"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="item d-flex justify-content-start">
                            <div class="logo">
                                <img src="uploads/logo2.png" alt="" />
                            </div>
                            <div class="text">
                                <h3>
                                    <a href="job.html">Web Designer, Amplify</a>
                                </h3>
                                <div
                                    class="detail-1 d-flex justify-content-start"
                                >
                                    <div class="category">Web Development</div>
                                    <div class="location">United States</div>
                                </div>
                                <div
                                    class="detail-2 d-flex justify-content-start"
                                >
                                    <div class="date">1 day ago</div>
                                    <div class="budget">$1000</div>
                                </div>
                                <div
                                    class="special d-flex justify-content-start"
                                >
                                    <div class="featured">Featured</div>
                                    <div class="type">Part Time</div>
                                </div>
                                <div class="bookmark">
                                    <a href=""
                                        ><i class="fas fa-bookmark"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="item d-flex justify-content-start">
                            <div class="logo">
                                <img src="uploads/logo3.png" alt="" />
                            </div>
                            <div class="text">
                                <h3>
                                    <a href="job.html"
                                        >Laravel Developer, Gimpo</a
                                    >
                                </h3>
                                <div
                                    class="detail-1 d-flex justify-content-start"
                                >
                                    <div class="category">Web Development</div>
                                    <div class="location">Canada</div>
                                </div>
                                <div
                                    class="detail-2 d-flex justify-content-start"
                                >
                                    <div class="date">2 days ago</div>
                                    <div class="budget">$1000-$3000</div>
                                </div>
                                <div
                                    class="special d-flex justify-content-start"
                                >
                                    <div class="featured">Featured</div>
                                    <div class="type">Full Time</div>
                                    <div class="urgent">Urgent</div>
                                </div>
                                <div class="bookmark">
                                    <a href=""
                                        ><i class="fas fa-bookmark"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="item d-flex justify-content-start">
                            <div class="logo">
                                <img src="uploads/logo4.png" alt="" />
                            </div>
                            <div class="text">
                                <h3>
                                    <a href="job.html"
                                        >PHP Developer, Kite Solution</a
                                    >
                                </h3>
                                <div
                                    class="detail-1 d-flex justify-content-start"
                                >
                                    <div class="category">Web Development</div>
                                    <div class="location">Australia</div>
                                </div>
                                <div
                                    class="detail-2 d-flex justify-content-start"
                                >
                                    <div class="date">7 hours ago</div>
                                    <div class="budget">$1800</div>
                                </div>
                                <div
                                    class="special d-flex justify-content-start"
                                >
                                    <div class="featured">Featured</div>
                                    <div class="type">Full Time</div>
                                    <div class="urgent">Urgent</div>
                                </div>
                                <div class="bookmark">
                                    <a href=""
                                        ><i class="fas fa-bookmark"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="item d-flex justify-content-start">
                            <div class="logo">
                                <img src="uploads/logo5.png" alt="" />
                            </div>
                            <div class="text">
                                <h3>
                                    <a href="job.html"
                                        >Junior Accountant, ABC Media</a
                                    >
                                </h3>
                                <div
                                    class="detail-1 d-flex justify-content-start"
                                >
                                    <div class="category">Marketing</div>
                                    <div class="location">Canada</div>
                                </div>
                                <div
                                    class="detail-2 d-flex justify-content-start"
                                >
                                    <div class="date">2 hours ago</div>
                                    <div class="budget">$400</div>
                                </div>
                                <div
                                    class="special d-flex justify-content-start"
                                >
                                    <div class="featured">Featured</div>
                                    <div class="type">Part Time</div>
                                    <div class="urgent">Urgent</div>
                                </div>
                                <div class="bookmark">
                                    <a href=""
                                        ><i class="fas fa-bookmark"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="item d-flex justify-content-start">
                            <div class="logo">
                                <img src="uploads/logo6.png" alt="" />
                            </div>
                            <div class="text">
                                <h3>
                                    <a href="job.html"
                                        >Sales Manager, Tingshu Limited</a
                                    >
                                </h3>
                                <div
                                    class="detail-1 d-flex justify-content-start"
                                >
                                    <div class="category">Marketing</div>
                                    <div class="location">Canada</div>
                                </div>
                                <div
                                    class="detail-2 d-flex justify-content-start"
                                >
                                    <div class="date">9 hours ago</div>
                                    <div class="budget">$600-$800</div>
                                </div>
                                <div
                                    class="special d-flex justify-content-start"
                                >
                                    <div class="featured">Featured</div>
                                    <div class="type">Full Time</div>
                                    <div class="urgent">Urgent</div>
                                </div>
                                <div class="bookmark">
                                    <a href=""
                                        ><i class="fas fa-bookmark"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="all">
                            <a href="jobs.html" class="btn btn-primary"
                                >See All Jobs</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="testimonial"
            style="background-image: url(uploads/banner11.jpg)"
        >
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="main-header">Our Happy Clients</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-carousel owl-carousel">
                            <div class="item">
                                <div class="photo">
                                    <img src="uploads/t1.jpg" alt="" />
                                </div>
                                <div class="text">
                                    <h4>Robert Krol</h4>
                                    <p>CEO, ABC Company</p>
                                </div>
                                <div class="description">
                                    <p>
                                        Lorem ipsum dolor sit amet, an labores
                                        explicari qui, eu nostrum copiosae
                                        argumentum has. Latine propriae quo no,
                                        unum ridens. Lorem ipsum dolor sit amet,
                                        an labores explicari qui, eu nostrum
                                        copiosae argumentum has. Latine propriae
                                        quo no, unum ridens.
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="photo">
                                    <img src="uploads/t2.jpg" alt="" />
                                </div>
                                <div class="text">
                                    <h4>Sal Harvey</h4>
                                    <p>Director, DEF Company</p>
                                </div>
                                <div class="description">
                                    <p>
                                        Lorem ipsum dolor sit amet, an labores
                                        explicari qui, eu nostrum copiosae
                                        argumentum has. Latine propriae quo no,
                                        unum ridens. Lorem ipsum dolor sit amet,
                                        an labores explicari qui, eu nostrum
                                        copiosae argumentum has. Latine propriae
                                        quo no, unum ridens.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>Latest News</h2>
                            <p>
                                Check our latest news from the following section
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="photo">
                                <img src="uploads/banner1.jpg" alt="" />
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="post.html"
                                        >This is a sample blog post title</a
                                    >
                                </h2>
                                <div class="short-des">
                                    <p>
                                        Lorem ipsum dolor sit amet, nibh saperet
                                        te pri, at nam diceret disputationi. Quo
                                        an consul impedit, usu possim evertitur
                                        dissentiet ei.
                                    </p>
                                </div>
                                <div class="button">
                                    <a href="post.html" class="btn btn-primary"
                                        >Read More</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="photo">
                                <img src="uploads/banner2.jpg" alt="" />
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="post.html"
                                        >This is a sample blog post title</a
                                    >
                                </h2>
                                <div class="short-des">
                                    <p>
                                        Nec in rebum primis causae. Affert
                                        iisque ex pri, vis utinam vivendo
                                        definitionem ad, nostrum omnes que per
                                        et. Omnium antiopam.
                                    </p>
                                </div>
                                <div class="button">
                                    <a href="post.html" class="btn btn-primary"
                                        >Read More</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="photo">
                                <img src="uploads/banner3.jpg" alt="" />
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="post.html"
                                        >This is a sample blog post title</a
                                    >
                                </h2>
                                <div class="short-des">
                                    <p>
                                        Id pri placerat voluptatum, vero dicunt
                                        dissentiunt eum et, adhuc iisque vis no.
                                        Eu suavitate conten tiones definitionem
                                        mel, ex vide.
                                    </p>
                                </div>
                                <div class="button">
                                    <a href="post.html" class="btn btn-primary"
                                        >Read More</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <h2 class="heading">For Candidates</h2>
                            <ul class="useful-links">
                                <li><a href="">Browser Jobs</a></li>
                                <li><a href="">Browse Candidates</a></li>
                                <li><a href="">Candidate Dashboard</a></li>
                                <li><a href="">Saved Jobs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <h2 class="heading">For Companies</h2>
                            <ul class="useful-links">
                                <li><a href="">Post Job</a></li>
                                <li><a href="">Browse Jobs</a></li>
                                <li><a href="">Company Dashboard</a></li>
                                <li><a href="">Applications</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <h2 class="heading">Contact</h2>
                            <div class="list-item">
                                <div class="left">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="right">
                                    34 Antiger Lane, USA, 12937
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="left">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="right">contact@arefindev.com</div>
                            </div>
                            <div class="list-item">
                                <div class="left">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="right">122-222-1212</div>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href=""
                                        ><i class="fab fa-facebook-f"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=""
                                        ><i class="fab fa-twitter"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=""
                                        ><i class="fab fa-pinterest-p"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=""
                                        ><i class="fab fa-linkedin-in"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=""
                                        ><i class="fab fa-instagram"></i
                                    ></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item">
                            <h2 class="heading">Newsletter</h2>
                            <p>
                                To get the latest news from our website, please
                                subscribe us here:
                            </p>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input
                                        type="text"
                                        name=""
                                        class="form-control"
                                    />
                                </div>
                                <div class="form-group">
                                    <input
                                        type="submit"
                                        class="btn btn-primary"
                                        value="Subscribe Now"
                                    />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright">
                            Copyright 2022, ArefinDev. All Rights Reserved.
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="right">
                            <ul>
                                <li><a href="terms.html">Terms of Use</a></li>
                                <li>
                                    <a href="privacy.html">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-top">
            <i class="fas fa-angle-up"></i>
        </div>

       @include('front.layout.js_footer')
    </body>
</html>
