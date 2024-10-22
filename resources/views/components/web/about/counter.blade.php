<div class="font-lex">



    <div class="py-16 space-y-10">
        <div class="w-9/12 mx-auto flex items-center">
            <div class="w-8/12 text-7xl font-semibold leading-tight text-black hover:underline hover:decoration-tangerine duration-500 ease-in-out transition-all">
                We Make Your LifeStyle More Standard.
            </div>
            <div class="w-4/12 text-xl text-gray-600 font-semibold">
                We work closely with our clients to know their objectives, target audience, unique needs, and practical
                design solutions.
            </div>
        </div>
        <div class="w-9/12 mx-auto flex gap-x-5">
            <div class="w-8/12 h-[35rem] overflow-hidden rounded-2xl border-4 border-gray-900 ">
                <img src="../../../../images/bg-6.jpg" alt=""
                     class=" w-full h-full transition object-cover duration-300  ease-linear hover:scale-110">
            </div>
            <div class="flex flex-col flex text-center w-4/12  h-[35rem] bg-gray-100 rounded-xl font-semibold">
                <div class="h-1/3 bg-gray-800 text-tangerine border-b border-white flex-col flex justify-center items-center rounded-t-xl">
                    <div class="flex items-center justify-center gap-x-2"><span class="counter" data-target="15">0 </span><span class="text-5xl text-white">+</span></div>
                    <div class="text-white"> of Experience</div>
                </div>
                <div class="h-1/3 bg-gray-800 text-tangerine border-b border-white flex-col flex justify-center items-center">
                    <div class="flex items-center justify-center gap-x-2"><span class="counter" data-target="120">0 </span><span class="text-5xl text-white">K</span></div>
                    <div class="text-white"> daily returns</div>
                </div>
                <div class="h-1/3 bg-gray-800 text-tangerine border-b border-white flex-col flex justify-center items-center rounded-b-xl">
                    <div class="flex items-center justify-center gap-x-2"><span class="counter" data-target="100">0 </span><span class="text-5xl text-white">%</span></div>
                    <div class="text-white"> client satisfaction rate</div>
                </div>
            </div>
        </div>
    </div>

</div>
<style>
    .counter {
        font-size: 4rem;
        font-weight: 600;
        animation: count 3s forwards;
    }
</style>
<script>
    const counters = document.querySelectorAll('.counter');

    const updateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        let count = 0;
        const increment = target / 100; // Adjust the increment based on duration

        const interval = setInterval(() => {
            if (count < target) {
                count += increment;
                counter.innerText = Math.floor(count);
            } else {
                counter.innerText = target; // Ensure it reaches the target
                clearInterval(interval); // Stop the interval once the target is reached
            }
        }, 1); // Adjust this value for speed
    };

    window.onload = () => {
        counters.forEach(counter => updateCounter(counter));
    };
</script>




