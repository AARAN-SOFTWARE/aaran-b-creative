<div>
    <style>
        body {
            background-color: #f8fafc; /* Tailwind's gray-100 */
        }
    </style>

    <x-slot name="header">MemberShip</x-slot>



    <div class="flex flex-col items-center justify-center min-h-screen p-6">
    <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-3xl">
        <h1 class="text-3xl font-bold text-center mb-6">Discover Our MLM Model</h1>
        <p class="text-gray-700 mb-4">
            Join our Multi-Level Marketing (MLM) model and unlock a world of opportunities! Our MLM structure allows you to earn income not only from your sales but also from the sales of those you recruit into the business.
        </p>

        <h2 class="text-2xl font-semibold mt-6 mb-4">Why You Should Join</h2>
        <ul class="list-disc list-inside mb-4 text-gray-700">
            <li>💰 **Unlimited Income Potential**: Your earnings grow as you build your team.</li>
            <li>📈 **Flexible Schedule**: Work at your own pace and on your own terms.</li>
            <li>🤝 **Community Support**: Join a network of like-minded individuals who support each other.</li>
            <li>🎓 **Training & Resources**: Access to training programs to help you succeed.</li>
            <li>🌍 **Global Reach**: Expand your business internationally with ease.</li>
        </ul>

        <h2 class="text-2xl font-semibold mt-6 mb-4">Services That Benefit You</h2>
        <div class="space-y-4 text-gray-700">
            <div class="p-4 border border-gray-300 rounded-lg">
                <h3 class="font-bold">1. Personalized Coaching</h3>
                <p>Receive one-on-one coaching sessions to guide you through your journey.</p>
            </div>
            <div class="p-4 border border-gray-300 rounded-lg">
                <h3 class="font-bold">2. Marketing Tools</h3>
                <p>Utilize our advanced marketing tools to promote your business effectively.</p>
            </div>
            <div class="p-4 border border-gray-300 rounded-lg">
                <h3 class="font-bold">3. Exclusive Webinars</h3>
                <p>Participate in exclusive webinars featuring industry experts and success stories.</p>
            </div>
            <div class="p-4 border border-gray-300 rounded-lg">
                <h3 class="font-bold">4. Networking Events</h3>
                <p>Join networking events to connect with other members and grow your business.</p>
            </div>
        </div>

{{--        <button id="joinButton" class="mt-6 w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded-md">Join Us Today!</button>--}}

        <!-- Modal for Join Action -->
{{--        <div id="joinModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">--}}
{{--            <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">--}}
{{--                <h2 class="text-xl font-bold mb-4">Thank You for Joining!</h2>--}}
{{--                <p>Your journey towards success begins now. We will contact you shortly with more information.</p>--}}
{{--                <button id="closeModal" class="mt-4 w-full bg-red-500 hover:bg-red-600 text-white font-bold py-2 rounded-md">Close</button>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="w-full py-6">
            {{--                        <button class="w-full text-center bg-green-500 text-white py-3 rounded-md">New Joining +--}}
            {{--                        </button>--}}
{{--            @livewire('authentication.add-user')--}}
        </div>

    </div>

    <!-- JavaScript -->
{{--    <script>--}}
{{--        document.getElementById('joinButton').addEventListener('click', function() {--}}
{{--            document.getElementById('joinModal').classList.remove('hidden');--}}
{{--        });--}}

{{--        document.getElementById('closeModal').addEventListener('click', function() {--}}
{{--            document.getElementById('joinModal').classList.add('hidden');--}}
{{--        });--}}
{{--    </script>--}}

    </div>
</div>
