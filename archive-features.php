<?php
/**
 * Archive Template: Features
 *
 * @package skillplus
 */
get_header();

$feature_categories = get_terms(array(
    'taxonomy'   => 'feature_category',
    'hide_empty' => true,
));
$current_cat = get_query_var('feature_category');
?>

<!-- Load Lucide once for the whole page -->
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js" defer></script>

<!-- Hero Banner -->
<section
    class="relative min-h-[420px] lg:min-h-[520px] bg-gradient-to-br from-gray-50 dark:from-zinc-950 via-indigo-50 dark:via-black to-indigo-50 dark:to-zinc-950 pt-36 lg:pt-48 pb-24 lg:pb-32 overflow-hidden">

    <!-- Decorative blobs -->
    <div class="absolute inset-0 pointer-events-none">
        <div
            class="absolute left-[5%] top-[10%] w-[300px] h-[300px] rounded-full bg-indigo-200 dark:bg-indigo-900 opacity-70 blur-[80px] animate-pulse">
        </div>
        <div
            class="absolute right-[8%] top-[20%] w-[250px] h-[250px] rounded-full bg-blue-300 dark:bg-blue-950 opacity-60 blur-[60px]">
        </div>
        <div
            class="absolute left-[40%] bottom-[5%] w-[200px] h-[200px] rounded-full bg-indigo-300 dark:bg-indigo-800 opacity-50 blur-[50px]">
        </div>
    </div>

    <!-- Grid pattern -->
    <div class="absolute inset-0 opacity-[0.35]"
        style="background-image: url(&quot;data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23e5e7eb' fill-opacity='0.4'%3E%3Ccircle cx='7' cy='7' r='1'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;);">
    </div>

    <div class="container mx-auto px-6 relative z-10 text-center">
        <!-- Pill badge -->
        <div class="inline-flex items-center gap-2 mb-6 px-4 py-1.5 rounded-full border border-indigo-200 dark:border-indigo-800 bg-indigo-50/80 dark:bg-indigo-950/50 backdrop-blur-sm">
            <span class="relative flex h-2 w-2">
                <span
                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-600"></span>
            </span>
            <span class="text-sm font-semibold text-indigo-600 dark:text-indigo-400">Platform Capabilities</span>
        </div>

        <!-- Heading -->
        <h1 class="text-4xl lg:text-6xl font-black mb-6 leading-[1.15]">
            <span
                class="bg-linear-to-r from-indigo-900 via-blue-900 to-indigo-900 dark:from-gray-50 dark:via-blue-300 dark:to-indigo-300 bg-clip-text text-transparent block">Everything
                You Need to</span>
            <span
                class="bg-linear-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent block mt-1">Manage
                Training at Scale</span>
        </h1>

        <p class="text-base md:text-lg text-muted-foreground max-w-xl mx-auto mb-10 leading-relaxed">
            Explore the full suite of powerful tools SkillPlus offers — built to streamline every step of your
            training workflow.
        </p>

        <!-- Category filter pills -->
        <?php if (!empty($feature_categories) && !is_wp_error($feature_categories)): ?>
        <div class="flex flex-wrap items-center justify-center gap-2.5">
            <a href="<?php echo get_post_type_archive_link('features'); ?>"
                class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-300 border <?php echo empty($current_cat) ? 'bg-indigo-600 text-white border-indigo-600 shadow-lg shadow-indigo-500/25' : 'bg-white/70 dark:bg-zinc-900/70 border-border/60 text-muted-foreground hover:border-indigo-400 hover:text-indigo-600 backdrop-blur-sm'; ?>">
                All Features
            </a>
            <?php foreach ($feature_categories as $cat): ?>
            <a href="<?php echo get_term_link($cat); ?>"
                class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-300 border <?php echo ($current_cat === $cat->slug) ? 'bg-indigo-600 text-white border-indigo-600 shadow-lg shadow-indigo-500/25' : 'bg-white/70 dark:bg-zinc-900/70 border-border/60 text-muted-foreground hover:border-indigo-400 hover:text-indigo-600 backdrop-blur-sm'; ?>">
                <?php echo esc_html($cat->name); ?>
            </a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>

    <!-- Bottom gradient fade -->
    <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-background to-transparent"></div>
</section>

<!-- Features Grid -->
<section class="py-16 lg:py-24 bg-background">
    <div class="container mx-auto px-6">

        <?php if (have_posts()): ?>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 max-w-6xl mx-auto pt-12">

            <?php
            $card_colors = array(
                array('from-blue-500', 'to-indigo-600', 'bg-blue-100/50 dark:bg-blue-950/40', 'text-blue-600 dark:text-blue-400'),
                array('from-indigo-500', 'to-purple-600', 'bg-indigo-100/50 dark:bg-indigo-950/40', 'text-indigo-600 dark:text-indigo-400'),
                array('from-violet-500', 'to-blue-600', 'bg-violet-100/50 dark:bg-violet-950/40', 'text-violet-600 dark:text-violet-400'),
                array('from-cyan-500', 'to-blue-600', 'bg-cyan-100/50 dark:bg-cyan-950/40', 'text-cyan-600 dark:text-cyan-400'),
                array('from-blue-600', 'to-indigo-700', 'bg-blue-100/50 dark:bg-blue-950/40', 'text-blue-600 dark:text-blue-400'),
                array('from-indigo-600', 'to-violet-700', 'bg-indigo-100/50 dark:bg-indigo-950/40', 'text-indigo-600 dark:text-indigo-400'),
            );
            $card_index = 0;

            while (have_posts()): the_post();
                $categories   = get_the_terms(get_the_ID(), 'feature_category');
                $cat_name     = (!is_wp_error($categories) && !empty($categories)) ? $categories[0]->name : '';
                $feature_icon = get_post_meta(get_the_ID(), 'feature_icon', true); // now an icon NAME, e.g. "bar-chart"
                $colors       = $card_colors[$card_index % count($card_colors)];
                $card_index++;
            ?>

            <article class="group relative">
                <div
                    class="relative h-full rounded-2xl border border-border/60 bg-background overflow-hidden transition-all duration-500 hover:shadow-xl hover:shadow-indigo-500/5 hover:border-indigo-300 dark:hover:border-indigo-700 hover:-translate-y-1">

                    <!-- Top accent gradient bar -->
                    <div
                        class="h-1 w-full bg-gradient-to-r <?php echo $colors[0]; ?> <?php echo $colors[1]; ?> opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    <div class="p-7 pb-6 flex flex-col h-full">

                        <!-- Icon + Category row -->
                        <div class="flex items-start justify-between mb-6">
                            <div
                                class="size-14 rounded-xl <?php echo $colors[2]; ?> flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                <?php if ($feature_icon): ?>
                                    <!--
                                        Lucide icon rendered by name.
                                        lucide.createIcons() (called once at page bottom) swaps
                                        every <i data-lucide="…"> for the matching inline SVG.
                                    -->
                                    <i data-lucide="<?php echo esc_attr($feature_icon); ?>"
                                       class="w-7 h-7 <?php echo $colors[3]; ?>"></i>
                                <?php else: ?>
                                    <!-- Fallback star icon when no icon is set -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="<?php echo $colors[3]; ?>" aria-hidden="true">
                                        <path
                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                <?php endif; ?>
                            </div>
                            <?php if ($cat_name): ?>
                            <span
                                class="px-3 py-1 rounded-full bg-indigo-50 dark:bg-indigo-950/40 text-indigo-600 dark:text-indigo-400 text-xs font-semibold border border-indigo-100 dark:border-indigo-800/50">
                                <?php echo esc_html($cat_name); ?>
                            </span>
                            <?php endif; ?>
                        </div>

                        <!-- Title -->
                        <h2
                            class="text-xl font-bold text-foreground mb-3 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors duration-300 leading-tight">
                            <a href="<?php the_permalink(); ?>" class="after:absolute after:inset-0">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <!-- Excerpt -->
                        <p class="text-muted-foreground leading-relaxed text-sm flex-1 mb-6">
                            <?php
                            if (has_excerpt()) {
                                echo wp_trim_words(get_the_excerpt(), 20, '...');
                            } else {
                                echo wp_trim_words(get_the_content(), 20, '...');
                            }
                            ?>
                        </p>

                        <!-- Read more -->
                        <div class="pt-4 border-t border-border/40">
                            <span
                                class="text-sm font-semibold <?php echo $colors[3]; ?> flex items-center gap-2 group-hover:gap-3 transition-all duration-300">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round" aria-hidden="true">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </article>

            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <?php
        $pages = paginate_links(array(
            'prev_text' => '&larr; Previous',
            'next_text' => 'Next &rarr;',
            'type'      => 'array',
        ));
        if ($pages):
        ?>
        <nav class="mt-16 flex items-center justify-center gap-2 max-w-6xl mx-auto" aria-label="Pagination">
            <?php foreach ($pages as $page):
                $is_current = strpos($page, 'current') !== false;
            ?>
            <div
                class="<?php echo $is_current ? 'bg-indigo-600 text-white border-indigo-600 shadow-md' : 'bg-background border border-border/60 text-muted-foreground hover:border-indigo-400 hover:text-indigo-600'; ?> inline-flex items-center justify-center min-w-[2.25rem] h-9 px-3 rounded-lg text-sm font-medium transition-all duration-300 [&_a]:text-inherit [&_a]:no-underline">
                <?php echo $page; ?>
            </div>
            <?php endforeach; ?>
        </nav>
        <?php endif; ?>

        <?php else: ?>

        <!-- Empty State -->
        <div class="flex flex-col items-center justify-center text-center py-28 max-w-md mx-auto">
            <div
                class="size-24 rounded-2xl bg-gradient-to-br from-indigo-100 to-blue-100 dark:from-indigo-950/50 dark:to-blue-950/50 flex items-center justify-center mb-8 shadow-lg shadow-indigo-500/10">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                    class="text-indigo-500" aria-hidden="true">
                    <path
                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-foreground mb-3">No Features Yet</h2>
            <p class="text-muted-foreground mb-8">We're working on documenting all the powerful capabilities
                SkillPlus offers. Check back soon!</p>
            <a href="<?php echo home_url('/'); ?>"
                class="inline-flex items-center gap-2 rounded-lg text-sm font-medium bg-indigo-600 text-white shadow-lg shadow-indigo-500/25 hover:bg-indigo-700 h-10 px-6 py-2 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                    aria-hidden="true">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                    <polyline points="9 22 9 12 15 12 15 22" />
                </svg>
                Back to Home
            </a>
        </div>

        <?php endif; ?>
    </div>
</section>

<!-- Initialise all Lucide icons on the page in one pass -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
});
</script>

<?php get_footer(); ?>