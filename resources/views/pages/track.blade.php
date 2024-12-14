@extends('layouts.cart-layout')

@section('content')
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/"><img src="{{ asset('coffee-master/img/logo.png') }}" alt=""
                    title="" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="">{{ Auth::user()->name }}</a>
                        <ul>
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row mt-5" id="order-tracking">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="order in orders" :key="order.id">
                                    <td>@{{ order.product.name }}</td>
                                    <td>@{{ order.product.description }}</td>
                                    <td>@{{ order.quantity }}</td>
                                    <td>$@{{ order.product.price }}</td>
                                    <td>@{{ order.status }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        new Vue({
            el: '#order-tracking',
            data: {
                orders: [],
                isLoggedIn: false
            },
            mounted() {
                axios.get('/track-order-data')
                    .then(response => {
                        this.orders = response.data.orders;
                    })
                    .catch(error => {
                        console.error('Error fetching orders', error);
                    });
            },
        });
    </script>
@endpush

@push('css')
    <style>
        .navbar {
            background-color: transparent !important;
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            color: #ffffff
        }
    </style>
@endpush
