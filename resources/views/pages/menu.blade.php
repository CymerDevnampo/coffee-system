<section class="menu-area section-gap" id="coffee">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4" v-for="menu in menuItems" :key="menu.id">
                <div class="single-menu custom-row-height">
                    <div class="title-div justify-content-between d-flex">
                        {{-- <h4>@{{ menu.id }}</h4> --}}
                        <h4>@{{ menu.name }}</h4>
                        <p class="price float-right">
                            ₱@{{ menu.price }}
                        </p>
                    </div>
                    <p>
                        @{{ menu.description }}
                    </p>
                    <div align="center" class="custom-image">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYs8803ekgG4FFAR923xOFtkojgQWzKY5xLw&s"
                            height="80">
                    </div>
                    <div class="custom-order-btn" align="center">
                        <button type="button" class="btn btn-outline-secondary btn-sm float-right mt-2"
                            @click="addToCart(menu)">Order now</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        new Vue({
            el: '#coffee',
            data: {
                menuItems: [], // Initialize an empty array to store menu items
                isLoggedIn: false // Initialize the login status
            },
            mounted() {
                // Fetch menu items
                axios.get('/menu') // Replace with your actual endpoint
                    .then(response => {
                        this.menuItems = response.data; // Assign API response data to menuItems
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
                // orderNow(menu) {
                //     if (!this.isLoggedIn) {
                //         // Redirect to login page if not logged in
                //         window.location.href = '/login'; // Replace with your actual login page URL
                //     } else {
                //         // Add item to cart if logged in
                //         axios.post('/order', {
                //                 products: [{
                //                     product_id: menu.id,
                //                     quantity: 1 // Assuming each order is for 1 item, you can adjust this as needed
                //                 }]
                //             }) // Replace with your actual order endpoint
                //             .then(response => {
                //                 alert('Order placed successfully!');
                //             })
                //             .catch(error => {
                //                 console.error('Error placing order', error);
                //             });
                //     }
                // }

                addToCart(menu) {
                    if (!this.isLoggedIn) {
                        // Redirect to login page if not logged in
                        window.location.href = '/login'; // Replace with your actual login page URL
                    } else {
                        // Add item to cart if logged in
                        axios.post('/add-to-cart', {
                                product_id: menu.id,
                                quantity: 1 // Assuming each order is for 1 item, you can adjust this as needed
                            }) // Replace with your actual cart endpoint
                            .then(response => {
                                alert('Item added to cart!');
                            })
                            .catch(error => {
                                console.error('Error adding item to cart', error);
                            });
                    }
                }
            }
        });
    </script>
@endpush

@push('css')
    <style>
        .custom-image img {
            border-radius: 10px;
        }

        .custom-row-height {
            height: 280px;
        }

        .custom-order-btn .float-right {
            border-radius: 30px;
            float: none !important;
            color: #b68834;
            border-color: #b68834
        }

        .custom-order-btn .float-right:hover {
            float: none !important;
            color: #ffffff;
            border-color: #b68834;
            background-color: #b68834;
        }
    </style>
@endpush
