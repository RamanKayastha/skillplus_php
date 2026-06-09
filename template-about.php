<?php
/**
 * Template Name: About Us
 *
 * @package skillplus
 */

get_header();
?>

<main class="flex-grow">
    <!-- About Hero Section -->
    <section class="relative pt-36 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-gradient-to-br from-gray-50 dark:from-zinc-950 via-indigo-50 dark:via-black to-indigo-50 dark:to-zinc-950">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute left-[5%] top-[10%] w-[300px] h-[300px] rounded-full bg-indigo-200 dark:bg-indigo-900 opacity-70 blur-[80px] animate-pulse"></div>
            <div class="absolute right-[8%] top-[20%] w-[250px] h-[250px] rounded-full bg-blue-300 dark:bg-blue-950 opacity-60 blur-[60px]"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 mb-6 px-4 py-1.5 rounded-full border border-indigo-200 dark:border-indigo-800 bg-indigo-50/80 dark:bg-indigo-950/50 backdrop-blur-sm">
                <span class="text-sm font-semibold text-indigo-600 dark:text-indigo-400">Our Story</span>
            </div>
            <h1 class="text-4xl lg:text-6xl font-black mb-6 leading-[1.15]">
                <span class="bg-linear-to-r from-indigo-900 via-blue-900 to-indigo-900 dark:from-gray-50 dark:via-indigo-300 dark:to-blue-300 bg-clip-text text-transparent block">Empowering Growth through</span>
                <span class="bg-linear-to-r from-indigo-600 to-blue-600 bg-clip-text text-transparent block mt-1">Smart Management</span>
            </h1>
            <p class="text-lg text-muted-foreground max-w-2xl mx-auto mb-10 leading-relaxed">
                At SkillPlus, we are dedicated to transforming how organizations manage training and skill development with cutting-edge technology and human-centric design.
            </p>
        </div>
    </section>

    <!-- Main About Content (Inspired by front page about section) -->
    <section class="py-24 bg-background border-b border-border/50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center max-w-6xl mx-auto">
                <div>
                    <div class="py-1 text-indigo-600 font-semibold border-b-2 border-indigo-600 mb-6 inline-block">
                        Who We Are
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-6">
                        Innovative Solutions for Modern Training Needs
                    </h2>
                    <div class="space-y-6 text-lg text-muted-foreground">
                        <p>
                            SkillPlus started with a simple vision: to bridge the gap between complex organizational needs and user-friendly software solutions. We believe that every organization, regardless of its size, deserves access to high-quality training management tools.
                        </p>
                        <p>
                            Our team of experts combines deep industry knowledge with technical excellence to deliver a platform that is not just a software, but a catalyst for organizational excellence.
                        </p>
                    </div>
                    <div class="mt-10 flex flex-wrap gap-4">
                        <div class="flex items-center gap-3 px-5 py-3 rounded-xl bg-indigo-50 dark:bg-indigo-950/40 border border-indigo-100 dark:border-indigo-800/50">
                            <i data-lucide="check-circle" class="w-5 h-5 text-indigo-600 dark:text-indigo-400"></i>
                            <span class="font-medium text-foreground">Established in Nepal</span>
                        </div>
                        <div class="flex items-center gap-3 px-5 py-3 rounded-xl bg-blue-50 dark:bg-blue-950/40 border border-blue-100 dark:border-blue-800/50">
                            <i data-lucide="users" class="w-5 h-5 text-blue-600 dark:text-blue-400"></i>
                            <span class="font-medium text-foreground">100+ Happy Clients</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl border-8 border-white dark:border-zinc-900 relative z-10">
                         <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=800" alt="Team Work" class="w-full h-full object-cover">
                    </div>
                    <!-- Decorative Elements -->
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-indigo-500/10 rounded-full blur-3xl animate-pulse"></div>
                    <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-blue-500/10 rounded-full blur-3xl"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section (New Section) -->
    <section class="py-24 bg-zinc-50 dark:bg-zinc-950/50">
        <div class="container mx-auto px-6 text-center">
            <div class="mb-16">
                <div class="py-1 text-indigo-600 font-semibold border-b-2 border-indigo-600 mb-4 inline-block">
                    Our Core Values
                </div>
                <h2 class="text-3xl md:text-5xl font-bold text-foreground">The Principles We Live By</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Value Card 1 -->
                <div class="group p-8 rounded-2xl bg-background border border-border shadow-sm hover:shadow-xl hover:border-indigo-500 transition-all duration-500">
                    <div class="size-14 rounded-xl bg-indigo-100 dark:bg-indigo-950/50 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="zap" class="w-7 h-7 text-indigo-600 dark:text-indigo-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Innovation First</h3>
                    <p class="text-muted-foreground">We constantly push the boundaries of what's possible in training management technology.</p>
                </div>

                <!-- Value Card 2 -->
                <div class="group p-8 rounded-2xl bg-background border border-border shadow-sm hover:shadow-xl hover:border-indigo-500 transition-all duration-500">
                    <div class="size-14 rounded-xl bg-blue-100 dark:bg-blue-950/50 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="shield-check" class="w-7 h-7 text-blue-600 dark:text-blue-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Trust & Reliability</h3>
                    <p class="text-muted-foreground">Our platform is built on a foundation of security and unwavering performance for your data.</p>
                </div>

                <!-- Value Card 3 -->
                <div class="group p-8 rounded-2xl bg-background border border-border shadow-sm hover:shadow-xl hover:border-indigo-500 transition-all duration-500">
                    <div class="size-14 rounded-xl bg-emerald-100 dark:bg-emerald-950/50 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="heart" class="w-7 h-7 text-emerald-600 dark:text-emerald-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Customer Success</h3>
                    <p class="text-muted-foreground">Your growth is our primary metric. We provide support that goes beyond just troubleshooting.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-24 bg-background overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Mission -->
                <div class="relative p-10 rounded-3xl bg-linear-to-br from-indigo-600 to-indigo-800 text-white overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16 blur-2xl group-hover:blur-3xl transition-all"></div>
                    <i data-lucide="target" class="w-12 h-12 mb-6 opacity-80"></i>
                    <h2 class="text-3xl font-bold mb-6">Our Mission</h2>
                    <p class="text-indigo-50 text-lg leading-relaxed">
                        To empower every organization in Nepal with world-class training management tools that make learning accessible, trackable, and impactful for their entire workforce.
                    </p>
                </div>

                <!-- Vision -->
                <div class="relative p-10 rounded-3xl bg-linear-to-br from-blue-600 to-blue-800 text-white overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16 blur-2xl group-hover:blur-3xl transition-all"></div>
                    <i data-lucide="eye" class="w-12 h-12 mb-6 opacity-80"></i>
                    <h2 class="text-3xl font-bold mb-6">Our Vision</h2>
                    <p class="text-blue-50 text-lg leading-relaxed">
                        To be the leading digital ecosystem for skill development and organizational growth, setting new standards for HR tech innovation across the region.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto rounded-3xl bg-zinc-900 dark:bg-zinc-800 p-12 text-center relative overflow-hidden">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_120%,rgba(79,70,229,0.3),transparent)]"></div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 relative z-10">Ready to transform your training workflow?</h2>
                <p class="text-zinc-400 text-lg mb-10 relative z-10">Join hundreds of organizations already using SkillPlus to manage their teams.</p>
                <div class="flex flex-wrap justify-center gap-4 relative z-10">
                    <a href="<?php echo home_url('/#contact'); ?>" class="px-8 py-3 rounded-full bg-indigo-600 text-white font-bold hover:bg-indigo-700 transition-all shadow-lg shadow-indigo-500/25">Get Started Now</a>
                    <a href="<?php echo home_url('/#features'); ?>" class="px-8 py-3 rounded-full bg-transparent text-white font-bold border border-white/20 hover:bg-white/5 transition-all">View All Features</a>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Initialize Lucide icons -->
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js" defer></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
});
</script>

<?php get_footer(); ?>
