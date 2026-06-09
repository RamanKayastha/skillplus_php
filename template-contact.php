<?php
/**
 * Template Name: Contact
 *
 * @package skillplus
 */

get_header();
?>

<main class="grow">
    <section class="relative pt-36 pb-20 lg:pt-48 lg:pb-28 overflow-hidden bg-linear-to-br from-gray-50 dark:from-zinc-950 via-indigo-50 dark:via-black to-indigo-50 dark:to-zinc-950">
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute left-[5%] top-[10%] w-[300px] h-[300px] rounded-full bg-indigo-200 dark:bg-indigo-900 opacity-70 blur-[80px] animate-pulse"></div>
            <div class="absolute right-[8%] top-[20%] w-[250px] h-[250px] rounded-full bg-blue-300 dark:bg-blue-950 opacity-60 blur-[60px]"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 mb-6 px-4 py-1.5 rounded-full border border-indigo-200 dark:border-indigo-800 bg-indigo-50/80 dark:bg-indigo-950/50 backdrop-blur-sm">
                <span class="text-sm font-semibold text-indigo-600 dark:text-indigo-400">Get in Touch</span>
            </div>
            <h1 class="text-4xl lg:text-6xl font-black mb-6 leading-[1.15]">
                <span class="bg-linear-to-r from-indigo-900 via-blue-900 to-indigo-900 dark:from-gray-50 dark:via-indigo-300 dark:to-blue-300 bg-clip-text text-transparent block">Ready to Transform</span>
                <span class="bg-linear-to-r from-indigo-600 to-blue-600 bg-clip-text text-transparent block mt-1">Your Training Workflow?</span>
            </h1>
            <p class="text-lg text-muted-foreground max-w-2xl mx-auto leading-relaxed">
                Talk to the SkillPlus team about your training management needs. We will help you find the right setup for your organization.
            </p>
        </div>
    </section>

    <section class="py-20 bg-background border-b border-border/50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-8 px-6 shadow-sm text-center transition-all duration-300 hover:border-indigo-500">
                    <div class="mx-auto rounded-full bg-indigo-100 dark:bg-indigo-950/50 p-4 text-indigo-600 dark:text-indigo-400">
                        <i data-lucide="mail" class="size-8"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold mb-3">Email Us</h2>
                        <p class="text-muted-foreground mb-5">Send your questions and requirements anytime.</p>
                        <a href="mailto:info@skillplus.dev" class="inline-flex items-center justify-center rounded-md border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground h-10 px-6 text-sm font-medium transition-all">
                            info@skillplus.dev
                        </a>
                    </div>
                </div>

                <div class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-8 px-6 shadow-sm text-center transition-all duration-300 hover:border-indigo-500">
                    <div class="mx-auto rounded-full bg-indigo-100 dark:bg-indigo-950/50 p-4 text-indigo-600 dark:text-indigo-400">
                        <i data-lucide="phone" class="size-8"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold mb-3">Call Us</h2>
                        <p class="text-muted-foreground mb-5">Speak directly with our product team.</p>
                        <a href="tel:+9779800000000" class="inline-flex items-center justify-center rounded-md border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground h-10 px-6 text-sm font-medium transition-all">
                            +977 9800000000
                        </a>
                    </div>
                </div>

                <div class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-8 px-6 shadow-sm text-center transition-all duration-300 hover:border-indigo-500">
                    <div class="mx-auto rounded-full bg-indigo-100 dark:bg-indigo-950/50 p-4 text-indigo-600 dark:text-indigo-400">
                        <i data-lucide="map-pin" class="size-8"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold mb-3">Visit Us</h2>
                        <p class="text-muted-foreground mb-5">We are based in Nepal and work with teams across industries.</p>
                        <span class="inline-flex items-center justify-center rounded-md border bg-background h-10 px-6 text-sm font-medium">
                            Kathmandu, Nepal
                        </span>
                    </div>
                </div>
            </div>

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php if (trim(get_the_content()) !== '') : ?>
                        <div class="prose prose-lg max-w-3xl mx-auto mt-16 text-foreground prose-p:text-muted-foreground prose-a:text-indigo-600">
                            <?php the_content(); ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
