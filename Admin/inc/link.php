<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- ✅ Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- ✅ Font Awesome (for icons) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Source Sans Pro', sans-serif;
        background-color: #f5f5f5;
    }

    html {
        scroll-behavior: smooth;
    }

    /* for the nav active  */

    .nav-item.active>.nav-link {
        background-color: #343a40;
        color: #fff;
    }

    .nav-item.active .icon,
    .nav-item.active .menu {
        color: #fff !important;
    }



    .bg-accent {
        background-color: #ff5722;
        color: #f1f1f1;
    }

    .bg-accent:hover {
        background-color: #219ebc;
        color: #f1f1f1;
    }

    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #ff5722;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #219ebc;
    }

    .wrapper {
        width: 100%;
        min-height: 100vh;
        display: flex;
        position: relative;
    }

    .content {
        width: 100%;
    }

    .sidebar {
        width: 250px;
        background-color: #263238;
        white-space: nowrap;
        overflow-x: hidden;
        transition: width 0.3s ease;
    }

    .admin_brand {
        padding: 16px;
        color: #f1f1f1;
        border-bottom: 1px solid #455a64;
    }

    .nav-item .nav-link {
        color: #b0bec5;
        padding: 10px 18px;
        border-radius: 0 !important;
    }

    .nav-item:hover .nav-link {
        color: #ff5722;
    }

    .nav-item.active .nav-link {
        background-color: #ff5722;
        color: #f1f1f1;
        border-left: 8px solid #219ebc;
    }

    .custom-card {
        overflow: hidden;
    }

    .custom-card h1 {
        font-size: 3rem;
    }

    .custom-card:hover i {
        transform: rotate(-10deg) scale(1.8);
        transition: all 0.2s ease-in-out;
    }

    @media (min-width: 768px) {
        .wrapper.show_pc .sidebar {
            width: 55px;
            overflow: hidden;
        }

        .wrapper.show_pc .sidebar .nav-item.active .nav-link {
            border-left: 0;
        }
    }

    @media (max-width: 768px) {
        .wrapper #overlay {
            display: none;
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .wrapper .sidebar {
            width: 0;
            position: absolute;
            min-height: 100%;
            overflow: hidden;
        }

        .wrapper.show .sidebar {
            width: 250px;
        }

        .wrapper.show #overlay {
            display: block;
        }
    }
</style>


<!-- another css  -->

<style>
    @import"https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,400&display=swap";

    html {
        scroll-behavior: smooth
    }

    body {
        font-family: "Source Sans Pro", sans-serif
    }

    .bg-accent {
        background-color: #ff5722;
        color: #f1f1f1
    }

    .bg-accent:hover {
        background-color: #219ebc;
        color: #f1f1f1
    }

    ::-webkit-scrollbar {
        width: 8px
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1
    }

    ::-webkit-scrollbar-thumb {
        background-color: #ff5722
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #219ebc
    }

    .wrapper {
        width: 100%;
        height: 100%;
        position: relative;
        display: flex;
        min-height: 100vh
    }

    .wrapper .content {
        width: 100%
    }

    .wrapper .sidebar {
        width: 250px;
        transition: width .3s ease;
        white-space: nowrap;
        overflow-x: hidden;
        background-color: #263238;
        z-index: 1052
    }

    .wrapper .sidebar #close_sidebar i {
        color: #f1f1f1
    }

    .wrapper .sidebar #close_sidebar i:hover {
        color: #ff5722
    }

    .wrapper .sidebar .admin_brand {
        padding: 16px;
        color: #f1f1f1;
        border-bottom: 1px solid #455a64
    }

    .wrapper .sidebar .admin_brand>div:hover {
        color: #ff5722
    }

    .wrapper .sidebar .icon {
        padding-right: 10px
    }

    .wrapper .sidebar .nav-item .nav-link {
        border-radius: 0 !important;
        color: #b0bec5;
        padding: 10px 18px
    }

    .wrapper .sidebar .nav-item:hover .nav-link {
        color: #ff5722
    }

    .wrapper .sidebar .nav-item.active .nav-link {
        background-color: #ff5722;
        color: #f1f1f1;
        border-left: 8px solid #219ebc
    }

    .custom-card {
        overflow: hidden
    }

    .custom-card h1 {
        font-size: 3rem
    }

    .custom-card h1 i {
        transition: all .2s ease-in-out
    }

    .custom-card:hover i {
        transform: rotate3d(0, 0, 1, -10deg) scale(1.8)
    }

    canvas {
        width: 100% !important
    }

    [data-bs-toggle=collapse]:after {
        display: inline-block;
        position: absolute;
        right: 15px;
        color: #b0bec5;
        top: 17px;
        font: normal normal normal 14px/1 FontAwesome;
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        content: "";
        transition: all linear .25s
    }

    [data-bs-toggle=collapse].collapsed:after {
        transform: rotate(-90deg)
    }

    @media(min-width: 768px) {
        .wrapper.show_pc .sidebar {
            width: 55px;
            overflow: hidden
        }

        .wrapper.show_pc .sidebar .nav-item.active .nav-link {
            border-left: 0
        }

        .wrapper.show_pc .sidebar [data-bs-toggle=collapse]:after {
            display: none
        }

        .wrapper.show_pc .icon {
            padding: 0
        }

        .wrapper.show_pc .menu {
            display: none;
            overflow: hidden
        }

        .wrapper .content {
            flex: 1
        }
    }

    @media(max-width: 768px) {
        .wrapper #overlay {
            display: none;
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, .5);
            z-index: 1
        }

        .wrapper .sidebar {
            width: 0;
            position: absolute;
            min-height: 100%;
            overflow: hidden
        }

        .wrapper.show {
            display: block
        }

        .wrapper.show .sidebar {
            width: 250px
        }

        .wrapper.show #overlay {
            display: block
        }
    }
</style>