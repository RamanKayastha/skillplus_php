      <!-- CTA -->
      <section
          class="h-96 relative w-full overflow-hidden bg-zinc-900 flex flex-col items-center justify-center">
          <div
              class="absolute inset-0 z-0 bg-[linear-gradient(to_right,#334155_1px,transparent_1px),linear-gradient(to_bottom,#334155_1px,transparent_1px)] bg-[size:4rem_2rem] [mask-image:radial-gradient(ellipse_60%_60%_at_50%_50%,#000_30%,transparent_100%)] opacity-40"></div>
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
                          data-slot="button"
                          class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 rounded-md px-6 has-[&gt;svg]:px-4 font-semibold">
                          <?php
                            $cta_link = get_sub_field('cta_button_link');
                            ?>

                          <a href="<?php echo esc_url($cta_link); ?>">
                              <?php the_sub_field('cta_button_text'); ?>
                          </a> </button>
                  </div>
              </div>
          </div>
      </section>