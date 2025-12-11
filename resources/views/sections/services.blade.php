@php
    $services = [
        [
            'id' => 1,
            'title' => __('messages.services.list.0.title'),
            'subsections' => __('messages.services.list.0.items')
        ],
        [
            'id' => 2,
            'title' => __('messages.services.list.1.title'),
            'subsections' => __('messages.services.list.1.items')
        ],
        [
            'id' => 3,
            'title' => __('messages.services.list.2.title'),
            'subsections' => __('messages.services.list.2.items')
        ],
        [
            'id' => 4,
            'title' => __('messages.services.list.3.title'),
            'subsections' => __('messages.services.list.3.items')
        ],
        [
            'id' => 5,
            'title' => __('messages.services.list.4.title'),
            'subsections' => __('messages.services.list.4.items')
        ],
        [
            'id' => 6,
            'title' => __('messages.services.list.5.title'),
            'subsections' => __('messages.services.list.5.items')
        ],
        [
            'id' => 7,
            'title' => __('messages.services.list.6.title'),
            'subsections' => __('messages.services.list.6.items')
        ]
    ];
@endphp

<section id="services" class="section-padding unified-section-bg relative"
    x-data="{
        expandedId: 1,
        services: {{ \Illuminate\Support\Js::from($services) }}
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
                {{ __('messages.services.title') }}
                <span class="gradient-text block">{{ __('messages.services.title_services') }}</span>
            </h2>
            <p class="text-xl md:text-2xl text-muted-foreground transition-all duration-1000 ease-out" data-scale-in style="transform-origin: center; transform: scale(0.5); opacity: 0;">
                {{ __('messages.services.subtitle') }}
            </p>
        </div>

        <!-- Services List -->
        <div class="max-w-4xl mx-auto space-y-3">
            <template x-for="(service, index) in services" :key="service.id">
                <div class="relative service-card" style="opacity: 0; transform: translateY(50px); transition: opacity 1s cubic-bezier(0.16, 1, 0.3, 1), transform 1s cubic-bezier(0.16, 1, 0.3, 1);">
                    <!-- Service Item -->
                    <div @click="expandedId = expandedId === service.id ? null : service.id" class="group cursor-pointer">
                        <div class="flex items-start gap-4 py-4">
                            <!-- Number -->
                            <div class="flex-shrink-0">
                                <span
                                    :class="expandedId === service.id ? 'text-primary' : 'text-muted-foreground/60 group-hover:text-primary'"
                                    class="text-2xl lg:text-3xl font-bold transition-colors duration-300"
                                    x-text="service.id.toString().padStart(2, '0')"
                                ></span>
                            </div>

                            <!-- Content -->
                            <div class="flex-1">
                                <div class="flex items-center justify-between gap-4">
                                    <h3
                                        :class="expandedId === service.id ? 'text-primary' : 'text-foreground group-hover:text-primary'"
                                        class="text-xl lg:text-2xl font-bold transition-colors duration-300"
                                        x-text="service.title"
                                    ></h3>

                                    <!-- Chevron -->
                                    <svg
                                        :class="{ 'rotate-180': expandedId === service.id, 'text-primary': expandedId === service.id, 'text-muted-foreground': expandedId !== service.id }"
                                        class="w-5 h-5 transition-all duration-300 flex-shrink-0"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>

                                <!-- Expandable Content -->
                                <div
                                    x-show="expandedId === service.id"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 max-h-0"
                                    x-transition:enter-end="opacity-100 max-h-screen"
                                    x-transition:leave="transition ease-in duration-300"
                                    x-transition:leave-start="opacity-100 max-h-screen"
                                    x-transition:leave-end="opacity-0 max-h-0"
                                    class="overflow-hidden"
                                    style="display: none;"
                                >
                                    <div class="pt-4 mt-2">
                                        <ul class="space-y-3">
                                            <template x-for="(subsection, subIndex) in service.subsections" :key="subIndex">
                                                <li class="flex items-start gap-3 group/item">
                                                    <div class="flex-shrink-0 mt-1.5">
                                                        <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                                                    </div>
                                                    <span class="text-muted-foreground text-base lg:text-lg leading-relaxed group-hover/item:text-foreground transition-colors duration-200" x-text="subsection"></span>
                                                </li>
                                            </template>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Divider Line -->
                    <div
                        x-show="index !== services.length - 1"
                        class="h-px bg-gradient-to-r from-transparent via-border/30 to-transparent"
                    ></div>
                </div>
            </template>
        </div>
    </div>
</section>
