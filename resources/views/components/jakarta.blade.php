<style>
    html, body {
        margin: 0;
        padding: 0;
    }

    .bawang-wrapper {
        position: fixed;
        top: 0;
        right: 20px;
        z-index: 100;
    }

    .bawang-wrapper img {
        max-width: 350px;
        height: auto;
        display: block;
        transition: transform 0.5s ease-in-out;
        position: relative;
    }

    .bawang-wrapper .hover-img {
        position: absolute;
        top: 0;
        left: 0;
        transform: translateY(-100%) rotate(180deg);
        transition: transform 0.6s ease-in-out;
        max-width: 100%;
        height: auto;
        pointer-events: none;
    }

    .bawang-wrapper:hover img.main {
        transform: scale(0);
        margin-top: 50px
    }

    .bawang-wrapper img.main {
        margin-top: 50px
    }

    .bawang-wrapper:hover .hover-img {
        transform: translateY(0) rotate(180deg);
    }

    @media print {
        .no-print {
            display: none !important;
        }
    }
</style>

<div class="bawang-wrapper no-print">
    <img src="{{ asset('images/bawang.png') }}" alt="Bawang" class="main">
    <img src="{{ asset('images/bawang-hover.png') }}" alt="Bawang Hover" class="hover-img">
</div>
