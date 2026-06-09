<?php
/**
 * Flexible Content: Our Values
 * 
 * To use this, add a layout named 'our_values' to your flexible content field.
 * Expected ACF Fields:
 * - values_tag (text)
 * - values_title (text)
 * - values_description (textarea)
 * - values_list (repeater)
 *   - icon (text - lucide icon name)
 *   - title (text)
 *   - description (textarea)
 */

$tag = get_sub_field('values_tag') ?: 'Our Principles';
$title = get_sub_field('values_title') ?: 'The Values That Drive Us';
$desc = get_sub_field('values_description') ?: 'We are committed to delivering excellence through a set of core values that guide every decision we make.';
?>

<section class="py-24 bg-zinc-50 dark:bg-zinc-950/50 relative overflow-hidden">
    <!-- Decorative background blobs -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -left-20 top-1/2 -translate-y-1/2 w-80 h-80 bg-indigo-500/5 rounded-full blur-[100px]"></div>
        <div class="absolute -right-20 top-1/4 w-64 h-64 bg-blue-500/5 rounded-full blur-[80px]"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="flex items-center justify-center flex-col text-center gap-5 mb-16">
            <div class="py-1 text-indigo-600 font-semibold border-b-2 border-indigo-600 mb-1.5 uppercase tracking-wider text-sm">
                <?php echo esc_html($tag); ?>
            </div>
            <h2 class="text-3xl md:text-5xl font-bold text-foreground max-w-3xl">
                <?php echo esc_html($title); ?>
            </h2>
            <?php if ($desc): ?>
            <p class="text-lg md:text-xl text-muted-foreground mx-auto max-w-2xl">
                <?php echo esc_html($desc); ?>
            </p>
            <?php endif; ?>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <?php if (have_rows('values_list')): ?>
                <?php while (have_rows('values_list')): the_row(); 
                    $v_icon = get_sub_field('icon') ?: 'zap';
                    $v_title = get_sub_field('title');
                    $v_desc = get_sub_field('description');
                ?>
                <div class="group">
                    <div 
                        data-slot="card" 
                        class="bg-background text-card-foreground flex flex-col gap-6 rounded-2xl border border-border p-8 shadow-sm h-full transition-all duration-500 hover:shadow-xl hover:shadow-indigo-500/10 hover:border-indigo-500/50 hover:-translate-y-1"
                    >
                        <div class="size-14 rounded-xl bg-indigo-50 dark:bg-indigo-950/40 flex items-center justify-center group-hover:scale-110 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-500">
                            <i data-lucide="<?php echo esc_attr($v_icon); ?>" class="w-7 h-7 text-indigo-600 dark:text-indigo-400 group-hover:text-white"></i>
                        </div>
                        
                        <div>
                            <h3 class="text-xl font-bold text-foreground mb-4 group-hover:text-indigo-600 transition-colors">
                                <?php echo esc_html($v_title); ?>
                            </h3>
                            <p class="text-muted-foreground leading-relaxed">
                                <?php echo esc_html($v_desc); ?>
                            </p>
                        </div>

                        <!-- Subtle accent line -->
                        <div class="mt-auto pt-6">
                            <div class="h-1 w-12 bg-indigo-100 dark:bg-indigo-900 group-hover:w-full group-hover:bg-indigo-600 transition-all duration-500 rounded-full"></div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php else: ?>
                <!-- Fallback content if no repeater rows found -->
                <?php 
                $fallbacks = [
                    ['icon' => 'zap', 'title' => 'Speed & Efficiency', 'desc' => 'We optimize every workflow to ensure your team can focus on what matters most.'],
                    ['icon' => 'shield-check', 'title' => 'Uncompromising Security', 'desc' => 'Your data is protected by enterprise-grade security and regular audits.'],
                    ['icon' => 'heart', 'title' => 'People First', 'desc' => 'Technology should serve people, not the other way around. Our design is human-centric.'],
                ];
                foreach ($fallbacks as $f):
                ?>
                <div class="group">
                    <div data-slot="card" class="bg-background text-card-foreground flex flex-col gap-6 rounded-2xl border border-border p-8 shadow-sm h-full transition-all duration-500 hover:shadow-xl hover:border-indigo-500/50 hover:-translate-y-1">
                        <div class="size-14 rounded-xl bg-indigo-50 dark:bg-indigo-950/40 flex items-center justify-center group-hover:scale-110 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-500">
                            <i data-lucide="<?php echo esc_attr($f['icon']); ?>" class="w-7 h-7 text-indigo-600 dark:text-indigo-400 group-hover:text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-foreground mb-4 group-hover:text-indigo-600 transition-colors"><?php echo $f['title']; ?></h3>
                        <p class="text-muted-foreground leading-relaxed"><?php echo $f['desc']; ?></p>
                        <div class="mt-auto pt-6"><div class="h-1 w-12 bg-indigo-100 dark:bg-indigo-900 group-hover:w-full group-hover:bg-indigo-600 transition-all duration-500 rounded-full"></div></div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Initialize Lucide icons for this partial -->
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js" defer></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
});
</script>
