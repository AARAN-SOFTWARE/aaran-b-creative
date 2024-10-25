<div class="bg-stone-100 font-lex">
    <x-web.items.banner title="Blog" tagline="Your Go-To Source for All Things
                    Business: Insights, Advice, and More!" />
    <div class="w-7/12 mx-auto">
        <input type="search" placeholder="Search and Hit Enter....."
               class="w-full h-16 my-3 mb-16 text-sm border-2 border-gray-200 rounded-2xl placeholder-gray-400 italic font-normal text-center focus:ring-0 focus:border focus:border-tangerine transition-all duration-300 ease-in-out">
    </div>

    <div class="w-7/12 mx-auto flex gap-12">
        <div class="w-8/12 h-auto mb-32 space-y-12">
            @for($i=1; $i<=5; $i++)
                <x-web.items.blog.card/>
            @endfor
        </div>
        <div class="w-4/12 h-auto rounded-2xl space-y-12">
            <x-web.items.blog.author/>
            <x-web.items.blog.latest/>
            <x-web.items.blog.social-media/>
            <x-web.items.blog.tag/>
            <x-web.items.blog.newsletter/>
        </div>
    </div>

    <x-web.home.footer-address/>
    <x-web.home.copyright/>
</div>
