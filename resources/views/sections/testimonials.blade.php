<section id="testimonials" class="section-padding testimonials-bg relative" data-animate>
    <div class="container mx-auto px-4 relative z-10">
        {{-- Header --}}
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6" data-animate="slide-up">
                A Message from
                <span class="gradient-text block"> Our Director</span>
            </h2>
            <p class="text-xl md:text-2xl text-muted-foreground" data-animate="slide-up">
                Our vision for the future of agricultural education
            </p>
        </div>

        {{-- Testimonials Carousel --}}
        <div x-data="{
            currentIndex: 0,
            isTransitioning: false,
            testimonials: [
                {
                    name: 'Fazliddin Ibragimov',
                    role: 'Director',
                    location: 'UFARMER Academy',
                    image: 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=200&q=80',
                    content: `Agriculture is not merely about cultivating the land; it is also a science and a way of life that shapes the future. As the UFARMER Training Center, we set out on this journey to nurture individuals who will carry the powerful potential of agriculture into the future.\n\nToday's agriculture must be supported not only by experience but also by technology and knowledge. That's why the greatest need of young agricultural engineers and farmers is a practical, innovative, and sustainable approach to education. UFARMER was established precisely to meet this need.\n\nEvery training we offer at our center aims to solve real problems encountered in the field, transform theoretical knowledge into practice, and add value to our participants. Our goal is not only to transfer knowledge but also to raise entrepreneurial, visionary, and productive agricultural professionals.\n\nFor a productive future in agriculture, we invite everyone who believes in education and collective production to join the UFARMER family.\n\nWith the hope of greening the future together through the power of the land.`
                },
                {
                    name: 'Prof. Dr. Süleyman Kodal',
                    role: 'Academic Manager',
                    location: 'UFARMER Academy',
                    image: 'https://images.unsplash.com/photo-1568602471122-7832951cc4c5?w=200&q=80',
                    content: `With the ever-changing global order and climate conditions, agriculture has become one of the most dynamic fields requiring continuous adaptation, knowledge, and technological innovation. Coping with this transformation is only possible through high-quality education and hands-on learning.\n\nAt the UFARMER Training Center, we prioritize both academic discipline and field experience in designing our educational programs. Our curricula are developed based on up-to-date scientific data, next-generation agricultural technologies, and methods actively used in the field.\n\nOur goal is not only to equip our participants with knowledge, but also to ensure they become individuals capable of applying that knowledge directly, analyzing situations, and producing effective solutions. In each training module, we focus on preparing our participants to become the agricultural professionals of tomorrow.\n\nAs the UFARMER family, we invite all dedicated engineers and producers to be part of this transformation. Let's learn, produce, and grow together.`
                }
            ],
            changeSlide(newIndex) {
                if (this.isTransitioning || newIndex === this.currentIndex) return;
                this.isTransitioning = true;
                this.currentIndex = newIndex;
                setTimeout(() => { this.isTransitioning = false; }, 400);
            },
            prev() {
                const newIndex = (this.currentIndex - 1 + this.testimonials.length) % this.testimonials.length;
                this.changeSlide(newIndex);
            },
            next() {
                const newIndex = (this.currentIndex + 1) % this.testimonials.length;
                this.changeSlide(newIndex);
            }
        }" class="max-w-4xl mx-auto">
            {{-- Featured Testimonial --}}
            <div class="glass-card rounded-4xl p-8 lg:p-14 relative overflow-hidden border border-border/50 hover:border-primary/30 transition-all duration-500 group" data-animate="slide-up">
                {{-- Green and Blue gradient background on hover --}}
                <div class="absolute inset-0 bg-gradient-to-br from-green-500/8 via-blue-500/8 to-green-500/8 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                {{-- Background decorations --}}
                <div class="absolute top-0 right-0 w-80 h-80 bg-gradient-to-bl from-primary/10 to-transparent rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-gradient-to-tr from-accent/10 to-transparent rounded-full blur-3xl"></div>
                <svg class="absolute top-8 right-8 w-20 h-20 text-primary/10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>

                <div class="relative">
                    {{-- Content Container --}}
                    <div class="relative grid">
                        <template x-for="(testimonial, index) in testimonials" :key="index">
                            <div x-show="currentIndex === index"
                                 x-transition:enter="transition-opacity ease-out duration-400"
                                 x-transition:enter-start="opacity-0"
                                 x-transition:enter-end="opacity-100"
                                 x-transition:leave="transition-opacity ease-in duration-200"
                                 x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0"
                                 class="text-center col-start-1 row-start-1">
                                {{-- Avatar --}}
                                <div class="w-24 h-24 rounded-full mx-auto mb-8 ring-4 ring-primary/30 overflow-hidden shadow-glow hover:scale-110 transition-transform duration-300">
                                    <img :src="testimonial.image" :alt="testimonial.name" class="w-full h-full object-cover">
                                </div>

                                {{-- Author Info --}}
                                <div class="mb-8">
                                    <p class="text-xl font-bold text-foreground" x-text="testimonial.name"></p>
                                    <p class="text-muted-foreground text-lg">
                                        <span x-text="testimonial.role"></span> · <span x-text="testimonial.location"></span>
                                    </p>
                                </div>

                                {{-- Quote --}}
                                <blockquote class="text-lg lg:text-xl text-foreground leading-relaxed max-w-3xl mx-auto text-left">
                                    <template x-for="(paragraph, idx) in testimonial.content.split('\n\n')" :key="idx">
                                        <p class="mb-6 last:mb-0" x-text="paragraph"></p>
                                    </template>
                                </blockquote>
                            </div>
                        </template>
                    </div>

                    {{-- Navigation --}}
                    <div class="flex justify-center items-center gap-6 mt-10">
                        <button @click="prev()"
                                :disabled="isTransitioning"
                                :class="isTransitioning ? 'opacity-50 cursor-not-allowed' : 'hover:bg-primary/20 hover:scale-110'"
                                class="w-14 h-14 rounded-full bg-muted flex items-center justify-center transition-all duration-300 border border-border hover:border-primary/50 active:scale-95">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <div class="flex items-center gap-3">
                            <template x-for="(testimonial, index) in testimonials" :key="index">
                                <button @click="changeSlide(index)"
                                        :disabled="isTransitioning"
                                        :class="index === currentIndex ? 'bg-primary w-10' : 'bg-muted-foreground/30 w-3 hover:bg-muted-foreground/50'"
                                        class="h-3 rounded-full transition-all duration-300 hover:scale-110"></button>
                            </template>
                        </div>
                        <button @click="next()"
                                :disabled="isTransitioning"
                                :class="isTransitioning ? 'opacity-50 cursor-not-allowed' : 'hover:bg-primary/20 hover:scale-110'"
                                class="w-14 h-14 rounded-full bg-muted flex items-center justify-center transition-all duration-300 border border-border hover:border-primary/50 active:scale-95">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Mini testimonials --}}
            <div class="grid md:grid-cols-2 gap-6 mt-10 max-w-2xl mx-auto">
                <template x-for="(testimonial, index) in testimonials" :key="index">
                    <button @click="changeSlide(index)"
                            :disabled="isTransitioning"
                            :class="[
                                index === currentIndex ? 'border-primary shadow-glow bg-primary/5' : 'border-border/50 hover:border-primary/30',
                                isTransitioning ? 'opacity-50 cursor-not-allowed' : 'hover:-translate-y-1 hover:translate-x-1'
                            ]"
                            class="glass-card rounded-2xl p-5 text-left transition-all duration-500 border relative overflow-hidden group">
                        {{-- Green and Blue gradient background on hover --}}
                        <div class="absolute inset-0 bg-gradient-to-br from-green-500/10 via-blue-500/10 to-green-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="flex items-center gap-4 relative z-10">
                            <img :src="testimonial.image" :alt="testimonial.name"
                                 :class="index === currentIndex ? 'ring-primary' : 'ring-border'"
                                 class="w-12 h-12 rounded-full object-cover ring-2 transition-all duration-300">
                            <div>
                                <p class="font-bold text-foreground" x-text="testimonial.name"></p>
                                <p class="text-sm text-muted-foreground" x-text="testimonial.location"></p>
                            </div>
                        </div>
                    </button>
                </template>
            </div>
        </div>
    </div>
</section>
