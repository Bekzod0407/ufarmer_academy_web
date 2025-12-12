<section id="participants" class="section-padding participants-bg relative overflow-hidden" data-animate>
    <!-- Background decorative elements with Parallax -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-20">
        <div class="absolute rounded-full blur-2xl animate-float-slow" style="width: 200px; height: 200px; background: radial-gradient(circle, rgba(74, 222, 128, 0.06) 0%, transparent 70%); left: 10%; top: 20%;" data-parallax="0.2"></div>
        <div class="absolute rounded-full blur-2xl animate-float-slow" style="width: 200px; height: 200px; background: radial-gradient(circle, rgba(134, 239, 172, 0.04) 0%, transparent 70%); right: 10%; bottom: 20%; animation-delay: 3s;" data-parallax="0.35"></div>
        <div class="absolute rounded-full blur-2xl" style="width: 150px; height: 150px; background: radial-gradient(circle, rgba(132, 204, 22, 0.05) 0%, transparent 70%); left: 50%; top: 50%;" data-parallax="0.1"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            <!-- Left Side - Text Content -->
            <div class="space-y-6 lg:pt-2" data-animate="slide-up">
                <h2 class="text-5xl md:text-6xl lg:text-7xl font-display font-bold leading-tight transition-all duration-1000 ease-out" data-scale-in style="transform-origin: center; transform: scale(0.5); opacity: 0;">
                    <span class="gradient-text">{{ __('messages.participants.title') }}</span>
                    <br>
                    <span class="text-foreground">{{ __('messages.participants.title_highlight') }}</span>
                </h2>

                <div class="space-y-4 text-foreground/80 font-body transition-all duration-1000 ease-out" data-scale-in style="transform-origin: center; transform: scale(0.5); opacity: 0;">
                    <p class="text-lg md:text-xl leading-relaxed">
                        {{ __('messages.participants.description_1') }}
                    </p>

                    <p class="text-lg md:text-xl leading-relaxed">
                        {{ __('messages.participants.description_2') }}
                    </p>

                    <p class="text-lg md:text-xl leading-relaxed">
                        {{ __('messages.participants.description_3') }}
                    </p>
                </div>
            </div>

            <!-- Right Side - Timeline Cards -->
            <div class="relative">
                <!-- Connecting Line - positioned for dots on the left -->
                <div class="absolute left-2 top-3 bottom-3 w-0.5 bg-gradient-to-b from-primary/30 via-primary/50 to-primary/30"></div>

                <div class="space-y-8">
                    @foreach($participants as $index => $participant)
                        <div class="relative flex gap-6 group participant-card" data-card-index="{{ $index }}"
                            x-data="{
                                cardRotateX: 0,
                                cardRotateY: 0,
                                cardGlow: 0,
                                glowX: 50,
                                glowY: 50,
                                isHovering: false,
                                handleMouseMove(e) {
                                    this.isHovering = true;
                                    const rect = $el.getBoundingClientRect();
                                    const centerX = rect.left + rect.width / 2;
                                    const centerY = rect.top + rect.height / 2;
                                    const mouseX = e.clientX;
                                    const mouseY = e.clientY;

                                    const deltaX = (mouseX - centerX) / (rect.width / 2);
                                    const deltaY = (mouseY - centerY) / (rect.height / 2);

                                    this.cardRotateY = deltaX * 5;
                                    this.cardRotateX = -deltaY * 5;

                                    const distance = Math.sqrt(deltaX * deltaX + deltaY * deltaY);
                                    this.cardGlow = Math.min(1, distance);

                                    this.glowX = ((mouseX - rect.left) / rect.width) * 100;
                                    this.glowY = ((mouseY - rect.top) / rect.height) * 100;
                                },
                                resetCard() {
                                    this.isHovering = false;
                                    this.cardRotateX = 0;
                                    this.cardRotateY = 0;
                                    this.cardGlow = 0;
                                    this.glowX = 50;
                                    this.glowY = 50;
                                }
                            }"
                            @mousemove="handleMouseMove($event)"
                            @mouseleave="resetCard()"
                            @mouseenter="isHovering = true"
                        >
                            <!-- Timeline Dot - LEFT side of the line -->
                            <div class="flex-shrink-0 relative z-10 pt-6 lg:pt-7 -ml-4">
                                <div class="w-4 h-4 rounded-full border-2 border-primary bg-transparent shadow-lg"></div>
                            </div>

                            <!-- Card Content -->
                            <div class="flex-1 glass-card rounded-2xl p-6 lg:p-7 border-2 border-border/50 transition-all duration-500 shadow-[0_4px_20px_rgba(74,222,128,0.1)] relative overflow-hidden"
                                :style="`transform: perspective(1000px) rotateX(${cardRotateX}deg) rotateY(${cardRotateY}deg); transition: transform 0.3s ease-out;`">

                                <!-- Glow layer that follows mouse - small radius only -->
                                <div class="absolute inset-0 pointer-events-none transition-opacity duration-150"
                                    :style="`
                                        opacity: ${isHovering && cardGlow > 0 ? 1 : 0};
                                        background: radial-gradient(circle 100px at ${glowX}% ${glowY}%, rgba(74, 222, 128, 0.25), rgba(74, 222, 128, 0.1) 50%, transparent 70%);
                                    `">
                                </div>

                                <div class="relative z-10">
                                    <h3 class="text-xl font-heading font-semibold mb-3 text-foreground">
                                        {{ $participant->getName() }}
                                    </h3>
                                    <p class="text-foreground/75 font-body leading-relaxed text-base">
                                        {{ $participant->getBio() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
