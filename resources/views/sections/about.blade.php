<section id="about" class="section-padding about-bg relative">
    <!-- Animated Background with Parallax -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-20">
        <div class="absolute rounded-full blur-2xl animate-float-slow" style="width: 200px; height: 200px; background: radial-gradient(circle, rgba(74, 222, 128, 0.06) 0%, transparent 70%); left: 20%; top: 30%;" data-parallax="0.2"></div>
        <div class="absolute rounded-full blur-2xl animate-float-slow" style="width: 200px; height: 200px; background: radial-gradient(circle, rgba(134, 239, 172, 0.04) 0%, transparent 70%); right: 20%; bottom: 30%; animation-delay: 5s;" data-parallax="0.3"></div>
    </div>

    <!-- Decorative elements with Parallax -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-30">
        <div class="absolute top-20 left-10 w-64 h-64 bg-primary/4 rounded-full blur-[30px]" data-parallax="0.15"></div>
        <div class="absolute bottom-20 right-10 w-64 h-64 bg-accent/3 rounded-full blur-[40px]" data-parallax="0.25"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Header -->
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="text-5xl md:text-6xl lg:text-7xl font-display mb-6 transition-all duration-1000 ease-out" data-scale-in style="transform-origin: center; transform: scale(0.5); opacity: 0;">
                <span class="text-white">{{ __('messages.about.title_white') }}</span> <span class="gradient-text">{{ __('messages.about.title_gradient') }}</span>
            </h2>
            <p class="text-xl md:text-2xl text-foreground/80 font-body leading-relaxed transition-all duration-1000 ease-out" data-scale-in style="transform-origin: center; transform: scale(0.5); opacity: 0;">
                {{ __('messages.about.description') }}
            </p>
        </div>

        <!-- Values Grid - 2x2 Layout -->
        <div class="grid md:grid-cols-2 gap-6 lg:gap-8 mb-20 max-w-6xl mx-auto p-4">
            <!-- Top Left - Mission Card (Compact) -->
            <div class="group animate-card-pulse self-end about-value-card">
                <div class="glass-card rounded-3xl p-6 lg:p-7 relative min-h-[300px] border-2 border-border/50 hover:border-primary transition-all duration-300 overflow-hidden shadow-[0_4px_20px_rgba(74,222,128,0.1)] hover:shadow-[0_8px_30px_rgba(74,222,128,0.3)]">
                    <!-- Background gradient on hover -->
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-15 transition-opacity duration-300 bg-gradient-to-br from-green-500/30 via-blue-500/30 to-green-500/30 rounded-3xl"></div>

                    <div class="relative z-10 flex flex-col items-center text-center gap-4">
                        <div class="w-14 h-14 rounded-2xl bg-muted/50 group-hover:bg-gradient-to-br group-hover:from-primary group-hover:to-accent flex items-center justify-center flex-shrink-0 shadow-lg group-hover:shadow-2xl transition-all duration-300">
                            <svg class="w-7 h-7 text-muted-foreground group-hover:text-white transition-colors duration-300 group-hover:drop-shadow-[0_0_8px_rgba(255,255,255,0.8)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-heading mb-2 text-foreground group-hover:text-primary transition-colors duration-300">
                                {{ __('messages.about.mission_title') }}
                            </h3>
                            <p class="text-foreground/75 font-body leading-relaxed text-base">
                                {{ __('messages.about.mission_text') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Top Right - Image Card 1 with Auto-Rotate -->
            <div class="group self-start about-value-card"
                 x-data="{
                     currentImage: 0,
                     images: [
                         '/agriculture-is-researching-flower-varieties-modern-agricultural-concepts.jpg',
                         '/man-holding-basket-with-vegetables.jpg',
                         '/young-farmer-taking-care-his-business.jpg'
                     ],
                     init() {
                         setInterval(() => {
                             this.currentImage = (this.currentImage + 1) % this.images.length;
                         }, 3000);
                     }
                 }">
                <div class="relative rounded-3xl min-h-[400px] border-2 border-border/50 hover:border-primary transition-all duration-300 overflow-hidden shadow-[0_4px_20px_rgba(74,222,128,0.1)] hover:shadow-[0_8px_30px_rgba(74,222,128,0.3)]">
                    <template x-for="(image, index) in images" :key="index">
                        <img :src="image"
                             alt="Agricultural Innovation"
                             class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000"
                             :class="currentImage === index ? 'opacity-100 z-10' : 'opacity-0 z-0'">
                    </template>
                    <!-- Dark overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent z-20"></div>
                    <!-- Optional caption -->
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white z-30">
                        <p class="text-sm font-medium opacity-80">Agricultural Innovation</p>
                    </div>
                </div>
            </div>

            <!-- Bottom Left - Image Card 2 with Auto-Rotate -->
            <div class="group self-start about-value-card"
                 x-data="{
                     currentImage: 0,
                     images: [
                         '/agriculture-is-researching-flower-varieties-modern-agricultural-concepts.jpg',
                         '/man-holding-basket-with-vegetables.jpg',
                         '/young-farmer-taking-care-his-business.jpg'
                     ],
                     init() {
                         setInterval(() => {
                             this.currentImage = (this.currentImage + 1) % this.images.length;
                         }, 3000);
                     }
                 }">
                <div class="relative rounded-3xl min-h-[400px] border-2 border-border/50 hover:border-primary transition-all duration-300 overflow-hidden shadow-[0_4px_20px_rgba(74,222,128,0.1)] hover:shadow-[0_8px_30px_rgba(74,222,128,0.3)]">
                    <template x-for="(image, index) in images" :key="index">
                        <img :src="image"
                             alt="Sustainable Practices"
                             class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1000"
                             :class="currentImage === index ? 'opacity-100 z-10' : 'opacity-0 z-0'">
                    </template>
                    <!-- Dark overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent z-20"></div>
                    <!-- Optional caption -->
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white z-30">
                        <p class="text-sm font-medium opacity-80">Sustainable Practices</p>
                    </div>
                </div>
            </div>

            <!-- Bottom Right - Vision Card (Compact) -->
            <div class="group animate-card-pulse self-start about-value-card">
                <div class="glass-card rounded-3xl p-6 lg:p-7 relative min-h-[300px] border-2 border-border/50 hover:border-primary transition-all duration-300 overflow-hidden shadow-[0_4px_20px_rgba(74,222,128,0.1)] hover:shadow-[0_8px_30px_rgba(74,222,128,0.3)]">
                    <!-- Background gradient on hover -->
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-15 transition-opacity duration-300 bg-gradient-to-br from-green-500/30 via-blue-500/30 to-green-500/30 rounded-3xl"></div>

                    <div class="relative z-10 flex flex-col items-center text-center gap-4">
                        <div class="w-14 h-14 rounded-2xl bg-muted/50 group-hover:bg-gradient-to-br group-hover:from-primary group-hover:to-accent flex items-center justify-center flex-shrink-0 shadow-lg group-hover:shadow-2xl transition-all duration-300">
                            <svg class="w-7 h-7 text-muted-foreground group-hover:text-white transition-colors duration-300 group-hover:drop-shadow-[0_0_8px_rgba(255,255,255,0.8)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-heading mb-2 text-foreground group-hover:text-primary transition-colors duration-300">
                                {{ __('messages.about.vision_title') }}
                            </h3>
                            <p class="text-foreground/75 font-body leading-relaxed text-base">
                                {{ __('messages.about.vision_text') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
