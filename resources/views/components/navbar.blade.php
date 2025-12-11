<nav
    x-data="{
        isOpen: false,
        languageOpen: false,
        activeSection: 'home',
        isScrolled: false,
        selectedLanguage: { code: 'EN', name: 'English', flag: '🇬🇧' },
        languages: [
            { code: 'EN', name: 'English', flag: '🇬🇧' },
            { code: 'UZ', name: 'O\'zbek', flag: '🇺🇿' },
            { code: 'TR', name: 'Türkçe', flag: '🇹🇷' }
        ],
        init() {
            this.selectedLanguage = this.languages.find(lang => lang.code === '{{ strtoupper(app()->getLocale()) }}') || this.languages[0];
            this.updateActiveSection();
            window.addEventListener('scroll', () => {
                this.isScrolled = window.scrollY > 50;
                this.updateActiveSection();
            });
        },
        updateActiveSection() {
            const sections = ['home', 'about', 'focus', 'services', 'testimonials', 'contact'];
            const scrollPosition = window.scrollY + 100;

            for (const section of sections) {
                const element = document.getElementById(section);
                if (element) {
                    const offsetTop = element.offsetTop;
                    const offsetHeight = element.offsetHeight;
                    if (scrollPosition >= offsetTop && scrollPosition < offsetTop + offsetHeight) {
                        this.activeSection = section;
                        break;
                    }
                }
            }
        },
        smoothScrollTo(e, targetId) {
            e.preventDefault();
            const element = document.getElementById(targetId);
            if (element) {
                const navbarHeight = 80;
                const elementPosition = element.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - navbarHeight;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
            this.isOpen = false;
        }
    }"
    :class="isScrolled ? 'scrolled' : ''"
    class="fixed top-0 left-0 right-0 z-50 glass-nav"
    data-animate="slide-down"
>
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a
                href="#home"
                @click="smoothScrollTo($event, 'home')"
                class="flex items-center gap-2 group"
            >
                <img
                    src="/logo.png"
                    alt="UFarmer Academy Logo"
                    class="w-12 h-12 object-contain"
                    style="filter: brightness(0) saturate(100%) invert(64%) sepia(14%) saturate(1098%) hue-rotate(66deg) brightness(92%) contrast(87%);"
                />
                <span class="text-xl font-display text-white">
                    <span class="text-primary">UFarmer</span> Academy
                </span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center gap-1">
                <a
                    href="#home"
                    @click="smoothScrollTo($event, 'home')"
                    :class="activeSection === 'home' ? 'text-primary' : 'text-muted-foreground hover:text-foreground'"
                    class="relative px-4 py-2 text-sm font-heading transition-all group"
                >
                    <span class="relative z-10">{{ __('messages.nav.home') }}</span>
                    <span
                        :class="activeSection === 'home' ? 'w-full' : 'w-0 group-hover:w-full'"
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 bg-gradient-to-r from-primary via-yellow-400 to-primary transition-all duration-300 rounded-full"
                    ></span>
                </a>
                <a
                    href="#about"
                    @click="smoothScrollTo($event, 'about')"
                    :class="activeSection === 'about' ? 'text-primary' : 'text-muted-foreground hover:text-foreground'"
                    class="relative px-4 py-2 text-sm font-heading transition-all group"
                >
                    <span class="relative z-10">{{ __('messages.nav.about') }}</span>
                    <span
                        :class="activeSection === 'about' ? 'w-full' : 'w-0 group-hover:w-full'"
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 bg-gradient-to-r from-primary via-yellow-400 to-primary transition-all duration-300 rounded-full"
                    ></span>
                </a>
                <a
                    href="#focus"
                    @click="smoothScrollTo($event, 'focus')"
                    :class="activeSection === 'focus' ? 'text-primary' : 'text-muted-foreground hover:text-foreground'"
                    class="relative px-4 py-2 text-sm font-heading transition-all group"
                >
                    <span class="relative z-10">{{ __('messages.nav.focus_areas') }}</span>
                    <span
                        :class="activeSection === 'focus' ? 'w-full' : 'w-0 group-hover:w-full'"
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 bg-gradient-to-r from-primary via-yellow-400 to-primary transition-all duration-300 rounded-full"
                    ></span>
                </a>
                <a
                    href="#services"
                    @click="smoothScrollTo($event, 'services')"
                    :class="activeSection === 'services' ? 'text-primary' : 'text-muted-foreground hover:text-foreground'"
                    class="relative px-4 py-2 text-sm font-heading transition-all group"
                >
                    <span class="relative z-10">{{ __('messages.nav.services') }}</span>
                    <span
                        :class="activeSection === 'services' ? 'w-full' : 'w-0 group-hover:w-full'"
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 bg-gradient-to-r from-primary via-yellow-400 to-primary transition-all duration-300 rounded-full"
                    ></span>
                </a>
                <a
                    href="#testimonials"
                    @click="smoothScrollTo($event, 'testimonials')"
                    :class="activeSection === 'testimonials' ? 'text-primary' : 'text-muted-foreground hover:text-foreground'"
                    class="relative px-4 py-2 text-sm font-heading transition-all group"
                >
                    <span class="relative z-10">{{ __('messages.nav.testimonials') }}</span>
                    <span
                        :class="activeSection === 'testimonials' ? 'w-full' : 'w-0 group-hover:w-full'"
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 bg-gradient-to-r from-primary via-yellow-400 to-primary transition-all duration-300 rounded-full"
                    ></span>
                </a>
                <a
                    href="#contact"
                    @click="smoothScrollTo($event, 'contact')"
                    :class="activeSection === 'contact' ? 'text-primary' : 'text-muted-foreground hover:text-foreground'"
                    class="relative px-4 py-2 text-sm font-heading transition-all group"
                >
                    <span class="relative z-10">{{ __('messages.nav.contact') }}</span>
                    <span
                        :class="activeSection === 'contact' ? 'w-full' : 'w-0 group-hover:w-full'"
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 bg-gradient-to-r from-primary via-yellow-400 to-primary transition-all duration-300 rounded-full"
                    ></span>
                </a>
            </div>

            <!-- Right section with Language and CTA -->
            <div class="flex items-center gap-3">
                <!-- Language Selector -->
                <div class="relative language-selector" @click.away="languageOpen = false">
                    <button
                        @click="languageOpen = !languageOpen"
                        class="flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-muted/20 transition-colors group border border-border/50 hover:border-primary/50"
                    >
                        <span class="text-lg" x-text="selectedLanguage.flag"></span>
                        <span class="text-sm font-medium text-muted-foreground group-hover:text-foreground transition-colors hidden sm:block" x-text="selectedLanguage.code"></span>
                        <svg class="w-4 h-4 text-muted-foreground group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                        </svg>
                    </button>

                    <!-- Language Dropdown -->
                    <div
                        x-show="languageOpen"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95 -translate-y-2"
                        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                        x-transition:leave-end="opacity-0 scale-95 -translate-y-2"
                        class="absolute right-0 mt-2 w-48 rounded-xl glass-card border-2 border-border/50 shadow-elevated overflow-hidden z-50"
                        style="display: none;"
                    >
                        <template x-for="lang in languages" :key="lang.code">
                            <button
                                @click="if (lang.code === 'EN') { window.location.href = '{{ route('locale.set', 'en') }}'; } else if (lang.code === 'UZ') { window.location.href = '{{ route('locale.set', 'uz') }}'; } else if (lang.code === 'TR') { window.location.href = '{{ route('locale.set', 'tr') }}'; } selectedLanguage = lang; languageOpen = false"
                                :class="selectedLanguage.code === lang.code ? 'bg-primary/20 text-foreground' : 'hover:bg-muted/20 text-muted-foreground hover:text-foreground'"
                                class="w-full flex items-center gap-3 px-4 py-3 transition-all"
                            >
                                <span class="text-2xl" x-text="lang.flag"></span>
                                <div class="flex-1 text-left">
                                    <div class="text-sm font-medium" x-text="lang.name"></div>
                                    <div class="text-xs opacity-60" x-text="lang.code"></div>
                                </div>
                                <div
                                    x-show="selectedLanguage.code === lang.code"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 scale-0"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    class="w-2 h-2 rounded-full bg-primary"
                                ></div>
                            </button>
                        </template>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <button
                    @click="isOpen = !isOpen"
                    class="lg:hidden p-2 rounded-lg hover:bg-muted transition-colors"
                >
                    <svg x-show="!isOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="isOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div
            x-show="isOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 max-h-0"
            x-transition:enter-end="opacity-100 max-h-screen"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 max-h-screen"
            x-transition:leave-end="opacity-0 max-h-0"
            class="lg:hidden overflow-hidden"
            style="display: none;"
        >
            <div class="py-4 space-y-1">
                <a
                    href="#home"
                    @click="smoothScrollTo($event, 'home')"
                    :class="activeSection === 'home' ? 'text-primary pl-6' : 'text-foreground hover:pl-6'"
                    class="relative block px-4 py-3 font-semibold transition-all group"
                >
                    <span class="relative z-10">Home</span>
                    <span
                        :class="activeSection === 'home' ? 'w-1 h-3/4' : 'w-0 h-0 group-hover:w-1 group-hover:h-3/4'"
                        class="absolute left-0 top-1/2 -translate-y-1/2 bg-gradient-to-b from-primary via-yellow-400 to-primary transition-all duration-300 rounded-r-full"
                    ></span>
                </a>
                <a
                    href="#about"
                    @click="smoothScrollTo($event, 'about')"
                    :class="activeSection === 'about' ? 'text-primary pl-6' : 'text-foreground hover:pl-6'"
                    class="relative block px-4 py-3 font-semibold transition-all group"
                >
                    <span class="relative z-10">{{ __('messages.nav.about') }}</span>
                    <span
                        :class="activeSection === 'about' ? 'w-1 h-3/4' : 'w-0 h-0 group-hover:w-1 group-hover:h-3/4'"
                        class="absolute left-0 top-1/2 -translate-y-1/2 bg-gradient-to-b from-primary via-yellow-400 to-primary transition-all duration-300 rounded-r-full"
                    ></span>
                </a>
                <a
                    href="#focus"
                    @click="smoothScrollTo($event, 'focus')"
                    :class="activeSection === 'focus' ? 'text-primary pl-6' : 'text-foreground hover:pl-6'"
                    class="relative block px-4 py-3 font-semibold transition-all group"
                >
                    <span class="relative z-10">{{ __('messages.nav.focus_areas') }}</span>
                    <span
                        :class="activeSection === 'focus' ? 'w-1 h-3/4' : 'w-0 h-0 group-hover:w-1 group-hover:h-3/4'"
                        class="absolute left-0 top-1/2 -translate-y-1/2 bg-gradient-to-b from-primary via-yellow-400 to-primary transition-all duration-300 rounded-r-full"
                    ></span>
                </a>
                <a
                    href="#services"
                    @click="smoothScrollTo($event, 'services')"
                    :class="activeSection === 'services' ? 'text-primary pl-6' : 'text-foreground hover:pl-6'"
                    class="relative block px-4 py-3 font-semibold transition-all group"
                >
                    <span class="relative z-10">{{ __('messages.nav.services') }}</span>
                    <span
                        :class="activeSection === 'services' ? 'w-1 h-3/4' : 'w-0 h-0 group-hover:w-1 group-hover:h-3/4'"
                        class="absolute left-0 top-1/2 -translate-y-1/2 bg-gradient-to-b from-primary via-yellow-400 to-primary transition-all duration-300 rounded-r-full"
                    ></span>
                </a>
                <a
                    href="#testimonials"
                    @click="smoothScrollTo($event, 'testimonials')"
                    :class="activeSection === 'testimonials' ? 'text-primary pl-6' : 'text-foreground hover:pl-6'"
                    class="relative block px-4 py-3 font-semibold transition-all group"
                >
                    <span class="relative z-10">{{ __('messages.nav.testimonials') }}</span>
                    <span
                        :class="activeSection === 'testimonials' ? 'w-1 h-3/4' : 'w-0 h-0 group-hover:w-1 group-hover:h-3/4'"
                        class="absolute left-0 top-1/2 -translate-y-1/2 bg-gradient-to-b from-primary via-yellow-400 to-primary transition-all duration-300 rounded-r-full"
                    ></span>
                </a>
                <a
                    href="#contact"
                    @click="smoothScrollTo($event, 'contact')"
                    :class="activeSection === 'contact' ? 'text-primary pl-6' : 'text-foreground hover:pl-6'"
                    class="relative block px-4 py-3 font-semibold transition-all group"
                >
                    <span class="relative z-10">{{ __('messages.nav.contact') }}</span>
                    <span
                        :class="activeSection === 'contact' ? 'w-1 h-3/4' : 'w-0 h-0 group-hover:w-1 group-hover:h-3/4'"
                        class="absolute left-0 top-1/2 -translate-y-1/2 bg-gradient-to-b from-primary via-yellow-400 to-primary transition-all duration-300 rounded-r-full"
                    ></span>
                </a>
            </div>
        </div>
    </div>
</nav>
