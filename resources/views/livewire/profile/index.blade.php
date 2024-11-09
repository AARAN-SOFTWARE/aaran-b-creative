<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <x-slot name="header">Profile</x-slot>

    <div class="bg-gray-100 flex items-center justify-center min-h-screen p-6">
        <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
                    <div class="flex items-center mb-6">
                        <img src="https://via.placeholder.com/100" alt="Profile Picture" class="w-24 h-24 rounded-full border-2 border-blue-500">
                        <div class="ml-4">
                            <h2 class="text-xl font-bold text-gray-800">John Doe</h2>
                            <p class="text-gray-600">john.doe@example.com</p>
                        </div>
                    </div>

                    <h3 class="text-lg font-semibold mb-2">Bio</h3>
                    <p class="text-gray-700 mb-4">
                        Passionate about helping others achieve financial freedom through innovative marketing strategies.
                        Dedicated to personal growth and team success.
                    </p>

                    <h3 class="text-lg font-semibold mb-2">Achievements</h3>
                    <ul class="list-disc list-inside text-gray-700 mb-4">
                        <li>Top Salesperson of the Year 2023</li>
                        <li>Completed Advanced Marketing Training</li>
                        <li>Successfully recruited 15 new members</li>
                    </ul>

                    <button id="editProfileButton" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded-md">Edit Profile</button>

{{--            @foreach($list as $profile)--}}

{{--                <div class="flex items-center mb-6">--}}
{{--                    <img src="https://via.placeholder.com/100" alt="Profile Picture"--}}
{{--                         class="w-24 h-24 rounded-full border-2 border-blue-500">--}}
{{--                    <div class="ml-4">--}}
{{--                        <h2 class="text-xl font-bold text-gray-800">{{$profile->username}}</h2>--}}
{{--                        <p class="text-gray-600">{{$profile->email}}</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <h3 class="text-lg font-semibold mb-2">Bio</h3>--}}
{{--                <p class="text-gray-700 mb-4">--}}
{{--                    {{$profile->bio}}--}}
{{--                </p>--}}

{{--                <h3 class="text-lg font-semibold mb-2">Achievements</h3>--}}
{{--                <ul class="list-disc list-inside text-gray-700 mb-4">--}}
{{--                    <li>{{$profile->bio}}</li>--}}
{{--                </ul>--}}
{{--            @endforeach--}}

{{--            <button id="editProfileButton"--}}
{{--                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded-md">Edit Profile--}}
{{--            </button>--}}

            <!-- Modal for Edit Profile -->
            <div id="editProfileModal"
                 class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
                    <h2 class="text-xl font-bold mb-4">Edit Profile</h2>
                    <form id="editProfileForm">
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name" value="John Doe" required
                                   class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-500">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" value="john.doe@example.com" required
                                   class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-500">
                        </div>
                        <button type="submit"
                                class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 rounded-md">Save
                            Changes
                        </button>
                    </form>
                    <button id="closeModal"
                            class="mt-4 w-full bg-red-500 hover:bg-red-600 text-white font-bold py-2 rounded-md">Cancel
                    </button>
                </div>
            </div>

        </div>

        <!-- JavaScript -->
        <script>
            document.getElementById('editProfileButton').addEventListener('click', function () {
                document.getElementById('editProfileModal').classList.remove('hidden');
            });

            document.getElementById('closeModal').addEventListener('click', function () {
                document.getElementById('editProfileModal').classList.add('hidden');
            });

            document.getElementById('editProfileForm').addEventListener('submit', function (event) {
                event.preventDefault(); // Prevent default form submission
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;

                // Here you can add your logic to handle the updated profile data
                console.log(`Updated Name: ${name}, Updated Email: ${email}`);

                // Close the modal after saving changes
                document.getElementById('editProfileModal').classList.add('hidden');
            });
        </script>

    </div>
</div>
