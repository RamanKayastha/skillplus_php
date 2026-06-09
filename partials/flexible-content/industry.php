      <!-- Industry -->
      <section
          id="industry"
          class="py-24 bg-background border-b border-border/50">
          <div class="container mx-auto px-6">
              <div
                  class="flex items-center justify-center flex-col text-center gap-5">
                  <div
                      class="py-1 text-indigo-600 font-semibold border-b-2 border-indigo-600 mb-1.5">
                      <?php the_sub_field('industry_tag'); ?>
                  </div>
                  <h2 class="text-3xl md:text-5xl font-bold text-foreground">
                      <?php the_sub_field('industry_title'); ?>
                  </h2>
                  <p
                      class="text-lg md:text-xl text-muted-foreground mx-auto max-w-2xl">
                      <?php the_sub_field('industry_description'); ?>
                  </p>
              </div>
              <div
                  class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto mt-16">
                  <?php
                  $args = array(
                      'post_type'      => 'industries',
                      'posts_per_page' => 3,
                      'orderby'        => 'date',
                      'order'          => 'DESC',
                  );
                  $industry_query = new WP_Query($args);
                  if ($industry_query->have_posts()):
                      while ($industry_query->have_posts()): $industry_query->the_post();
                          $industry_icon = get_post_meta(get_the_ID(), 'industry_icon', true);
                  ?>
                          <div>
                              <div
                                  data-slot="card"
                                  class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm h-full text-center transition-all duration-300 hover:border-indigo-500">
                                  <div
                                      data-slot="card-header"
                                      class="@container/card-header auto-rows-min grid-rows-[auto_auto] gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6 flex flex-col items-center py-8">
                                      <div
                                          class="mb-4 rounded-full bg-indigo-100 dark:bg-indigo-950/50 p-4">
                                          <?php if ($industry_icon): ?>
                                              <i data-lucide="<?php echo esc_attr($industry_icon); ?>"
                                                 class="h-8 w-8 text-indigo-600 dark:text-indigo-400"></i>
                                          <?php else: ?>
                                               <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                                                   <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/>
                                               </svg>
                                          <?php endif; ?>
                                      </div>
                                      <div data-slot="card-title" class="text-xl font-bold">
                                          <a href="<?php the_permalink(); ?>" class="hover:text-indigo-600 transition-colors">
                                              <?php the_title(); ?>
                                          </a>
                                      </div>
                                  </div>
                                  <div data-slot="card-content" class="px-6">
                                      <p class="text-muted-foreground">
                                          <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                      </p>
                                  </div>
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