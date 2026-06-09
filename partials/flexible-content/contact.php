      <!-- Contact -->
      <section
          id="contact"
          class="py-24 bg-background border-b border-border/50">
          <div class="container mx-auto px-6">
              <div
                  class="flex items-center justify-center flex-col text-center gap-5">
                  <div
                      class="py-1 text-indigo-600 font-semibold border-b-2 border-indigo-600 mb-1.5">
                      <?php the_sub_field('contact_tag'); ?>
                  </div>
                  <h2 class="text-3xl md:text-5xl font-bold text-foreground">
                      <?php the_sub_field('contact_title'); ?>
                  </h2>
                  <p
                      class="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto">
                      <?php the_sub_field('contact_description_1'); ?>
                  </p>
                  <p
                      class="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto mb-10">
                      <?php the_sub_field('contact_description_2'); ?>
                  </p>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                  <?php if (have_rows('contact_repeater')): ?>
                      <?php while (have_rows('contact_repeater')): the_row(); ?>
                          <div>
                              <div
                                  data-slot="card"
                                  class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm h-full transition-all duration-300 group text-center border-border hover:border-indigo-500">
                                  <div
                                      data-slot="card-header"
                                      class="@container/card-header auto-rows-min grid-rows-[auto_auto] gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6 py-8 flex flex-col items-center">
                                      <div
                                          class="mb-4 rounded-full bg-indigo-100 dark:bg-indigo-950/50 p-4">
                                          <img src="<?php the_sub_field('repeater_icon'); ?>" alt="">
                                      </div>
                                      <div data-slot="card-title" class="text-2xl font-bold">
                                          <?php the_sub_field('repeater_title'); ?>
                                      </div>
                                      <div
                                          data-slot="card-description"
                                          class="text-sm text-muted-foreground mt-3">
                                          <?php the_sub_field('repeater_description'); ?>
                                      </div>
                                  </div>
                                  <div data-slot="card-content" class="px-6">
                                      <div tabindex="0">
                                          <a href="<?php the_sub_field('button_url'); ?>"
                                              data-slot="button"
                                              class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 rounded-md px-6 has-[&gt;svg]:px-4 w-full">
                                              <?php the_sub_field('button_text'); ?>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      <?php endwhile; ?>
                  <?php endif; ?>
              </div>
          </div>
      </section>