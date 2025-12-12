<section id="contact" class="section-padding contact-bg relative" data-animate>
    {{-- Animated background --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary/5 rounded-full blur-[100px] animate-pulse-glow"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-accent/5 rounded-full blur-[80px] animate-pulse-glow" style="animation-delay: 1s;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        {{-- Header --}}
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6" data-animate="slide-up">
                {{ __('messages.contact.title') }}
                <span class="gradient-text block pb-2">{{ __('messages.contact.title_together') }}</span>
            </h2>
            <p class="text-xl md:text-2xl text-muted-foreground" data-animate="slide-up">
                {{ __('messages.contact.subtitle') }}
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf

                {{-- Message Field --}}
                <div data-animate="slide-up">
                    <textarea id="message" name="message" rows="5" required
                              class="w-full px-5 py-4 rounded-xl bg-muted/50 border-2 border-border focus:border-primary focus:ring-4 focus:ring-primary/30 outline-none transition-all text-foreground resize-none placeholder:text-muted-foreground"
                              placeholder="{{ __('messages.contact.form.message_placeholder') }}"></textarea>
                </div>

                {{-- Name, Phone and Submit Button in one line --}}
                <div class="grid md:grid-cols-3 gap-4" data-animate="slide-up">
                    <div>
                        <input type="text" id="name" name="name" required
                               class="w-full px-5 py-4 rounded-xl bg-muted/50 border-2 border-border focus:border-primary focus:ring-4 focus:ring-primary/30 outline-none transition-all text-foreground placeholder:text-muted-foreground"
                               placeholder="What's your name?">
                    </div>
                    <div>
                        <input type="tel"
                               id="phone"
                               name="phone"
                               required
                               class="w-full px-5 py-4 rounded-xl bg-muted/50 border-2 border-border focus:border-primary focus:ring-4 focus:ring-primary/30 outline-none transition-all text-foreground placeholder:text-muted-foreground"
                               placeholder="+998 00 000 00 00">
                    </div>
                    <div>
                        <button type="submit"
                                class="w-full px-6 py-4 rounded-xl bg-gradient-to-r from-primary to-accent hover:from-primary/90 hover:to-accent/90 text-white font-bold text-lg transition-all duration-300 hover:scale-[1.02] hover:shadow-lg hover:shadow-primary/30">
                            {{ __('messages.contact.form.submit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
