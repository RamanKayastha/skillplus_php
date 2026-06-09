<?php
/**
 * Flexible Content: CTA
 *
 * Expected ACF Fields:
 * - cta_tag (text)
 * - cta_title (text)
 * - cta_button_text (text)
 * - cta_button_link (url)
 */

$cta_link = get_sub_field('cta_button_link');
?>

<!-- CTA -->
<section id="cta"
    class="h-96 relative w-full overflow-hidden bg-zinc-900 flex flex-col items-center justify-center">

    <!-- Mask overlay: fades the boxes out towards the center -->
    <div
        class="absolute inset-0 w-full h-full bg-zinc-900 z-20 [mask-image:radial-gradient(transparent,white)] pointer-events-none">
    </div>

    <!-- Animated boxes background (generated via JS) -->
    <div data-cta-boxes
        style="transform: translate(-40%,-60%) skewX(-48deg) skewY(14deg) scale(0.675) rotate(0deg) translateZ(0);"
        class="absolute -top-1/4 left-1/4 z-0 flex h-full w-full -translate-x-1/2 -translate-y-1/2 p-4">
    </div>

    <div class="container mx-auto px-6 text-center relative z-10">
        <div>
            <?php if (get_sub_field('cta_tag')): ?>
                <p class="text-white/80 font-semibold text-sm uppercase tracking-wide mb-6">
                    <?php the_sub_field('cta_tag'); ?>
                </p>
            <?php endif; ?>

            <h2 class="text-4xl md:text-5xl font-bold text-white mb-10">
                <?php the_sub_field('cta_title'); ?>
            </h2>

            <div>
                <button
                    type="button"
                    data-slot="button"
                    data-cta-confetti
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm transition-all disabled:pointer-events-none disabled:opacity-50 shrink-0 outline-none focus-visible:ring-[3px] border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 rounded-md px-6 font-semibold cursor-pointer">
                    <a href="<?php echo esc_url($cta_link); ?>">
                        <?php the_sub_field('cta_button_text'); ?>
                    </a>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- canvas-confetti for the button hover effect -->
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js" defer></script>
<script>
(function () {
    function initCta() {
        var COLORS = [
            '#7dd3fc', '#f9a8d4', '#86efac', '#fde047', '#fca5a5',
            '#d8b4fe', '#93c5fd', '#a5b4fc', '#c4b5fd'
        ];
        var randomColor = function () {
            return COLORS[Math.floor(Math.random() * COLORS.length)];
        };

        // --- Build the animated boxes grid ---
        document.querySelectorAll('[data-cta-boxes]').forEach(function (container) {
            if (container.dataset.built) return;
            container.dataset.built = '1';

            var ROWS = 20;
            var COLS = 28;
            var plusSvg =
                '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" ' +
                'stroke-width="1.5" stroke="currentColor" ' +
                'class="absolute h-6 w-10 -top-[14px] -left-[22px] text-slate-700 stroke-[1px] pointer-events-none">' +
                '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /></svg>';

            for (var i = 0; i < ROWS; i++) {
                var row = document.createElement('div');
                row.className = 'relative h-8 w-16 border-l border-slate-700';

                for (var j = 0; j < COLS; j++) {
                    var col = document.createElement('div');
                    col.className = 'relative h-8 w-16 border-t border-r border-slate-700';
                    col.style.transition = 'background-color 2s ease';

                    col.addEventListener('mouseenter', function (e) {
                        e.currentTarget.style.transition = 'background-color 0s';
                        e.currentTarget.style.backgroundColor = randomColor();
                    });
                    col.addEventListener('mouseleave', function (e) {
                        e.currentTarget.style.transition = 'background-color 2s ease';
                        e.currentTarget.style.backgroundColor = 'transparent';
                    });

                    if (j % 2 === 0 && i % 2 === 0) {
                        col.innerHTML = plusSvg;
                    }
                    row.appendChild(col);
                }
                container.appendChild(row);
            }
        });

        // --- Confetti on button hover ---
        document.querySelectorAll('[data-cta-confetti]').forEach(function (btn) {
            btn.addEventListener('mouseenter', function () {
                if (typeof confetti === 'function') {
                    confetti({
                        particleCount: 100,
                        spread: 70,
                        origin: { y: 0.6 }
                    });
                }
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initCta);
    } else {
        initCta();
    }
})();
</script>
