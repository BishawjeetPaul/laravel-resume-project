<x-layout>
    <x-slot name="title">Portfolio-Page</x-slot>
    <x-slot name="content">
        <section class="container py-5">

            <h1 class="text-warning border-bottom border-warning pb-2 mb-4">
                My Portfolio
            </h1>

            <p class="text-light mb-5">
                A collection of web applications and software solutions built using
                Laravel, Django, JavaScript, Bootstrap and MySQL.
            </p>

            <!-- Filter Buttons -->

            <div class="text-center mb-5">

                <button class="btn btn-warning filter-btn active"
                    data-filter="all">
                    All
                </button>

                <button class="btn btn-outline-warning filter-btn"
                    data-filter="laravel">
                    Laravel
                </button>

                <button class="btn btn-outline-warning filter-btn"
                    data-filter="django">
                    Django
                </button>

                <button class="btn btn-outline-warning filter-btn"
                    data-filter="api">
                    REST API
                </button>

            </div>

            <div class="row g-4">

                <!-- Project -->

                <div class="col-lg-4 col-md-6 portfolio-item laravel">

                    <div class="portfolio-card">

                        <img src="images/project1.jpg"
                            class="img-fluid">

                        <div class="portfolio-overlay">

                            <h4>E-Commerce</h4>

                            <p>
                                Laravel • Bootstrap • MySQL
                            </p>

                            <div>

                                <span class="badge bg-warning text-dark">
                                    Laravel
                                </span>

                                <span class="badge bg-info">
                                    Bootstrap
                                </span>

                                <span class="badge bg-success">
                                    MySQL
                                </span>

                            </div>

                            <div class="mt-4">

                                <a href="#"
                                    class="btn btn-warning btn-sm">

                                    Live Demo

                                </a>

                                <a href="#"
                                    class="btn btn-outline-light btn-sm">

                                    GitHub

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Repeat More Projects -->

            </div>

        </section>
    </x-slot>
</x-layout>