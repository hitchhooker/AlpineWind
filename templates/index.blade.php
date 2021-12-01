<div x-data="{ bgHero: false }">
    <!-- TODO: make binding work -->
    <div class="flex items-center h-screen bg-blue-900" x-bind:class="! bgHero ? 'bg-example' : 'bg-hero'">
        <div class="max-w-5xl m-auto bg-pink-200 rounded-lg w-3/4 h-64 flex items-center shadow-xl" x-data="{ open: false }">
        <button class="border-1 px-8 py-4 bg-white rounded-lg shadow-lg" @click="open = ! open">Toggle</button>
            <h1 class="w-full text-center text-3xl md:text-5xl font-mono" x-show="open">
           		AlpineWind
            </h1>
            <div class="bg-hero bg-example"></div>
            <button class="border-3 px-10 py-5 bg-black text-white rounded-lg shadow-lg" @click="bgHero = !bgHero">Background change</button>
        </div>
    </div>
</div>