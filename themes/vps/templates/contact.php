<?php
/*
	Template Name: Contact
*/
?>
<?php get_header(); ?>
<style>
    .icon-support {
        width: 80px;
        margin-bottom: 15px;
    }

    .btn-support {
        background: #f7931e;
        padding: 5px 10px;
        border-radius: 50px;
        color: white !important;
        text-decoration: none !important;
        text-transform: none !important;
        transition: .4s ease;
        min-width: 170px;
    }

    .btn-support:hover {
        background: #d17813;
        transition: .4s ease;
        min-width: 180px;
    }

    .contact-col {
        box-shadow: 0 0 10px 2px #0000003d;
    }

    textarea,
    input {
        width: 100%;
    }

    @media (max-width: 768px) {
        .row-contact {
            transform: translate(0, -30px);
        }
    }
</style>
<?php require_once get_template_directory() . '/page-title.php'; ?>

<div class="bg-list-item">
    <div class="container">
        <div class="row text-center row-contact">
            <div class="col-md-6 mbt-30">
                <div class="radius-10 bg-white contact-col p-15">
                    <div class="center-all">
                        <img class="icon-support" src="/wp-content/uploads/2022/10/1.png" alt="">
                    </div>
                    <h5>
                        <strong>
                            Liên hệ kinh doanh
                        </strong>
                    </h5>
                    <div>
                        Chỉ cần gọi Hotline bên dưới để được tư vấn và hướng dẫn.
                    </div>
                    <div class="center-all">
                        <a class="btn-support" href="tel: <?php echo preg_replace('/\D/', '', get_option('pzf_phone')); ?>"> <?php echo preg_replace('/\D/', '', get_option('pzf_phone')); ?> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mbt-30">
                <div class="radius-10 bg-white contact-col p-15">
                    <div class="center-all">
                        <img class="icon-support" src="/wp-content/uploads/2022/10/2.png" alt="">
                    </div>
                    <h5>
                        <strong>
                            Hỗ trợ kỹ thuật

                        </strong>
                    </h5>
                    <div>
                        Đôi khi bạn sẽ cần hỗ trợ, đừng lo lắng chúng tôi sẽ giúp bạn.
                    </div>
                    <div class="center-all">
                        <a class="btn-support" href="tel: <?php echo preg_replace('/\D/', '', get_option('pzf_phone')); ?>"> Contact support </a>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="text-center">
            Gửi yêu cầu
        </h2>
        <div class="row pbt-30">
            <div class="col-md-12">
                <div class="radius-10 bg-white contact-col p-15">
                    <br>
                    <br>
                    <?php echo do_shortcode('[contact-form-7 id="15" title="Contact"]'); ?>
                    <br>
                    <br>
                </div>
            </div>

        </div>
    </div>
</div>


<?php get_footer(); ?>