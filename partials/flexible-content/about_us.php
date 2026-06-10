      <!-- About Us -->
      <section
          id="about-us"
          class="py-10 bg-background border-b border-border/50">
          <div class="container mx-auto px-6">
              <div
                  class="flex items-center justify-center flex-col text-center gap-5">
                  <div
                      class="py-1 text-indigo-600 font-semibold border-b-2 border-indigo-600 mb-1.5">
                  
                  </div>
                  <h2 class="text-3xl md:text-5xl font-bold text-foreground">
                      <?php the_sub_field('about_title'); ?>                        
                  </h2>
                  <div
                      class="text-lg md:text-xl text-muted-foreground mx-auto max-w-3xl">
                      <?php the_sub_field('about_description'); ?>
                  </div>
              </div>
              <div class="max-w-4xl mx-auto mt-16 text-center">
                  <h3 class="text-2xl font-bold mb-4"><?php the_sub_field('company_name'); ?></h3>
                  <div class="text-muted-foreground mb-6">
                      <?php the_sub_field('company_description'); ?>
                  </div>
                  <?php if (have_rows('company_tags')): ?>
                      <div class="flex flex-wrap justify-center gap-3">

                          <?php while (have_rows('company_tags')): the_row(); ?>
                              <span class="px-4 py-1.5 rounded-full bg-indigo-100 text-indigo-700 dark:bg-indigo-950/50 dark:text-indigo-300 text-sm font-medium flex items-center gap-2"">
                                  <?php the_sub_field('tag_text'); ?>
                              </span>
                          <?php endwhile; ?>

                      </div>
                  <?php endif; ?>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto mt-20">
                  <?php if (have_rows('about_cards')): ?>
                      <?php while (have_rows('about_cards')): the_row(); ?>
                          <div>
                              <div
                                  data-slot="card"
                                  class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm h-full text-center transition-all duration-300 hover:border-indigo-500">
                                  <div
                                      data-slot="card-header"
                                      class="@container/card-header auto-rows-min grid-rows-[auto_auto] gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6 flex flex-col items-center py-8">
                                      <div
                                          class="mb-4 rounded-full bg-indigo-100 dark:bg-indigo-950/50 p-4">
                                          <img src="<?php the_sub_field('card_icon'); ?>" alt="">
                                      </div>
                                      <div data-slot="card-title" class="text-xl font-bold">
                                          <?php the_sub_field('card_title'); ?>
                                      </div>
                                  </div>
                                  <div data-slot="card-content" class="px-6 space-y-5">
                                      <p class="text-muted-foreground">
                                          <?php the_sub_field('card_description'); ?>
                                      </p>
                                  </div>
                              </div>
                          </div>
                      <?php endwhile; ?>
                  <?php endif; ?>
              </div>
          </div>
      </section>