<?php
/**
 * Single Template: Feature
 * Displays a single Feature custom post type entry
 *
 * @package skillplus
 */
get_header();
?>

<?php while (have_posts()): the_post();
    $categories  = get_the_terms(get_the_ID(), 'feature_category');
    $cat_name    = (!is_wp_error($categories) && !empty($categories)) ? $categories[0]->name : '';
    $cat_link    = (!is_wp_error($categories) && !empty($categories)) ? get_term_link($categories[0]) : '#';
    $feature_icon = get_post_meta(get_the_ID(), 'feature_icon', true);
?>

<!-- Single Feature Hero -->
<section class="relative bg-gradient-to-br from-gray-50 dark:from-zinc-950 via-indigo-50 dark:via-black to-indigo-50 dark:to-zinc-950 pt-32 pb-16 lg:pt-44 lg:pb-20 overflow-hidden">

    <div class="hidden lg:block absolute inset-0 pointer-events-none">
        <div class="absolute left-[10%] top-[15%] w-[280px] h-[280px] rounded-full bg-indigo-200 dark:bg-indigo-900 opacity-90 blur-[60px]"></div>
        <div class="absolute right-[12%] top-[30%] w-[200px] h-[200px] rounded-full bg-indigo-300 dark:bg-indigo-950 opacity-80 blur-[40px]"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-400/10 via-indigo-500/10 to-indigo-600/10"></div>
    </div>
    <div class="absolute inset-0 opacity-40" style="background-image: url(&quot;data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23e5e7eb' fill-opacity='0.3'%3E%3Ccircle cx='7' cy='7' r='1'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;);"></div>

    <div class="container mx-auto px-6 relative z-10">

        <!-- Breadcrumb -->
        <!-- <nav class="flex items-center gap-2 text-sm text-muted-foreground mb-8" aria-label="Breadcrumb">
            <a href="<?php echo home_url('/'); ?>" class="hover:text-indigo-600 transition-colors">Home</a>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg>
            <a href="<?php echo get_post_type_archive_link('features'); ?>" class="hover:text-indigo-600 transition-colors">Features</a>
            <?php if ($cat_name): ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg>
            <a href="<?php echo esc_url($cat_link); ?>" class="hover:text-indigo-600 transition-colors"><?php echo esc_html($cat_name); ?></a>
            <?php endif; ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg>
            <span class="text-foreground font-medium truncate max-w-xs"><?php the_title(); ?></span>
        </nav> -->

        <div class="max-w-4xl mx-auto text-center">
            <!-- Category tag -->
            <?php if ($cat_name): ?>
            <div class="inline-flex items-center justify-center mb-5">
                <a href="<?php echo esc_url($cat_link); ?>" class="py-1 px-3 text-indigo-600 font-semibold border-b-2 border-indigo-600 hover:text-indigo-700 transition-colors">
                    <?php echo esc_html($cat_name); ?>
                </a>
            </div>
            <?php endif; ?>

            <!-- Feature Icon -->
            <div class="flex items-center justify-center mb-6">
                <div class="size-16 rounded-full bg-blue-100/40 dark:bg-blue-950/40 flex items-center justify-center">
                    <?php if ($feature_icon): ?>
                        <i data-lucide="<?php echo esc_attr($feature_icon); ?>"
                           class="w-8 h-8 text-indigo-600 dark:text-indigo-400"></i>
                    <?php else: ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Title -->
            <h1 class="font-black text-3xl lg:text-5xl font-bold mb-6 leading-[1.2] bg-linear-to-r from-indigo-900 via-blue-900 to-indigo-900 dark:from-gray-50 dark:via-blue-300 dark:to-indigo-900 bg-clip-text text-transparent">
                <?php the_title(); ?>
            </h1>

            <!-- Excerpt -->
            <?php if (has_excerpt()): ?>
            <p class="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto">
                <?php the_excerpt(); ?>
            </p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Feature Content -->
<section class="py-20 bg-background border-b border-border/50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">

            <!-- Featured Image -->
            <?php if (has_post_thumbnail()): ?>
            <div class="mb-12 rounded-2xl overflow-hidden shadow-xl border border-border/50">
                <?php the_post_thumbnail('large', array(
                    'class' => 'w-full h-auto object-cover',
                    'alt'   => get_the_title()
                )); ?>
            </div>
            <?php endif; ?>

            <!-- Content Body -->
            <div data-slot="card" class="bg-card text-card-foreground rounded-xl border border-border shadow-sm p-8 md:p-12">
                <div class="prose prose-lg max-w-none text-foreground
                            prose-headings:text-foreground prose-headings:font-bold
                            prose-p:text-muted-foreground prose-p:leading-relaxed
                            prose-a:text-indigo-600 prose-a:no-underline hover:prose-a:underline
                            prose-strong:text-foreground
                            prose-ul:text-muted-foreground prose-ol:text-muted-foreground
                            prose-li:leading-relaxed
                            prose-hr:border-border/50">
                    <?php the_content(); ?>
                </div>
            </div>

            <!-- Back & navigation -->
            <div class="mt-12 flex flex-col sm:flex-row items-center justify-between gap-4">
                <a href="<?php echo get_post_type_archive_link('features'); ?>"
                   data-slot="button"
                   class="inline-flex items-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 px-6 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg>
                    All Features
                </a>

                <div class="flex items-center gap-3">
                    <?php
                    $prev_post = get_previous_post(true, '', 'feature_category');
                    $next_post = get_next_post(true, '', 'feature_category');
                    if ($prev_post): ?>
                    <a href="<?php echo get_permalink($prev_post); ?>"
                       data-slot="button"
                       class="inline-flex items-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 px-4 py-2"
                       title="<?php echo esc_attr(get_the_title($prev_post)); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m15 18-6-6 6-6"/></svg>
                        Prev
                    </a>
                    <?php endif;
                    if ($next_post): ?>
                    <a href="<?php echo get_permalink($next_post); ?>"
                       data-slot="button"
                       class="inline-flex items-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 px-4 py-2"
                       title="<?php echo esc_attr(get_the_title($next_post)); ?>">
                        Next
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 18 6-6-6-6"/></svg>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Features -->
<?php
$related_args = array(
    'post_type'      => 'features',
    'posts_per_page' => 3,
    'post__not_in'   => array(get_the_ID()),
    'orderby'        => 'rand',
);
if (!empty($categories) && !is_wp_error($categories)) {
    $related_args['tax_query'] = array(
        array(
            'taxonomy' => 'feature_category',
            'field'    => 'term_id',
            'terms'    => wp_list_pluck($categories, 'term_id'),
        ),
    );
}
$related_query = new WP_Query($related_args);

if ($related_query->have_posts()):
?>
<section class="py-20 bg-background">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center justify-center flex-col text-center gap-4 mb-12">
                <div class="py-1 px-3 text-indigo-600 font-semibold border-b-2 border-indigo-600">
                    Related Features
                </div>
                <h2 class="text-3xl font-bold text-foreground">Explore More Capabilities</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php while ($related_query->have_posts()): $related_query->the_post();
                    $rel_cats      = get_the_terms(get_the_ID(), 'feature_category');
                    $rel_cat_name  = (!is_wp_error($rel_cats) && !empty($rel_cats)) ? $rel_cats[0]->name : '';
                    $rel_icon      = get_post_meta(get_the_ID(), 'feature_icon', true);
                ?>
                <div class="group">
                    <div data-slot="card" class="text-card-foreground flex flex-col gap-6 rounded-xl shadow-sm h-full bg-background border border-border transition-all duration-500 p-7 relative overflow-hidden hover:shadow-lg hover:border-indigo-500">
                        <div data-slot="card-content" class="p-0">
                            <div class="flex items-start mb-5">
                                <div class="size-12 rounded-full flex items-center justify-center group-hover:scale-110 transition-all duration-500 bg-blue-100/40 dark:bg-blue-950/40 overflow-hidden">
                                    <?php if ($rel_icon): ?>
                                        <img src="<?php echo esc_url($rel_icon); ?>" alt="" class="w-6 h-6 object-contain">
                                    <?php else: ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-indigo-600 dark:text-indigo-400" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if ($rel_cat_name): ?>
                            <span class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 uppercase tracking-wider mb-2 block"><?php echo esc_html($rel_cat_name); ?></span>
                            <?php endif; ?>
                            <h3 class="text-xl font-bold text-foreground mb-3 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors leading-tight">
                                <a href="<?php the_permalink(); ?>" class="after:absolute after:inset-0"><?php the_title(); ?></a>
                            </h3>
                            <p class="text-muted-foreground leading-relaxed font-medium text-sm">
                                <?php echo wp_trim_words(has_excerpt() ? get_the_excerpt() : get_the_content(), 18, '...'); ?>
                            </p>
                        </div>
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-linear-to-br transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left from-blue-500 via-blue-600 to-blue-700"></div>
                        <div class="absolute inset-0 bg-linear-to-br from-slate-50/0 to-slate-100/0 group-hover:from-slate-50/30 group-hover:to-slate-100/10 dark:from-slate-900/0 dark:to-slate-800/0 transition-all duration-500 pointer-events-none"></div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php endwhile; ?>

<?php get_footer(); ?>
