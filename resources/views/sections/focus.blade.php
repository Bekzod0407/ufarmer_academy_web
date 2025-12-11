@php
    $focusAreas = [
        [
            'title' => __('messages.focus.programs.0.title'),
            'description' => __('messages.focus.programs.0.description'),
            'image' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=800&q=80',
            'gradient' => 'from-green-500/90 via-emerald-500/85 to-teal-500/80'
        ],
        [
            'title' => __('messages.focus.programs.1.title'),
            'description' => __('messages.focus.programs.1.description'),
            'image' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=800&q=80',
            'gradient' => 'from-blue-500/90 via-indigo-500/85 to-purple-500/80'
        ],
        [
            'title' => __('messages.focus.programs.2.title'),
            'description' => __('messages.focus.programs.2.description'),
            'image' => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=800&q=80',
            'gradient' => 'from-emerald-500/90 via-green-600/85 to-lime-500/80'
        ],
        [
            'title' => __('messages.focus.programs.3.title'),
            'description' => __('messages.focus.programs.3.description'),
            'image' => 'https://images.unsplash.com/photo-1592982537447-7440770cbfc9?w=800&q=80',
            'gradient' => 'from-amber-500/90 via-orange-500/85 to-red-500/80'
        ],
        [
            'title' => __('messages.focus.programs.4.title'),
            'description' => __('messages.focus.programs.4.description'),
            'image' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=800&q=80',
            'gradient' => 'from-violet-500/90 via-purple-500/85 to-fuchsia-500/80'
        ],
        [
            'title' => __('messages.focus.programs.5.title'),
            'description' => __('messages.focus.programs.5.description'),
            'image' => 'https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=800&q=80',
            'gradient' => 'from-cyan-500/90 via-blue-500/85 to-indigo-500/80'
        ],
        [
            'title' => __('messages.focus.programs.6.title'),
            'description' => __('messages.focus.programs.6.description'),
            'image' => 'https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?w=800&q=80',
            'gradient' => 'from-teal-500/90 via-cyan-500/85 to-sky-500/80'
        ],
        [
            'title' => __('messages.focus.programs.7.title'),
            'description' => __('messages.focus.programs.7.description'),
            'image' => 'https://images.unsplash.com/photo-1474511320723-9a56873867b5?w=800&q=80',
            'gradient' => 'from-sky-500/90 via-blue-500/85 to-indigo-500/80'
        ],
        [
            'title' => __('messages.focus.programs.8.title'),
            'description' => __('messages.focus.programs.8.description'),
            'image' => 'https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?w=800&q=80',
            'gradient' => 'from-teal-500/90 via-cyan-500/85 to-sky-500/80'
        ],
        [
            'title' => __('messages.focus.programs.9.title'),
            'description' => __('messages.focus.programs.9.description'),
            'image' => 'https://images.unsplash.com/photo-1500595046743-cd271d694d30?w=800&q=80',
            'gradient' => 'from-rose-500/90 via-pink-500/85 to-fuchsia-500/80'
        ]
    ];
@endphp

<section id="focus" class="section-padding focus-bg relative"
    x-data="{
        activeIndex: 0,
        isPaused: false,
        autoScrollInterval: null,
        focusAreas: {{ \Illuminate\Support\Js::from($focusAreas) }},
        init() {
            // CSS animation handles scrolling
        }
    }"
>
    <!-- Animated Background -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-20">
        <div class="absolute rounded-full blur-2xl animate-float-slow" style="width: 200px; height: 200px; background: radial-gradient(circle, rgba(74, 222, 128, 0.06) 0%, transparent 70%); left: 20%; top: 30%;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 transition-all duration-1000 ease-out" data-scale-in style="transform-origin: center; transform: scale(0.5); opacity: 0;">
                <span class="text-primary">{{ __('messages.focus.title') }}</span>
                <span class="gradient-text-nature block pb-2"> {{ __('messages.focus.title_programs') }}</span>
            </h2>
            <p class="text-xl md:text-2xl text-muted-foreground transition-all duration-1000 ease-out" data-scale-in style="transform-origin: center; transform: scale(0.5); opacity: 0;">
                {{ __('messages.focus.subtitle') }}
            </p>
        </div>
    </div>

    <!-- Horizontal Scrollable Container - Full Width -->
    <div class="overflow-x-auto pb-8 pt-4 scrollbar-hide scroll-smooth" x-ref="scrollContainer">
        <div class="flex gap-6 lg:gap-8 pl-4 py-2 animate-scroll-infinite"
                 @mouseenter="$refs.scrollContainer.style.setProperty('--animation-play-state', 'paused'); $el.style.animationPlayState = 'paused'"
                 @mouseleave="$refs.scrollContainer.style.setProperty('--animation-play-state', 'running'); $el.style.animationPlayState = 'running'">
                <!-- First set of cards -->
                <template x-for="(area, index) in focusAreas" :key="`first-${index}`">
                    <div class="group cursor-pointer flex-shrink-0 w-[350px] md:w-[400px] focus-program-card">
                        <div class="relative rounded-3xl overflow-hidden shadow-card hover:shadow-[0_20px_60px_rgba(74,222,128,0.3)] will-change-transform">
                            <!-- Background Image -->
                            <div class="aspect-[3/4] relative overflow-hidden rounded-3xl">
                                <img
                                    :src="area.image"
                                    :alt="area.title"
                                    loading="lazy"
                                    decoding="async"
                                    class="absolute inset-0 w-full h-full object-cover rounded-3xl transition-transform duration-700 group-hover:scale-105"
                                />

                                <!-- Gradient Overlay -->
                                <div :class="`absolute inset-0 bg-gradient-to-t ${area.gradient} opacity-40 group-hover:opacity-30 transition-opacity duration-500 rounded-3xl`"></div>

                                <!-- Green and Blue gradient border glow on hover -->
                                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl overflow-hidden">
                                    <div class="absolute inset-0 rounded-3xl border-2 border-green-400/40"></div>
                                    <div class="absolute inset-0 rounded-3xl bg-gradient-to-br from-green-500/10 via-blue-500/10 to-green-500/10"></div>
                                </div>

                                <!-- Dark gradient for text readability -->
                                <div class="absolute bottom-0 left-0 right-0 h-2/3 bg-gradient-to-t from-black/80 via-black/40 to-transparent rounded-3xl"></div>

                                <!-- Content -->
                                <div class="absolute inset-0 p-6 lg:p-8 flex flex-col justify-end text-white z-10">
                                    <h3 class="text-2xl lg:text-3xl font-bold mb-3 drop-shadow-lg break-words" x-text="area.title"></h3>
                                    <p class="text-white/90 text-base lg:text-lg leading-relaxed mb-6 drop-shadow-md break-words" x-text="area.description"></p>

                                    <div class="flex items-center gap-2 text-base font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        {{ __('messages.focus.learn_more') }}
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
                <!-- Duplicate set for seamless loop -->
                <template x-for="(area, index) in focusAreas" :key="`second-${index}`">
                    <div class="group cursor-pointer flex-shrink-0 w-[350px] md:w-[400px] focus-program-card">
                        <div class="relative rounded-3xl overflow-hidden shadow-card hover:shadow-[0_20px_60px_rgba(74,222,128,0.3)] will-change-transform">
                            <!-- Background Image -->
                            <div class="aspect-[3/4] relative overflow-hidden rounded-3xl">
                                <img
                                    :src="area.image"
                                    :alt="area.title"
                                    loading="lazy"
                                    decoding="async"
                                    class="absolute inset-0 w-full h-full object-cover rounded-3xl transition-transform duration-700 group-hover:scale-105"
                                />

                                <!-- Gradient Overlay -->
                                <div :class="`absolute inset-0 bg-gradient-to-t ${area.gradient} opacity-40 group-hover:opacity-30 transition-opacity duration-500 rounded-3xl`"></div>

                                <!-- Green and Blue gradient border glow on hover -->
                                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl overflow-hidden">
                                    <div class="absolute inset-0 rounded-3xl border-2 border-green-400/40"></div>
                                    <div class="absolute inset-0 rounded-3xl bg-gradient-to-br from-green-500/10 via-blue-500/10 to-green-500/10"></div>
                                </div>

                                <!-- Dark gradient for text readability -->
                                <div class="absolute bottom-0 left-0 right-0 h-2/3 bg-gradient-to-t from-black/80 via-black/40 to-transparent rounded-3xl"></div>

                                <!-- Content -->
                                <div class="absolute inset-0 p-6 lg:p-8 flex flex-col justify-end text-white z-10">
                                    <h3 class="text-2xl lg:text-3xl font-bold mb-3 drop-shadow-lg break-words" x-text="area.title"></h3>
                                    <p class="text-white/90 text-base lg:text-lg leading-relaxed mb-6 drop-shadow-md break-words" x-text="area.description"></p>

                                    <div class="flex items-center gap-2 text-base font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        {{ __('messages.focus.learn_more') }}
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- We can offer heading -->
        <div class="text-center mt-20 mb-12" data-animate="fade-in">
            <h3 class="text-4xl md:text-5xl lg:text-6xl font-bold text-foreground">
                {{ __('messages.focus.offer_title') }} <span class="gradient-text">{{ __('messages.focus.offer_title_highlight') }}</span>
            </h3>
        </div>

        <!-- Program Highlights Cards -->
        <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto relative" data-animate="stagger">
            <!-- Connecting Line with Lighting Effect at Number Level -->
            <div class="hidden md:block absolute top-[48px] left-0 right-0 h-1 z-0">
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-border/50 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-primary to-transparent opacity-80 animate-line-glow"></div>
                <!-- Additional glow layer for more visibility -->
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-primary/40 to-transparent blur-sm"></div>
            </div>

            <!-- Card 1 - Practical Training Fields -->
            <div class="glass-card rounded-2xl p-8 border-2 border-border/50 hover:border-primary/50 transition-all duration-300 min-h-[400px] flex flex-col relative z-10" data-animate="card-reveal">
                <div class="flex justify-between items-start mb-6">
                    <div class="flex flex-col gap-3">
                        <svg class="w-12 h-12 text-primary/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                        </svg>
                        <h3 class="text-2xl font-bold text-foreground">{{ __('messages.focus.offers.0.title') }}</h3>
                    </div>
                    <span class="text-2xl font-bold text-primary/30">01</span>
                </div>
                <p class="text-base text-muted-foreground leading-relaxed">
                    {{ __('messages.focus.offers.0.description') }}
                </p>
            </div>

            <!-- Card 2 - Post-Training Support -->
            <div class="glass-card rounded-2xl p-8 border-2 border-border/50 hover:border-primary/50 transition-all duration-300 min-h-[400px] flex flex-col relative z-10" data-animate="card-reveal">
                <div class="flex justify-between items-start mb-6">
                    <div class="flex flex-col gap-3">
                        <svg class="w-12 h-12 text-primary/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                        <h3 class="text-2xl font-bold text-foreground">{{ __('messages.focus.offers.1.title') }}</h3>
                    </div>
                    <span class="text-2xl font-bold text-primary/30">02</span>
                </div>
                <p class="text-base text-muted-foreground leading-relaxed">
                    {{ __('messages.focus.offers.1.description') }}
                </p>
            </div>

            <!-- Card 3 - Our Trainer Team -->
            <div class="glass-card rounded-2xl p-8 border-2 border-border/50 hover:border-primary/50 transition-all duration-300 min-h-[400px] flex flex-col relative z-10" data-animate="card-reveal">
                <div class="flex justify-between items-start mb-6">
                    <div class="flex flex-col gap-3">
                        <svg class="w-12 h-12 text-primary/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <h3 class="text-2xl font-bold text-foreground">{{ __('messages.focus.offers.2.title') }}</h3>
                    </div>
                    <span class="text-2xl font-bold text-primary/30">03</span>
                </div>
                <p class="text-base text-muted-foreground leading-relaxed">
                    {{ __('messages.focus.offers.2.description') }}
                </p>
            </div>
        </div>
    </div>
</section>
