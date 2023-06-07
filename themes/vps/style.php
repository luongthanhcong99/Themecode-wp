<style>
    :root {
        --root: #ff7426;
        --text: #696969;
    }

    .dp-none,
    .only-pc,
    .only-mb {
        display: none
    }

    a {
        color: #000;
        text-decoration: none !important;
        transition: .3s ease;
    }


    img {
        max-width: 100%;
    }

    @media(min-width:1440px) {
        .container {
            max-width: 1280px;
        }
    }

    @media(min-width:1600px) {
        .container {
            max-width: 1440px;
        }
    }


    @media(min-width:1024px) {
        .only-pc {
            display: block;
        }
    }

    @media(max-width:768px) {
        .only-mb {
            display: block;
        }
    }

    .j-right {
        justify-content: right;
    }

    body {
        font-family: 'Roboto', serif;
        font-weight: 400;
        color: var(--text);
        font-size: 16px;
    }

    h1,
    h2,
    h2,
    h4,
    h5,
    h6 {
        font-family: 'Space Grotesk';
        font-weight: 600;
        color: #000;
    }

    .f-grotesk {
        font-family: 'Space Grotesk';
        font-weight: 600;
        color: #000;
    }

    a:hover {
        color: var(--root)
    }


    header {
        box-shadow: 0 0 4px #00000054;
    }

    .logo-header {
        max-height: 60px;
    }

    .j-right {
        justify-content: right;
    }

    .j-sp {
        justify-content: space-between;
    }

    #menu-header a {
        height: 60px;
        padding: 0 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 500;
    }

    ul#menu-header {
        list-style: none;
        margin: 0;
        padding: 0;
        width: 100%;
        display: flex;
        justify-content: center;
    }

    @media(max-width:768px) {
        #list-menu {
            position: fixed;
            width: 100%;
            height: 100%;
            background: #fff;
            top: 0;
            left: 0;
            z-index: 99;
            display: block;
            transform: translateX(-100%);
            transition: .3s ease;
        }


        #list-menu.open {
            transform: translate(0);
        }

        #list-menu a {
            color: #000;
            width: 100%;
            padding: 0;
            height: 50px !important;
        }

        .close-menu {
            position: fixed;
            top: 0;
            z-index: 999;
            color: #000;
            font-size: 35px;
            right: 15px;
        }

    }
</style>