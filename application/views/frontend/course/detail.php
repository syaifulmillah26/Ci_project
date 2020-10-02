 <!-- Start Page Title Area -->
 <div class="page-title-area item-courses jarallax" data-jarallax='{"speed": 0.3}'>

 </div>
 <!-- End Page Title Area -->

 <!-- Start Courses Details Area -->
 <section class="courses-details-area pt-100 pb-70">
     <div class="container">
         <div class="courses-details-header">
             <div class="row align-items-center">
                 <div class="col-lg-8">
                     <div class="courses-title">
                         <h2><?= $kursus['title'] ?></h2>
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                     </div>

                     <div class="courses-meta">
                         <ul>
                             <li>
                                 <i class='bx bx-folder-open'></i>
                                 <span>Category</span>
                                 <a href="#">Photography</a>
                             </li>
                             <li>
                                 <i class='bx bx-group'></i>
                                 <span>Students Enrolled</span>
                                 <a href="#">541,214</a>
                             </li>
                             <li>
                                 <i class='bx bx-calendar'></i>
                                 <span>Last Updated</span>
                                 <a href="#">01/14/2020</a>
                             </li>
                         </ul>
                     </div>
                 </div>

                 <div class="col-lg-4">
                     <div class="courses-price">
                         <div class="courses-review">
                             <div class="review-stars">
                                 <i class='bx bxs-star'></i>
                                 <i class='bx bxs-star'></i>
                                 <i class='bx bxs-star'></i>
                                 <i class='bx bxs-star'></i>
                                 <i class='bx bxs-star'></i>
                             </div>
                             <span class="reviews-total d-inline-block">(3 reviews)</span>
                         </div>

                         <div class="price"> $ <?= $kursus['harga'] ?></div>
                         <a href="#" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Buy Course</span><i class="bx bx-paper-plane icon-arrow after"></i></a>
                     </div>
                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-lg-8">

                 <div class="tab products-details-tab">
                     <div class="col-lg-12 col-md-12">
                         <ul class="tabs">

                             <li><a href="#">
                                     <div class="dot"></div> Description
                                 </a></li>

                             <li><a href="#">
                                     <div class="dot"></div> Curriculum
                                 </a></li>

                             <li><a href="#">
                                     <div class="dot"></div> Reviews
                                 </a></li>
                             <li><a href="#">
                                     <div class="dot"></div> Faqs
                                 </a></li>
                         </ul>
                     </div>

                     <div class="tab-content">
                         <div class="tabs-item">
                             <div class="courses-details-desc">
                                 <?= $kursus['deskripsi'] ?>
                             </div>
                         </div>
                         <div class="tabs-item">
                             <div class="courses-details-desc">
                                 <h3>Courses Video</h3>



                                 <div class="courses-accordion">
                                     <ul class="accordion">
                                         <?php foreach ($section_kursus as $section) : ?>
                                             <?php if ($section['kursus_id'] == $kursus['id']) : ?>
                                                 <li class="accordion-item">
                                                     <a class="accordion-title active" href="javascript:void(0)">
                                                         <i class='bx bx-chevron-down'></i>
                                                         <?= ucwords($section['title']) ?>
                                                     </a>

                                                     <div class="accordion-content show">
                                                         <ul class="courses-lessons">

                                                             <?php foreach ($konten_video as $konten) : ?>
                                                                 <?php if ($konten['section_id'] == $section['id']) : ?>

                                                                     <li class="single-lessons">
                                                                         <div class="d-md-flex d-lg-flex align-items-center">

                                                                             <?= ucwords($konten['nama_video']) ?>

                                                                             <span class="<?= $konten['role'] ?>"><?= $konten['role'] ?></span>
                                                                         </div>

                                                                         <div class="lessons-info">
                                                                             <span class="duration" data-toggle="tooltip" data-placement="top" title="Duration"><i class='bx bx-time'></i> <?= $konten['durasi'] ?> minutes</span>

                                                                             <a href="<?= $konten['link_video'] ?>" style="pointer-events: <?= $konten['visibility'] ?>;" class="attrachment-video popup-youtube" data-toggle="tooltip" data-placement="top" title="Play Video"><i class='bx bx-play-circle'></i> Video</a>
                                                                         </div>
                                                                     </li>
                                                                 <?php endif; ?>
                                                             <?php endforeach; ?>

                                                         </ul>
                                                     </div>
                                                 </li>
                                             <?php endif; ?>
                                         <?php endforeach; ?>



                                     </ul>
                                 </div>




                                 <h3>Meet Your Instructors</h3>

                                 <div class="courses-author">
                                     <div class="author-profile-header"></div>
                                     <div class="author-profile">
                                         <div class="author-profile-title">
                                             <img src="<?= base_url(); ?>assets/images/avatars/<?= trim($kursus['author_image']) ?>" class="shadow-sm rounded-circle" alt="image">

                                             <div class="author-profile-title-details d-flex justify-content-between">
                                                 <div class="author-profile-details">
                                                     <h4><?= ucwords($kursus['author']) ?></h4>
                                                     <span class="d-block">Photographer, Author, Teacher</span>
                                                 </div>

                                                 <div class="author-profile-raque-profile">
                                                     <a href="single-instructor.html" class="d-inline-block">View Profile on Raque</a>
                                                 </div>
                                             </div>
                                         </div>
                                         <p>James Anderson is a celebrated photographer, author, and teacher who brings passion to everything he does.</p>
                                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                     </div>
                                 </div>




                             </div>
                         </div>
                         <div class="tabs-item">
                             <!--  Tab Revieww -->
                             <div class="products-details-tab-content">
                                 <div class="product-review-form">
                                     <h3>Customer Reviews</h3>

                                     <div class="review-title">
                                         <div class="rating">
                                             <i class='bx bxs-star'></i>
                                             <i class='bx bxs-star'></i>
                                             <i class='bx bxs-star'></i>
                                             <i class='bx bxs-star'></i>
                                             <i class='bx bx-star'></i>
                                         </div>
                                         <p>Based on 3 reviews</p>

                                         <a href="javascript:void(0)" onclick="myFunction()" class="default-btn"><i class='bx bx-plus icon-arrow before'></i><span class="label">Write a Review</span><i class="bx bx-plus icon-arrow after"></i></a>
                                     </div>

                                     <div class="review-comments">
                                         <div class="review-item">
                                             <div class="rating">
                                                 <i class='bx bxs-star'></i>
                                                 <i class='bx bxs-star'></i>
                                                 <i class='bx bxs-star'></i>
                                                 <i class='bx bxs-star'></i>
                                                 <i class='bx bx-star'></i>
                                             </div>
                                             <h3>Good</h3>
                                             <span><strong>Admin</strong> on <strong>Sep 21, 2019</strong></span>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                         </div>

                                         <div class="review-item">
                                             <div class="rating">
                                                 <i class='bx bxs-star'></i>
                                                 <i class='bx bxs-star'></i>
                                                 <i class='bx bxs-star'></i>
                                                 <i class='bx bxs-star'></i>
                                                 <i class='bx bx-star'></i>
                                             </div>
                                             <h3>Good</h3>
                                             <span><strong>Admin</strong> on <strong>Sep 21, 2019</strong></span>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                         </div>

                                         <div class="review-item">
                                             <div class="rating">
                                                 <i class='bx bxs-star'></i>
                                                 <i class='bx bxs-star'></i>
                                                 <i class='bx bxs-star'></i>
                                                 <i class='bx bxs-star'></i>
                                                 <i class='bx bx-star'></i>
                                             </div>
                                             <h3>Good</h3>
                                             <span><strong>Admin</strong> on <strong>Sep 21, 2019</strong></span>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                         </div>
                                     </div>

                                     <div class="review-form" id="review">
                                         <h3>Write a Review</h3>

                                         <form>
                                             <div class="row">
                                                 <div class="col-lg-6 col-md-6">
                                                     <div class="form-group">
                                                         <input type="hidden" id="name" name="name" placeholder="Enter your name" class="form-control">
                                                     </div>
                                                 </div>

                                                 <div class="col-lg-6 col-md-6">
                                                     <div class="form-group">
                                                         <input type="hidden" id="email" name="email" placeholder="Enter your email" class="form-control">
                                                     </div>
                                                 </div>

                                                 <div class="col-lg-12 col-md-12">
                                                     <div class="form-group">
                                                         <input type="text" id="review-title" name="review-title" placeholder="Enter your review a title" class="form-control">
                                                     </div>
                                                 </div>

                                                 <div class="col-lg-12 col-md-12">
                                                     <div class="form-group">
                                                         <textarea name="review-body" id="review-body" cols="30" rows="6" placeholder="Write your comments here" class="form-control"></textarea>
                                                     </div>
                                                 </div>

                                                 <div class="col-lg-12 col-md-12">
                                                     <button type="submit" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Submit Review</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
                                                 </div>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                             <!--  End tab reviews -->
                         </div>

                         <div class="tabs-item">
                             <div class="faq-accordion">
                                 <ul class="accordion">
                                     <li class="accordion-item">
                                         <a class="accordion-title active" href="javascript:void(0)">
                                             <i class='bx bx-chevron-down'></i>
                                             What’s the difference between a college and a university?
                                         </a>

                                         <div class="accordion-content show">
                                             <p>Colleges offer only undergraduate degrees while universities offer graduate degrees as well, but the terms are often used interchangeably.</p>
                                         </div>
                                     </li>

                                     <li class="accordion-item">
                                         <a class="accordion-title" href="javascript:void(0)">
                                             <i class='bx bx-chevron-down'></i>
                                             What are the different types of undergraduate degrees?
                                         </a>

                                         <div class="accordion-content">
                                             <p>Associate: a two-year program that either leads to a specific vocation or transitions to a bachelor program. Bachelor: a four or five-year program where students earn credits in a wide variety of courses.</p>
                                         </div>
                                     </li>

                                     <li class="accordion-item">
                                         <a class="accordion-title" href="javascript:void(0)">
                                             <i class='bx bx-chevron-down'></i>
                                             What are the different types of graduate degrees?
                                         </a>

                                         <div class="accordion-content">
                                             <p>Masters: two-year degree providing additional specialization. Doctorate: five to eight-year program certifying the student as a trained research scholar and/or professor.</p>
                                         </div>
                                     </li>

                                     <li class="accordion-item">
                                         <a class="accordion-title" href="javascript:void(0)">
                                             <i class='bx bx-chevron-down'></i>
                                             Can you work while studying in the United States?
                                         </a>

                                         <div class="accordion-content">
                                             <p>With permission of the International Student Office, international students may work on campus up to 20 hours/week their first year and can apply to work off-campus in subsequent years.</p>
                                         </div>
                                     </li>

                                     <li class="accordion-item">
                                         <a class="accordion-title" href="javascript:void(0)">
                                             <i class='bx bx-chevron-down'></i>
                                             What is distance education?
                                         </a>

                                         <div class="accordion-content">
                                             <p>Distance education occurs when a student and an instructor are in different places. Learning occurs by mail, telephone, internet, or by other means.</p>
                                         </div>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-4">
                 <div class="courses-sidebar-information">
                     <ul>
                         <li>
                             <span><i class='bx bx-group'></i> Lectures:</span>
                             40
                         </li>
                         <li>
                             <span><i class='bx bx-video-recording'></i> Video:</span>
                             200
                         </li>
                         <li>
                             <span><i class='bx bx-time'></i> Duration:</span>
                             200 Hours
                         </li>
                         <li>
                             <span><i class='bx bxs-graduation'></i> Subject:</span>
                             Photography
                         </li>
                         <li>
                             <span><i class='bx bx-atom'></i> Quizzes:</span>
                             Yes
                         </li>
                         <li>
                             <span><i class='bx bxs-badge-check'></i> Level:</span>
                             Introductory
                         </li>
                         <li>
                             <span><i class='bx bx-support'></i> Language:</span>
                             English
                         </li>
                         <li>
                             <span><i class='bx bx-text'></i> Video Subtitle:</span>
                             English
                         </li>
                         <li>
                             <span><i class='bx bx-certification'></i> Certificate:</span>
                             Yes
                         </li>
                     </ul>
                 </div>

                 <div class="courses-purchase-info">
                     <h4>Interested in this course for your Business or Team?</h4>
                     <p>Train your employees in the most in-demand topics, with edX for Business.</p>

                     <a href="#" class="d-inline-block">Purchase now</a>
                     <a href="#" class="d-inline-block">Request Information</a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- End Courses Details Area -->

 <!-- Start FAQ Area -->
 <section class="faq-area ptb-100">
     <div class="container">



     </div>
 </section>
 <!-- End FAQ Area -->