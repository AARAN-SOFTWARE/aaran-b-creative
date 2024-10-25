
<div class="bg-gray-100 font-lex">

    <!-- Header Section -->
    <x-web.items.banner title="Contact Us" tagline="We'd love to hear from you!" />


    <!-- Contact Section -->
    <section class="py-10">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Contact Form -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-4">Get in Touch</h2>
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Name</label>
                        <input type="text" id="name" name="name" required
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"/>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"/>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" required
                                  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"></textarea>
                    </div>
                    <button type="submit"
                            class="w-full bg-tangerine text-white py-2 rounded hover:bg-orange-700 transition duration-200">Send Message</button>
                </form>
            </div>

            <!-- Company Information -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-4">Contact Information</h2>
                <p><strong>Address:</strong> 123 Main St, Anytown, USA</p>
                <p><strong>Phone:</strong> +1 (123) 456-7890</p>
                <p><strong>Email:</strong> info@example.com</p>

                <!-- Map Section -->
                <h3 class="text-xl font-semibold mt-6 mb-2">Our Location</h3>

                <iframe
                    class=""
                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d978.7001772786659!2d77.34018426961973!3d11.128215315204342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTHCsDA3JzQxLjYiTiA3N8KwMjAnMjcuMCJF!5e0!3m2!1sen!2sus!4v1719294872012!5m2!1sen!2sus"
                    frameborder="0"
                    width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                    aria-hidden="false"
                    tabindex="0"
                ></iframe>

            </div>
        </div>
    </section>

    <!-- Footer Section -->
{{--    <footer class="bg-tangerine text-white p-6 text-center">--}}
{{--        <p>&copy; 2024 Your Company Name. All rights reserved.</p>--}}
{{--    </footer>--}}

    <x-web.home.footer-address />
    <x-web.home.copyright />
</div>
</html>
