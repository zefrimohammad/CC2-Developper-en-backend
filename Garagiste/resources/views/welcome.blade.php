@extends('layout')
@section('title', 'Home Page')
@section('content')
    <style>
        .card {
            height: 100%;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 1.25rem;
        }
    </style>

    <div class="container">
        <h4>Who are we?</h4>
    </div>

    <div class="container mt-5 mb-5">
        <div>

            <div>
                <div class="card bg-light shadow p-3">
                    <div class="card-body">
                    Welcome to our car service platform! We provide professional care for all your car needs. Whether it’s regular maintenance or specialized repairs, you can count on us to keep your car in top condition.                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h4 id="services-section">Our Services</h4>
    </div>



    <div class="container mt-5 mb-5">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card bg-light shadow p-3">
                    <div class="card-body">
                        <h6 class="card-title">Repair and maintenance</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light shadow p-3">
                    <div class="card-body">
                        <h6 class="card-title">Customer service</h6>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <div class="container">
        <h4 id="contact-section">Contact Us</h4>
    </div>


    <div class="container mt-5 mb-5">
        <div>

            <div>
                <div class="card bg-light shadow p-3">
                    <div class="card-body">
                        <div class="mb-1">
                            <i class="bi bi-telephone"></i> Phone: +212600000000
                        </div>
                        <div>
                            <i class="bi bi-envelope"></i> Email: garagiste@garagiste.support
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endSection
