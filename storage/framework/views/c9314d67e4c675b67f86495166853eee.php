

<?php $__env->startSection('page'); ?>
<main>
    <!-- Breadcrumb Area -->
    <div class="breadcrumb-area breadcrumb-bg d-flex align-items-center" data-background="img/bg/portfolio.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap pt-100 text-center">
                        <h2>Portfolio</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Portfolio #1 -->
    <section id="portfolio" class="section portfolio portfolio-grid portfolio-2 pb-70 pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading text-center mb-70 portfolio-filter">
                        <h1 class="heading_portfolio">Professional Experience</h1>
                        <ul class="list-inline">
                            <li><a class="active-filter" href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".fotografi">Fotografi</a></li>
                            <li><a href="#" data-filter=".desaingrafis">Desain Grafis</a></li>
                            <li><a href="#" data-filter=".videografi">Videografi</a></li>
                        </ul>
                    </div>
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->

            <div id="portfolio-all" class="row">
                <!-- Portfolio Item #1 -->
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($post->category === 'videografi'): ?>
                        <?php if($post->image): ?>
                            <div class="col-sm-12 col-sm-4 col-md-4 portfolio-item <?php echo e($post->category); ?>">
                                <div class="portfolio--img">
                                    <a href="<?php echo e($post->video); ?>" target="_blank">
                                        <button class="card__btn card__btn-play">
                                            <svg fill="none" height="22" viewBox="0 0 18 22" width="18"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="m0 0v22l18-11z" fill="#000"></path>
                                            </svg>
                                        </button>
                                        <img src="<?php echo e(asset('storage/' . $post->image)); ?>" alt="Video Thumbnail"
                                            class="thumbnail" />
                                    </a>
                                    <!-- .portfolio-hover end -->
                                </div>
                                <!-- .portfolio-img end -->
                            </div>
                        <?php else: ?>
                            <div class="col-sm-12 col-sm-4 col-md-3 portfolio-item <?php echo e($post->category); ?>">
                                <div class="portfolio--img">
                                    <iframe src="<?php echo e($post->video); ?>" frameborder="0" ></iframe>
                                    <!-- .portfolio-hover end -->
                                </div>
                                <!-- .portfolio-img end -->
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <div class="col-sm-12 col-sm-4 col-md-4 portfolio-item <?php echo e($post->category); ?>">
                            <div class="portfolio--img">
                                <img src="<?php echo e(asset('storage/' . $post->image)); ?>" width="100px"
                                    alt="portfolio image" />
                                <div class="portfolio--hover">
                                    <div class="portfolio--meta">
                                        <div class="portfolio--zoom">
                                            <a class="img-gallery-item" width="100px"
                                                href="<?php echo e(asset('storage/' . $post->image)); ?>"></a>
                                        </div>
                                        <h6><a href="#"><?php echo e($post->title); ?></a></h6>
                                    </div>
                                </div>
                                <!-- .portfolio-hover end -->
                            </div>
                            <!-- .portfolio-img end -->
                        </div>
                    <?php endif; ?>
                    <!-- .portfolio-item end -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #portfolio1 end -->
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onedream_website\resources\views/portfolio.blade.php ENDPATH**/ ?>