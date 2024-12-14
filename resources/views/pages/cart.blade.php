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
                        {{-- <a class="nav-link disabled" href="#">Disabled</a> --}}
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

        <div class="row mt-5" id="cart">
            <div class="col-xl-8">


                <div class="card border shadow-none" v-for="coffee in cartItems.items" :key="coffee.id">
                    <div class="card-body">
                        <div v-if="cartItems.items.length === 0">
                            <p>Loading...</p>
                        </div>
                        <div v-else>
                            <div class="d-flex align-items-start border-bottom pb-3">
                                <div class="me-4">
                                    <img :src="'https://www.bootdey.com/image/380x380/008B8B/000000'" alt="Product Image"
                                        class="avatar-lg rounded">
                                </div>
                                <div class="flex-grow-1 align-self-center overflow-hidden">
                                    <div>
                                        <h5 class="text-truncate font-size-18"><a href="#"
                                                class="text-dark">@{{ coffee.product.name }}</a></h5>
                                        <p class="text-muted mb-0">
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star-half text-warning"></i>
                                        </p>
                                        {{-- <p class="mb-0 mt-1">Color : <span class="fw-medium">Gray</span></p> --}}
                                        <p class="mb-0 mt-1">@{{ coffee.product.description }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 ms-2">
                                    <ul class="list-inline mb-0 font-size-16">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted px-1">
                                                <i class="mdi mdi-trash-can-outline"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted px-1">
                                                <i class="mdi mdi-heart-outline"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mt-3">
                                            <p class="text-muted mb-2">Price</p>
                                            <h5 class="mb-0 mt-2"><span class="text-muted me-2"><del
                                                        class="font-size-16 fw-normal">₱280</del></span>₱@{{ coffee.price }}
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="mt-3">
                                            <p class="text-muted mb-2">Quantity</p>
                                            <div class="d-inline-flex">
                                                <select class="form-select form-select-sm w-xl">
                                                    {{-- <option value="1">1</option>
                                                    <option value="2">2</option> --}}
                                                    <option value="3" selected>@{{ coffee.quantity }}</option>
                                                    {{-- <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option> --}}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mt-3">
                                            <p class="text-muted mb-2">Total</p>
                                            <h5>₱@{{ coffee.price }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="card border shadow-none">
                    <div class="card-body">
                        <div class="d-flex align-items-start border-bottom pb-3">
                            <div class="me-4">
                                <img src="https://www.bootdey.com/image/380x380/FF00FF/000000" alt
                                    class="avatar-lg rounded">
                            </div>
                            <div class="flex-grow-1 align-self-center overflow-hidden">
                                <div>
                                    <h5 class="text-truncate font-size-18"><a href="#" class="text-dark">
                                            wadsasd</a></h5>
                                    <p class="text-muted mb-0">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                    </p>
                                    <p class="mb-0 mt-1">Color : <span class="fw-medium">Green</span></p>
                                </div>
                            </div>
                            <div class="flex-shrink-0 ms-2">
                                <ul class="list-inline mb-0 font-size-16">
                                    <li class="list-inline-item">
                                        <a href="#" class="text-muted px-1">
                                            <i class="mdi mdi-trash-can-outline"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="text-muted px-1">
                                            <i class="mdi mdi-heart-outline"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mt-3">
                                        <p class="text-muted mb-2">Price</p>
                                        <h5 class="mb-0 mt-2"><span class="text-muted me-2"><del
                                                    class="font-size-16 fw-normal">$280</del></span>$240</h5>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="mt-3">
                                        <p class="text-muted mb-2">Quantity</p>
                                        <div class="d-inline-flex">
                                            <select class="form-select form-select-sm w-xl">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3" selected>3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mt-3">
                                        <p class="text-muted mb-2">Total</p>
                                        <h5>$720</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="card border shadow-none">
                    <div class="card-body">
                        <div class="d-flex align-items-start border-bottom pb-3">
                            <div class="me-4">
                                <img src="https://www.bootdey.com/image/380x380/FF8C00/000000" alt
                                    class="avatar-lg rounded">
                            </div>
                            <div class="flex-grow-1 align-self-center overflow-hidden">
                                <div>
                                    <h5 class="text-truncate font-size-18"><a href="#" class="text-dark">Black
                                            Colour Smartphone </a></h5>
                                    <p class="text-muted mb-0">
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                        <i class="bx bxs-star text-warning"></i>
                                    </p>
                                    <p class="mb-0 mt-1">Color : <span class="fw-medium">Blue</span></p>
                                </div>
                            </div>
                            <div class="flex-shrink-0 ms-2">
                                <ul class="list-inline mb-0 font-size-16">
                                    <li class="list-inline-item">
                                        <a href="#" class="text-muted px-1">
                                            <i class="mdi mdi-trash-can-outline"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="text-muted px-1">
                                            <i class="mdi mdi-heart-outline"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mt-3">
                                        <p class="text-muted mb-2">Price</p>
                                        <h5 class="mb-0 mt-2"><span class="text-muted me-2"><del
                                                    class="font-size-16 fw-normal">$750</del></span>$950</h5>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="mt-3">
                                        <p class="text-muted mb-2">Quantity</p>
                                        <div class="d-inline-flex">
                                            <select class="form-select form-select-sm w-xl">
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mt-3">
                                        <p class="text-muted mb-2">Total</p>
                                        <h5>$950</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="row my-4">
                    <div class="col-sm-6">
                        <a href="/" class="btn btn-link text-muted">
                            <i class="mdi mdi-arrow-left me-1"></i> Continue Shopping </a>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-2 mt-sm-0">
                            <button type="button" class="btn btn-success float-right" @click="checkOut(cartItems)"><i
                                    class="mdi mdi-cart-outline me-1"></i> Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="mt-5 mt-lg-0">
                    <div class="card border shadow-none">
                        <div class="card-header bg-transparent border-bottom py-3 px-4">
                            <h5 class="font-size-16 mb-0">Order Summary <span class="float-end">#MN0124</span></h5>
                        </div>
                        <div class="card-body p-4 pt-2">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Sub Total :</td>
                                            <td class="text-end">$ 780</td>
                                        </tr>
                                        <tr>
                                            <td>Discount : </td>
                                            <td class="text-end">- $ 78</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping Charge :</td>
                                            <td class="text-end">$ 25</td>
                                        </tr>
                                        <tr>
                                            <td>Estimated Tax : </td>
                                            <td class="text-end">$ 18.20</td>
                                        </tr>
                                        <tr class="bg-light">
                                            <th>Total :</th>
                                            <td class="text-end">
                                                <span class="fw-bold">
                                                    $ 745.2
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
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
            el: '#cart',
            data: {
                cartItems: [], // Initialize an empty array to store menu items
                isLoggedIn: false // Initialize the login status
            },
            mounted() {
                // Fetch menu items
                axios.get('/cart-data') // Replace with your actual endpoint
                    .then(response => {
                        // this.cartItems = response.data; // Assign API response data to cartItems
                        this.cartItems = response.data.cart; // Ensure correct assignment from response

                    })
                    .catch(error => {
                        console.error('Error fetching menu items', error);
                    });

                // Check if the user is logged in
                axios.get('/auth/check') // Replace with your actual endpoint for checking auth status
                    .then(response => {
                        this.isLoggedIn = response.data.isLoggedIn; // Set login status based on response
                    })
                    .catch(error => {
                        console.error('Error checking login status', error);
                    });
            },
            methods: {
                checkOut(cartItems) {
                    if (!this.isLoggedIn) {
                        // Redirect to login page if not logged in
                        window.location.href = '/login'; // Replace with your actual login page URL
                    } else {
                        // Prepare the cart items for the order
                        const orderItems = cartItems.items.map(item => ({
                            product_id: item.product_id,
                            quantity: item.quantity
                        }));

                        // Create the order
                        axios.post('/create-order', {
                                products: orderItems
                            })
                            .then(response => {
                                alert('Order placed successfully!');
                            })
                            .catch(error => {
                                console.error('Error placing order', error);
                            });
                    }
                }
            }
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
