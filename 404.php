<?php
get_header();
?>
<div class="page-banner-wrap bg-cover" >
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="page-heading text-white">
                    <h1>error 404</h1>
                </div>
                <div class="breadcrumb-wrap">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo bloginfo('url') ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">404</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="error-404-wrapper section-padding pb-3">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="error-content">
                    <h1>404</h1>
                    <h2>Oops! this page is not found.</h2>
                    <p>Sorry but the page you're looking for may broken or not created</p>
                    <a href="<?php echo bloginfo('url') ?>" class="theme-btn">Go Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
