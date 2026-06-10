      <!-- Key Features -->
      <section
          id="features"
          class="py-20 bg-background border-b border-border/50">
          <div class="container mx-auto px-6">
              <div
                  class="flex items-center justify-center flex-col text-center gap-5 mb-16">
                  <div
                      class="py-1 text-indigo-600 font-semibold border-b-2 border-indigo-600 mb-1.5">
                      <?php if (get_sub_field('features_tag')): ?>
                          <?php echo get_sub_field('features_tag'); ?>
                      <?php endif; ?>
                  </div>
                  <h2 class="text-3xl md:text-5xl font-bold text-foreground">
                      <?php if (get_sub_field('features_title')): ?>
                          <?php echo get_sub_field('features_title'); ?>
                      <?php endif; ?>
                  </h2>
                  <p
                      class="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto">
                      <?php echo get_sub_field('features_description'); ?>
                  </p>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                  <?php
                  $args = array(
                      'post_type'      => 'features',
                      'posts_per_page' => 4,
                      'orderby'        => 'date',
                      'order'          => 'DESC',
                  );
                  $feature_query = new WP_Query($args);
                  if ($feature_query->have_posts()):
                      while ($feature_query->have_posts()): $feature_query->the_post();
                          $feature_icon = get_post_meta(get_the_ID(), 'feature_icon', true);
                  ?>
                          <div class="group">
                              <div
                                  data-slot="card"
                                  class="text-card-foreground flex flex-col gap-6 rounded-xl shadow-sm h-full bg-background border border-border transition-all duration-500 p-8 relative overflow-hidden hover:shadow-lg hover:border-blue-500">
                                  <div data-slot="card-content" class="p-0">
                                      <div class="flex items-start mb-8">
                                          <div
                                              class="size-12 rounded-full flex items-center justify-center group-hover:scale-110 transition-all duration-500 relative overflow-hidden bg-blue-100/40 dark:bg-blue-950/40">
                                              <?php if ($feature_icon): ?>
                                                  <i data-lucide="<?php echo esc_attr($feature_icon); ?>"
                                                     class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                                              <?php else: ?>
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                                                       <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                                   </svg>
                                              <?php endif; ?>
                                          </div>
                                      </div>
                                      <h3
                                          class="text-2xl font-bold text-foreground mb-6 group-hover:text-blue-600 transition-colors leading-tight">
                                          <a href="<?php the_permalink(); ?>" class="after:absolute after:inset-0">
                                              <?php the_title(); ?>
                                          </a>
                                      </h3>
                                      <p class="text-muted-foreground leading-relaxed font-medium">
                                          <?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
                                      </p>
                                  </div>
                                  <div
                                      class="absolute bottom-0 left-0 w-full h-1 bg-linear-to-br transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left from-blue-500 via-blue-600 to-blue-700"></div>
                                  <div
                                      class="absolute inset-0 bg-linear-to-br from-slate-50/0 to-slate-100/0 group-hover:from-slate-50/30 group-hover:to-slate-100/10 dark:from-slate-900/0 dark:to-slate-800/0 transition-all duration-500 pointer-events-none"></div>
                              </div>
                          </div>
                  <?php
                      endwhile;
                      wp_reset_postdata();
                  endif;
                  ?>
              </div>
          </div>
      </section>

      <!-- Initialize Lucide icons -->
      <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js" defer></script>
      <script>
      document.addEventListener('DOMContentLoaded', function () {
          if (typeof lucide !== 'undefined') {
              lucide.createIcons();
          }
      });
      </script>