<?php
include 'header.php';

?>
<!-- start inner banner -->
    <section class="inner-banner">
        <h1 class="font-weight-bold text-center">Our News</h1>
    </section>
    <!-- end inner-banner -->
    <!-- start blog -->
    <section class="blog-block">
        <div class="container">
            <div class="sec-title text-center mb-3" data-aos="fade-up" data-aos-duration="1000">
                <span class="title">NEWS</span>
                <h2>We keep you always updated with</h2>
                <div class="divider">
                    <span class="fa fa-mortar-board"></span>
                </div>
            </div>
            <div class="row">
				<?php
				$conn=mysqli_connect("localhost","root","","php6pm");
				$q="select * from news";
				$res=mysqli_query($conn,$q);
				echo mysqli_num_rows($res);
				while($news=mysqli_fetch_array($res))
				{
					//echo $news;
				?>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="post" data-aos="fade-up" data-aos-duration="1000">
                        <img class="img-fluid" src="assets/images/blog_2.jpg" alt="Blog">
                        <div class="post_inner p-3">
                            <p class="mb-1 font-weight-bold"><?php echo $news['date']; ?> </p>
                            <h5 class="font-weight-bold"><?php echo $news['title']; ?></h5>
                            <p><?php echo $news['description']; ?></p>
                            <div class="comment d-flex">
                                <span class="mr-3"><i class="fa fa-user mr-3 color-orange"></i><?php echo $news['reporter']; ?></span>
                                <span class="mr-3"><i class="fa fa-comments mr-3 color-orange"></i><?php echo $news['city']; ?></span>
                            </div>
                            <a class="btn color-orange read-more mt-3" href="blog-detail.html">Read More</a>
                        </div>
                    </div>
                </div>
				<?php
				}
				?>
                
            </div>
        </div>
    </section>
    <!-- end blog -->

<?php
include 'footer.php';

?>