#!/bin/bash

echo "Creating Contact Section..."
cat > resources/views/sections/contact.blade.php << 'EOF'
<section id="contact" class="section-padding contact-bg relative" data-animate>
    {{-- Animated background --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary/5 rounded-full blur-[100px] animate-pulse-glow"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-accent/5 rounded-full blur-[80px] animate-pulse-glow" style="animation-delay: 1s;"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        {{-- Header --}}
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                Let's Grow
                <span class="gradient-text block pb-2"> Together</span>
            </h2>
            <p class="text-lg md:text-xl text-muted-foreground">
                Have questions about our programs? Want to partner with us? We'd love to hear from you.
            </p>
        </div>

        <div class="grid lg:grid-cols-5 gap-8 lg:gap-12">
            {{-- Contact Info --}}
            <div class="lg:col-span-2">
                <div class="glass-card rounded-3xl p-8 lg:p-10 h-full border border-border/50">
                    <div class="flex items-center gap-4 mb-10">
                        <div class="w-14 h-14 rounded-2xl bg-muted/50 flex items-center justify-center shadow-lg">
                            <svg class="w-7 h-7 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-foreground">Get in Touch</h3>
                            <p class="text-muted-foreground">We respond within 24 hours</p>
                        </div>
                    </div>

                    <div class="space-y-6">
                        @php
                            $contactInfo = [
                                ['icon' => 'mail', 'label' => 'Email', 'value' => 'hello@farmeracademy.com', 'href' => 'mailto:hello@farmeracademy.com'],
                                ['icon' => 'phone', 'label' => 'Phone', 'value' => '+1 (555) 123-4567', 'href' => 'tel:+15551234567'],
                                ['icon' => 'map', 'label' => 'Address', 'value' => '123 Farm Road, Agricultural Valley, CA 95432', 'href' => '#'],
                                ['icon' => 'clock', 'label' => 'Hours', 'value' => 'Mon - Fri: 9AM - 6PM PST', 'href' => '#'],
                            ];
                        @endphp

                        @foreach($contactInfo as $item)
                        <a href="{{ $item['href'] }}" class="flex items-start gap-5 group/item p-5 rounded-2xl border-2 border-transparent hover:border-primary/50 hover:bg-gradient-to-br hover:from-green-500/10 hover:via-blue-500/10 hover:to-green-500/10 transition-all duration-300 hover:shadow-lg hover:shadow-green-500/20 hover:translate-x-2">
                            <div class="w-12 h-12 rounded-xl bg-muted/50 group-hover/item:bg-gradient-to-br group-hover/item:from-primary group-hover/item:to-accent flex items-center justify-center flex-shrink-0 shadow-lg transition-all duration-300">
                                @if($item['icon'] === 'mail')
                                    <svg class="w-6 h-6 text-muted-foreground group-hover/item:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                @elseif($item['icon'] === 'phone')
                                    <svg class="w-6 h-6 text-muted-foreground group-hover/item:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                @elseif($item['icon'] === 'map')
                                    <svg class="w-6 h-6 text-muted-foreground group-hover/item:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                @else
                                    <svg class="w-6 h-6 text-muted-foreground group-hover/item:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                @endif
                            </div>
                            <div>
                                <p class="text-sm text-muted-foreground font-medium mb-1">{{ $item['label'] }}</p>
                                <p class="text-foreground font-semibold text-lg">{{ $item['value'] }}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="lg:col-span-3">
                <form action="{{ route('contact.submit') }}" method="POST" class="glass-card rounded-3xl p-8 lg:p-10 border border-border/50">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-foreground mb-3">Your Name</label>
                            <input type="text" id="name" name="name" required
                                   class="w-full px-5 py-4 rounded-xl bg-muted/50 border-2 border-border focus:border-primary focus:ring-4 focus:ring-primary/30 outline-none transition-all text-foreground"
                                   placeholder="John Doe">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-foreground mb-3">Phone Number</label>
                            <input type="tel" id="phone" name="phone" required
                                   class="w-full px-5 py-4 rounded-xl bg-muted/50 border-2 border-border focus:border-primary focus:ring-4 focus:ring-primary/30 outline-none transition-all text-foreground"
                                   placeholder="+998 __ ___ __ __">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="subject" class="block text-sm font-semibold text-foreground mb-3">Subject</label>
                        <input type="text" id="subject" name="subject" required
                               class="w-full px-5 py-4 rounded-xl bg-muted/50 border-2 border-border focus:border-primary focus:ring-4 focus:ring-primary/30 outline-none transition-all text-foreground"
                               placeholder="Program inquiry">
                    </div>
                    <div class="mb-8">
                        <label for="message" class="block text-sm font-semibold text-foreground mb-3">Message</label>
                        <textarea id="message" name="message" rows="6" required
                                  class="w-full px-5 py-4 rounded-xl bg-muted/50 border-2 border-border focus:border-primary focus:ring-4 focus:ring-primary/30 outline-none transition-all text-foreground resize-none"
                                  placeholder="Tell us about your interest..."></textarea>
                    </div>
                    <button type="submit"
                            class="w-full px-8 py-5 bg-gradient-to-r from-primary to-accent text-primary-foreground font-bold text-lg rounded-xl hover:shadow-glow transition-all duration-300 hover:scale-105">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
EOF

echo "Creating Home Page..."
cat > resources/views/home.blade.php << 'EOF'
@extends('layouts.app')

@section('content')
<main class="min-h-screen bg-background overflow-x-hidden">
    @include('components.navbar')
    @include('sections.hero')
    @include('sections.about')
    @include('sections.focus')
    @include('sections.services')
    @include('sections.testimonials')
    @include('sections.contact')
    @include('components.footer')
</main>
@endsection
EOF

echo "All files created successfully!"
