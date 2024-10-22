<div>
    <style>
        .image-gallery img {
            transition: transform 0.3s;
        }

        .image-gallery img:hover {
            transform: scale(1.1);
        }
    </style>

    <div class="">
        <!-- Hero Section -->
        <section class="container mx-auto  bg-white rounded-lg shadow mt-32 my-16">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2">
                    <img src="https://via.placeholder.com/400" alt="Product Image" class="w-full rounded-lg">
                </div>
                <div class="md:w-1/2 md:pl-6 mt-4 md:mt-0">
                    <h2 class="text-2xl font-semibold">Product Title</h2>
                    <p class="text-xl text-blue-600">$29.99</p>
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Add to Cart</button>
                    <button class="mt-2 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Enroll Now
                    </button>

                    <!-- Product Details -->
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold">Description</h3>
                        <p>This is a brief description of the product highlighting its features and benefits.</p>

                        <!-- Features & Benefits -->
                        <h3 class="mt-4 text-lg font-semibold">Features & Benefits</h3>
                        <ul class="list-disc list-inside">
                            <li>Feature 1</li>
                            <li>Feature 2</li>
                            <li>Feature 3</li>
                        </ul>

                        <!-- Customer Reviews -->
                        <h3 class="mt-4 text-lg font-semibold">Customer Reviews</h3>
                        <p>"This product changed my life!" - Happy Customer</p>
                    </div>
                </div>
            </div>

            <!-- Image Gallery -->
            <div class="image-gallery grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
                <img src="https://via.placeholder.com/100" alt="" class="rounded-lg cursor-pointer">
                <img src="https://via.placeholder.com/100" alt="" class="rounded-lg cursor-pointer">
                <img src="https://via.placeholder.com/100" alt="" class="rounded-lg cursor-pointer">
                <img src="https://via.placeholder.com/100" alt="" class="rounded-lg cursor-pointer">
            </div>

            <!-- Video Demo -->
            <div class="mt-6">
                <h3 class="text-lg font-semibold">Watch Our Video Demo</h3>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0"
                        allowfullscreen></iframe>
            </div>

            <!-- Related Products -->
            <section class="mt-8">
                <h3 class="text-lg font-semibold">Related Products</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">
                    <!-- Related Product Card -->
                    <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-shadow duration-300">
                        <img src="https://via.placeholder.com/150" alt="" class="w-full rounded-lg mb-2">
                        <h4>Related Product 1</h4>
                        <p>$19.99</p>
                        <button class="mt-2 bg-blue-500 text-white py-1 px-2 rounded hover:bg-blue-600">View Product
                        </button>
                    </div>

                    <!-- Repeat for more related products -->
                    <!-- ... -->

                </div>
            </section>

            <!-- FAQs Section -->
            <section class="mt-8">
                <h3 class="text-lg font-semibold">Frequently Asked Questions</h3>
                <details class="my-2 border-b border-gray-300 pb-2">
                    <summary>What is this product?</summary>
                    This product is designed to help you achieve your goals.
                </details>

                <!-- Repeat for more FAQs -->
                <!-- ... -->

            </section>

            <!-- Community Engagement Section -->
            <section class="mt-8 bg-gray-50 p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold">Join Our Team!</h3>
                <p>Become part of our community and start earning today!</p>
                <button class="mt-2 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Join Now</button>

                <!-- Success Stories -->
                <h4 class="mt-4 font-semibold">Success Stories:</h4>
                <p>"I achieved financial freedom through this opportunity!" - Successful Member</p>
            </section>

        </section>

        <!-- Footer Section -->
        <footer class="bg-white mt-auto p-6 shadow-inner">
            <div class="container mx-auto text-center">
                &copy; 2024 Your Company Name |
                <a href="#" class="">Privacy Policy</a> |
                <a href="#" class="">Terms of Service</a> |
                Follow us on
                <a href="#" target="_blank" rel="noopener noreferrer">Social Media Links</a>.
            </div>
        </footer>

        <script>
            // Optional JavaScript for interactivity can be added here
            // For example, you could add functionality to dynamically load related products or handle form submissions.
        </script>

    </div>
</div>
