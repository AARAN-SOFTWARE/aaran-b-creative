@props([
"list" =>null
])
<div class="relative">

    <div x-data="{
        currentSlide: 0,
        skip: 1,
        autoSlideInterval: null,

        startAutoSlide() {
            this.autoSlideInterval = setInterval(() => {
                this.next();
            }, 4500);
        },

        stopAutoSlide() {
            clearInterval(this.autoSlideInterval);
        },
        goToSlide(index) {
            let slider = this.$refs.slider;
            let offset = slider.firstElementChild.getBoundingClientRect().width;
            slider.scrollTo({ left: offset * index, behavior: 'smooth' });
        },
        next() {
            let slider = this.$refs.slider;
            let current = slider.scrollLeft;
            let offset = slider.firstElementChild.getBoundingClientRect().width;
            let maxScroll = offset * (slider.children.length );

            current + offset >= maxScroll ? slider.scrollTo({ left: 0, behavior: 'smooth' }) : slider.scrollBy({ left: offset * this.skip, behavior: 'smooth' });
        },
        prev() {
            let slider = this.$refs.slider;
            let current = slider.scrollLeft;
            let offset = slider.firstElementChild.getBoundingClientRect().width;
            let maxScroll = offset * (slider.children.length - 1);

            current <= 0 ? slider.scrollTo({ left: maxScroll, behavior: 'smooth' }) : slider.scrollBy({ left: -offset * this.skip, behavior: 'smooth' });
        },
        updateCurrentSlide() {
            let slider = this.$refs.slider;
            let offset = slider.firstElementChild.getBoundingClientRect().width;
            this.currentSlide = Math.round(slider.scrollLeft / offset);
        },
    }" x-init="startAutoSlide()" {{-- @mouseover="stopAutoSlide()" @mouseout="startAutoSlide()"--}} class="flex flex-col w-full">

        <!--image animation ----------------------------------------------------------------------------------->

        <div class="flex space-x-6">


            <ul x-ref="slider" @scroll="updateCurrentSlide" class="flex w-full md:h-[40rem] h-52 overflow-x-hidden snap-x snap-mandatory">

                {{-- @if($list) --}}
                {{-- @forelse($list as $row)
                <x-slider.home-slider :bg_image="'/../../../storage/images/{{$row->bg_image}}'" title="{{$row->vname}}" slogan="{{$row->description}}" />

                @empty --}}

                <x-slider.home-slider :bg_image="'/../../../images/network/slider/policy.jpg'" title="Best Online GST Billing Software in India" slogan="Create, manage & track invoices, e-invoices, and eWay bills, 100% safe, reliable, and secure..." />

                <x-slider.home-slider :bg_image="'/../../../images/network/slider/quality.jpg'" title="Only GST Billing Software You Need For Your Business" slogan="Streamline your invoicing with GST billing software, effortlessly create GST-compliant invoices in minutes..." />


                <x-slider.home-slider :bg_image="'/../../../images/network/slider/relation.jpg'" title="Book keeping and Transaction Recording" slogan="Categorized revenue, expenses, assets, liabilities, and other options.


                            Further, reviewed in detail and adjusted according to the entries to ensure accuracy..." text_length="28" />

                {{-- <x-slider.home-slider :bg_image="'/../../../images/network/mlm4.webp'" title="Maintain Regular Communication" slogan="Keeping clients in the loop about their financial standing and any pertinent

                            changes to tax laws or financial regulations is vital." />

                <x-slider.home-slider :bg_image="'/../../../images/network/mlm5.webp'" title="one-stop solution workflow management." slogan="Devote all your attention to a better customer experience for fast and secure information sharing" /> --}}

                {{-- @endforelse
                @endif --}}
            </ul>
        </div>

        <!-- Prev / Next Buttons ---------------------------------------------------------------------------------->
        <div class="absolute z-10 flex justify-between w-full h-full px-4">

            <!-- Prev Button -------------------------------------------------------------------------------------->
            <button x-on:click="prev" @mouseover="stopAutoSlide()" @mouseout="startAutoSlide()">
                <x-icons.icon icon="chevrons-left" class="block w-auto p-2 text-gray-100 bg-gray-700 opacity-50 sm:h-10 h-7 hover:text-white rounded-xl hover:bg-blue-600 hover:opacity-100" />
            </button>
            <!-- Next Button -------------------------------------------------------------------------------------->

            <button x-on:click="next" @mouseover="stopAutoSlide()" @mouseout="startAutoSlide()">
                <x-icons.icon icon="chevrons-right" class="block w-auto p-2 text-gray-100 bg-gray-700 opacity-50 sm:h-10 h-7 hover:text-white rounded-xl hover:bg-red-600 hover:opacity-100" />

            </button>
        </div>

        <!-- Indicators ------------------------------------------------------------------------------------------->

        <div class="absolute z-10 w-full bottom-3 lg:bottom-12">
            <div class="flex justify-center space-x-2">
                <template x-for="(slide, index) in Array.from($refs.slider.children)" :key="index">
                    <button @click="goToSlide(index)" :class="{'bg-gray-500': currentSlide === index, 'bg-bubble': currentSlide !== index}" class="w-3 h-1 bg-gray-400 rounded-full lg:w-3 lg:h-3 hover:bg-orange-400 focus:outline-none"></button>
                </template>
            </div>
        </div>
    </div>
</div>
