<?php
/**
 * Flexible Content: About Stats
 * 
 * To use this, add a layout named 'about_stats' to your flexible content field.
 * Expected ACF Fields:
 * - stats_list (repeater)
 *   - icon (text - lucide icon name)
 *   - number (text - e.g. "100+")
 *   - label (text - e.g. "Clients")
 */
?>

<section class="py-20 bg-indigo-600 relative overflow-hidden">
    <!-- Decorative background patterns -->
    <div class="absolute inset-0 opacity-10" style="background-image: url(&quot;data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.4'%3E%3Ccircle cx='7' cy='7' r='1'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;);"></div>
    <div class="absolute inset-0 bg-linear-to-br from-indigo-700 via-indigo-600 to-blue-700"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 max-w-6xl mx-auto">
            <?php if (have_rows('stats_list')): ?>
                <?php while (have_rows('stats_list')): the_row(); 
                    $s_icon = get_sub_field('icon');
                    $s_num = get_sub_field('number');
                    $s_label = get_sub_field('label');
                ?>
                <div class="text-center group">
                    <div class="flex flex-col items-center">
                        <?php if ($s_icon): ?>
                        <div class="mb-4 text-indigo-200 opacity-60 group-hover:scale-110 group-hover:opacity-100 transition-all duration-300">
                            <i data-lucide="<?php echo esc_attr($s_icon); ?>" class="w-8 h-8"></i>
                        </div>
                        <?php endif; ?>
                        <div class="text-4xl lg:text-5xl font-black text-white mb-2 tabular-nums ">
                           <span><?php echo esc_html($s_num); ?></span><span class="text-4xl font-bold">+</span>
                        </div> 
                        <div class="text-indigo-100/80 font-medium tracking-wide uppercase text-xs lg:text-sm">
                            <?php echo esc_html($s_label); ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php else: ?>
                <!-- Fallback content -->
                <?php 
                $fallbacks = [
                    ['icon' => 'building', 'number' => '50+', 'label' => 'Organizations'],
                    ['icon' => 'users', 'number' => '10k+', 'label' => 'Active Users'],
                    ['icon' => 'award', 'number' => '15+', 'label' => 'Years Experience'],
                    ['icon' => 'globe', 'number' => '24/7', 'label' => 'Expert Support'],
                ];
                foreach ($fallbacks as $f):
                ?>
                <div class="text-center group">
                    <div class="flex flex-col items-center">
                        <div class="mb-4 text-indigo-200 opacity-60 group-hover:scale-110 group-hover:opacity-100 transition-all duration-300">
                            <i data-lucide="<?php echo $f['icon']; ?>" class="w-8 h-8"></i>
                        </div>
                        <div class="text-4xl lg:text-5xl font-black text-white mb-2 tabular-nums"><?php echo $f['number']; ?></div>
                        <div class="text-indigo-100/80 font-medium tracking-wide uppercase text-xs lg:text-sm"><?php echo $f['label']; ?></div>
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
