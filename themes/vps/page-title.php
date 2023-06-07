<style>
    #page-title h1 {
        font-size: 50px;
        text-transform: uppercase;
        font-weight: 700;
    }

    #page-title {
        background-color: #664710;
    }

    #page-title {
        height: 275px;
        display: flex;
        align-items: center;
        justify-content: center;
    }



    nav.breadcumb {
        padding: 10px;
        border-bottom: 1px solid #dfdfdf;
        font-size: 14px;
        color: #525252;
    }

    @media(max-width: 768px) {
        #page-title h1 {
            font-size: 25px;
        }

        #page-title {
            height: 180px;
        }

    }
</style>
<div id="page-title" class="text-center">
    <div class="text-white">
        <h1>
            <?php the_title(); ?>
        </h1>

    </div>
</div>
<div class="container">
    <nav class="breadcumb">
        <a href="/">Home</a> / <span><?php the_title(); ?></span>
    </nav>
</div>