@php
    $partners = [
        // Placeholder partners - will be populated later
        ['name' => '', 'logo' => ''],
        ['name' => '', 'logo' => ''],
        ['name' => '', 'logo' => ''],
        ['name' => '', 'logo' => ''],
        ['name' => '', 'logo' => ''],
        ['name' => '', 'logo' => ''],
    ];
@endphp

<section id="partners" class="section-padding partners-bg relative">
    <!-- Animated Background -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-20">
        <div class="absolute rounded-full blur-2xl animate-float-slow" style="width: 200px; height: 200px; background: radial-gradient(circle, rgba(74, 222, 128, 0.06) 0%, transparent 70%); right: 20%; top: 30%;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 transition-all duration-1000 ease-out" data-scale-in style="transform-origin: center; transform: scale(0.5); opacity: 0;">
                <span class="text-white">{{ __('messages.partners.title_white') }}</span> <span class="gradient-text">{{ __('messages.partners.title_gradient') }}</span>
            </h2>
        </div>
    </div>

    <!-- Horizontal Scrollable Container - Full Width -->
    <div class="overflow-x-auto pb-8 pt-4 scrollbar-hide scroll-smooth" x-ref="scrollContainer">
        <div class="flex gap-6 lg:gap-8 pl-4 py-2 animate-scroll-infinite"
             @mouseenter="$el.style.animationPlayState = 'paused'"
             @mouseleave="$el.style.animationPlayState = 'running'">
            <!-- First set of cards -->
            <template x-for="(partner, index) in {{ \Illuminate\Support\Js::from($partners) }}" :key="`first-${index}`">
                <div class="group cursor-pointer flex-shrink-0 w-[280px] md:w-[320px] partner-card">
                    <div class="glass-card rounded-2xl p-8 border-2 border-border/50 hover:border-primary/50 transition-all duration-300 h-[200px] flex flex-col items-center justify-center gap-6 shadow-card hover:shadow-[0_20px_60px_rgba(74,222,128,0.3)]">
                        <!-- Logo Placeholder -->
                        <div class="w-24 h-24 rounded-xl bg-muted/30 flex items-center justify-center group-hover:bg-muted/50 transition-colors duration-300">
                            <svg class="w-12 h-12 text-muted-foreground/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <!-- Name Placeholder -->
                        <div class="text-center">
                            <div class="h-6 w-32 bg-muted/30 rounded-lg group-hover:bg-muted/50 transition-colors duration-300"></div>
                        </div>
                    </div>
                </div>
            </template>
            <!-- Duplicate set for seamless loop -->
            <template x-for="(partner, index) in {{ \Illuminate\Support\Js::from($partners) }}" :key="`second-${index}`">
                <div class="group cursor-pointer flex-shrink-0 w-[280px] md:w-[320px] partner-card">
                    <div class="glass-card rounded-2xl p-8 border-2 border-border/50 hover:border-primary/50 transition-all duration-300 h-[200px] flex flex-col items-center justify-center gap-6 shadow-card hover:shadow-[0_20px_60px_rgba(74,222,128,0.3)]">
                        <!-- Logo Placeholder -->
                        <div class="w-24 h-24 rounded-xl bg-muted/30 flex items-center justify-center group-hover:bg-muted/50 transition-colors duration-300">
                            <svg class="w-12 h-12 text-muted-foreground/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <!-- Name Placeholder -->
                        <div class="text-center">
                            <div class="h-6 w-32 bg-muted/30 rounded-lg group-hover:bg-muted/50 transition-colors duration-300"></div>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>
