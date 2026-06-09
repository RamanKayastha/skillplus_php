      <!-- Why SkillPlus -->
      <section class="py-24 border-b border-border/50">
          <div class="container mx-auto px-6">
              <div
                  class="flex items-center justify-center flex-col text-center gap-5 mb-20">
                  <h2 class="text-3xl md:text-5xl font-bold text-foreground">
                      <?php the_sub_field('why_title'); ?>
                  </h2>
                  <p
                      class="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto">
                      <?php the_sub_field('why_description'); ?>
                  </p>
              </div>
              <div
                  class="flex items-center justify-center flex-col text-center gap-5 mb-16">
                  <h2 class="text-3xl md:text-5xl font-bold text-foreground">
                      <?php the_sub_field('why_heading'); ?>
                  </h2>
              </div>
              <div class="flex flex-col gap-12 max-w-6xl mx-auto">
                  <div
                      class="flex flex-col md:flex-row items-center justify-between gap-8">
                      <?php if (have_rows('why_features')): ?>
                          <?php while (have_rows('why_features')): the_row(); ?>
                              <div
                                  class="flex flex-col items-center cursor-pointer transition-all duration-300 overflow-hidden">
                                  <div
                                      class="size-12 bg-indigo-100/40 dark:bg-indigo-950/60 rounded-full flex items-center justify-center">
                                      <img src="<?php the_sub_field('feature_icon'); ?>" alt="">
                                  </div>
                                  <h3
                                      class="p-5 pb-3 text-xl font-semibold mb-0 transition-colors duration-300 text-center text-foreground">
                                      <?php the_sub_field('feature_title'); ?>
                                  </h3>
                                  <h2 class="text-lg text-muted-foreground mb-2 text-center">
                                      <?php the_sub_field('feature_description'); ?>
                                  </h2>
                                  <div class="w-full">
                                      <div class="h-0.5 w-full overflow-hidden"></div>
                                  </div>
                              </div>
                          <?php endwhile; ?>
                      <?php endif; ?>
                  </div>
              </div>
      </section>