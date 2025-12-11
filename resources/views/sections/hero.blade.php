<section id="home" class="relative min-h-screen flex items-center pt-20 overflow-hidden hero-bg">

    <!-- Animated gradient overlay -->
    <div class="absolute inset-0 opacity-30 gradient-overlay"></div>

    <!-- Floating Icons with Parallax -->
    <div class="absolute text-primary/30 hidden lg:block floating-icon-1" style="top: 15%; left: 5%;" data-parallax="0.3">
        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
        </svg>
    </div>
    <div class="absolute text-primary/30 hidden lg:block floating-icon-2" style="top: 25%; right: 8%;" data-parallax="0.2">
        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
        </svg>
    </div>
    <div class="absolute text-primary/30 hidden lg:block floating-icon-3" style="bottom: 30%; left: 10%;" data-parallax="0.4">
        <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
        </svg>
    </div>
    <div class="absolute text-primary/30 hidden lg:block floating-icon-4" style="top: 60%; right: 5%;" data-parallax="0.25">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
        </svg>
    </div>

    <!-- Simplified gradient orbs with Parallax -->
    <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-primary/5 rounded-full blur-[40px] opacity-40 animate-pulse-glow" data-parallax="0.15"></div>

    <div class="container mx-auto px-4 relative z-10" data-animate="fade-in">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <!-- Content -->
            <div class="text-center lg:text-left" data-animate="slide-up">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-display leading-tight mb-6 tracking-tighter">
                    <span class="block text-foreground/90">{{ __('messages.hero.title_line1') }}</span>
                    <span class="block gradient-text font-accent italic">{{ __('messages.hero.title_line2') }}</span>
                    <span class="block text-foreground/90">{{ __('messages.hero.title_line3') }}</span>
                </h1>

                <p class="text-lg md:text-xl text-foreground/80 font-body max-w-2xl mx-auto lg:mx-0 mb-12 leading-relaxed tracking-tight">
                    {{ __('messages.hero.subtitle') }}
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <button class="relative overflow-hidden text-base px-8 py-5 transition-all duration-300 hover:scale-105 tracking-tight group inline-flex items-center gap-2 font-bold rounded-xl"
                            style="background: linear-gradient(135deg, rgba(74, 222, 128, 0.3), rgba(234, 179, 8, 0.3)); backdrop-filter: blur(10px); border: 2px solid rgba(74, 222, 128, 0.5); box-shadow: 0 8px 32px 0 rgba(74, 222, 128, 0.2), inset 0 0 20px rgba(234, 179, 8, 0.1);">
                        <span class="relative z-10 text-white drop-shadow-lg">{{ __('messages.hero.cta_start') }}</span>
                        <svg class="w-5 h-5 group-hover:translate-x-2 transition-transform duration-300 relative z-10 text-white drop-shadow-lg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                        <div class="absolute inset-0 bg-gradient-to-r from-green-400/20 to-yellow-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </button>
                </div>
            </div>

            <!-- Hero Visual -->
            <div class="relative hidden lg:block" data-animate="scale-in">
                <div class="hero-visual-container relative aspect-square max-w-lg mx-auto group"
                    x-data="{
                        logoRotateX: 0,
                        logoRotateY: 0,
                        logoGlow: 0,
                        handleMouseMove(e) {
                            const rect = $el.getBoundingClientRect();
                            const centerX = rect.left + rect.width / 2;
                            const centerY = rect.top + rect.height / 2;
                            const mouseX = e.clientX;
                            const mouseY = e.clientY;

                            const deltaX = (mouseX - centerX) / (rect.width / 2);
                            const deltaY = (mouseY - centerY) / (rect.height / 2);

                            // More sensitive rotation (increased from 15 to 25)
                            this.logoRotateY = deltaX * 25;
                            this.logoRotateX = -deltaY * 25;

                            // Calculate glow intensity based on distance from center
                            const distance = Math.sqrt(deltaX * deltaX + deltaY * deltaY);
                            this.logoGlow = Math.min(1, distance);
                        },
                        resetLogo() {
                            this.logoRotateX = 0;
                            this.logoRotateY = 0;
                            this.logoGlow = 0;
                        }
                    }"
                    @mousemove="handleMouseMove($event)"
                    @mouseleave="resetLogo()"
                >
                    <!-- Glowing background effect -->
                    <div class="absolute inset-0 rounded-full blur-3xl glow-pulse"></div>

                    <!-- Animated rings with hover effects -->
                    <div class="outer-ring absolute inset-16 rounded-full border-[2px] border-dashed border-primary/50 transition-all duration-700 ease-out">
                        <!-- Multiple chaotic dots on outer ring -->
                        <div class="chaos-dot chaos-dot-1"></div>
                        <div class="chaos-dot chaos-dot-2"></div>
                        <div class="chaos-dot chaos-dot-3"></div>
                        <div class="chaos-dot chaos-dot-4"></div>
                        <div class="chaos-dot chaos-dot-5"></div>
                    </div>
                    <div class="inner-ring absolute inset-24 rounded-full border-[2px] border-dotted border-accent/50 transition-all duration-700 ease-out" style="border-spacing: 8px;">
                        <!-- Multiple chaotic dots on inner ring -->
                        <div class="chaos-dot chaos-dot-6"></div>
                        <div class="chaos-dot chaos-dot-7"></div>
                        <div class="chaos-dot chaos-dot-8"></div>
                        <div class="chaos-dot chaos-dot-9"></div>
                    </div>

                    <!-- Central element -->
                    <div class="logo-container absolute inset-0 flex items-center justify-center">
                        <!-- Glow layer behind logo -->
                        <div class="absolute w-48 h-48 rounded-full blur-2xl transition-all duration-300"
                             :style="`background: radial-gradient(circle, rgba(74, 222, 128, ${logoGlow * 0.6}), transparent); opacity: ${logoGlow};`">
                        </div>
                        <img
                            src="/logo.png"
                            alt="UFarmer Logo"
                            class="w-48 h-48 object-contain cursor-pointer relative z-10"
                            :style="`
                                filter: brightness(0) saturate(100%) invert(64%) sepia(14%) saturate(1098%) hue-rotate(66deg) brightness(${92 + (logoGlow * 15)}%) contrast(87%) drop-shadow(0 0 ${logoGlow * 20}px rgba(74, 222, 128, ${logoGlow * 0.8}));
                                transform: perspective(1000px) rotateX(${logoRotateX}deg) rotateY(${logoRotateY}deg);
                                transition: transform 0.15s ease-out, filter 0.2s ease-out;
                            `"
                        />
                    </div>

                    <!-- Floating cards -->
                    <div class="absolute top-16 right-2 rounded-2xl p-5 shadow-elevated border-2 border-primary/30 backdrop-blur-xl floating-card-1" style="background: linear-gradient(145deg, rgba(74, 222, 128, 0.15), rgba(134, 239, 172, 0.1));">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-primary to-accent flex items-center justify-center shadow-lg">
                                <svg class="w-7 h-7 text-primary-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-heading text-foreground">{{ __('messages.hero.card_new_course') }}</p>
                                <p class="text-xs font-body text-muted-foreground">{{ __('messages.hero.card_new_course_desc') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="absolute bottom-8 -left-4 rounded-2xl p-5 shadow-elevated border-2 border-accent/30 backdrop-blur-xl floating-card-2" style="background: linear-gradient(145deg, rgba(134, 239, 172, 0.15), rgba(74, 222, 128, 0.1));">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-accent to-primary flex items-center justify-center shadow-lg">
                                <svg class="w-7 h-7 text-primary-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-heading text-foreground">{{ __('messages.hero.card_community') }}</p>
                                <p class="text-xs font-body text-muted-foreground">{{ __('messages.hero.card_community_desc') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wave Shape Divider -->
    <div class="absolute bottom-0 left-0 right-0 w-full overflow-hidden" style="line-height: 0; z-index: 20;">
        <svg class="relative block w-full" style="height: 120px;" viewBox="0 0 1200 120" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="wave-gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" style="stop-color:rgba(31, 46, 38, 0.5);stop-opacity:1" />
                    <stop offset="100%" style="stop-color:rgba(20, 25, 30, 0.95);stop-opacity:1" />
                </linearGradient>
            </defs>
            <path
                d="M0,0 C150,80 350,0 600,50 C850,100 1050,20 1200,60 L1200,120 L0,120 Z"
                fill="url(#wave-gradient)"
                class="wave-animation"
            />
            <path
                d="M0,20 C200,100 400,20 600,70 C800,120 1000,40 1200,80 L1200,120 L0,120 Z"
                fill="rgba(20, 25, 30, 0.85)"
                class="wave-animation-delay"
            />
            <path
                d="M0,40 C250,90 450,30 600,80 C750,130 950,60 1200,100 L1200,120 L0,120 Z"
                fill="rgba(31, 46, 38, 1)"
            />
        </svg>
    </div>
</section>
