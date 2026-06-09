      <!-- Hero Banner -->
      <section
          class="relative lg:min-h-screen bg-gradient-to-br from-gray-50 dark:from-zinc-950 via-indigo-50 dark:via-black to-indigo-50 dark:to-zinc-950 pt-25 pb-20 lg:pt-40 lg:pb-20 overflow-hidden group">
          <div class="hidden lg:block absolute inset-0 pointer-events-none">
              <div
                  class="absolute left-[10%] top-[15%] w-[320px] h-[320px] dark:w-[160px] dark:h-[160px] rounded-full bg-indigo-200 dark:bg-indigo-900 opacity-90 blur-[60px]"></div>
              <div
                  class="absolute left-[18%] top-[23%] w-[90px] h-[90px] rounded-full bg-indigo-100 dark:bg-indigo-950 opacity-95 blur-[10px]"></div>
              <div
                  class="absolute right-[12%] top-[30%] w-[220px] h-[220px] rounded-full bg-indigo-300 dark:bg-indigo-950 opacity-80 blur-[40px]"></div>
              <div
                  class="absolute left-[35%] bottom-[18%] w-[180px] h-[180px] rounded-full bg-blue-200 dark:bg-blue-600 opacity-80 blur-[30px]"></div>
              <div
                  class="absolute right-[22%] bottom-[8%] w-[150px] h-[150px] rounded-full bg-indigo-100 opacity-90 blur-[20px]"></div>
              <div
                  class="absolute inset-0 bg-gradient-to-br from-indigo-400/10 via-indigo-500/10 to-indigo-600/10"></div>
              <div
                  class="absolute inset-0 bg-gradient-to-tl from-indigo-400/10 via-indigo-500/10 to-indigo-600/10"></div>
          </div>
          <div
              class="absolute top-10 left-10 w-32 h-32 bg-gradient-to-br from-indigo-400/20 to-indigo-600/20 dark:bg-gradient-to-br dark:from-indigo-600/20 dark:to-indigo-400/20 rounded-full blur-xl"></div>
          <div
              class="absolute top-40 right-20 w-24 h-24 bg-gradient-to-br from-indigo-400/20 to-indigo-600/20 dark:bg-gradient-to-br dark:from-indigo-600/20 dark:to-indigo-400/20 rounded-full blur-xl"></div>
          <div
              class="absolute bottom-40 left-20 w-20 h-20 bg-gradient-to-br from-indigo-400/20 to-indigo-600/20 dark:bg-gradient-to-br dark:from-indigo-600/20 dark:to-indigo-400/20 rounded-full blur-xl"></div>
          <div
              class="absolute inset-0 opacity-40"
              style="
            background-image: url(&quot;data:image/svg+xml,%3Csvg width=&#x27;60&#x27; height=&#x27;60&#x27; viewBox=&#x27;0 0 60 60&#x27; xmlns=&#x27;http://www.w3.org/2000/svg&#x27;%3E%3Cg fill=&#x27;none&#x27; fill-rule=&#x27;evenodd&#x27;%3E%3Cg fill=&#x27;%23e5e7eb&#x27; fill-opacity=&#x27;0.3&#x27;%3E%3Ccircle cx=&#x27;7&#x27; cy=&#x27;7&#x27; r=&#x27;1&#x27;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;);
          "></div>
          <div class="container mx-auto px-6 relative z-10">
              <div class="text-center max-w-6xl mx-auto">
                  <p
                      class="text-base md:text-xl text-muted-foreground mb-6 md:mb-10 max-w-[600px] mx-auto leading-relaxed">
                      <?php the_sub_field('hero_subtitle'); ?>
                  </p>
                  <h1
                      class="font-black flex flex-col items-center gap-0.5 md:gap-1.25 justify-center text-3xl lg:text-5xl font-bold mb-4 lg:mb-8 leading-[1.2]">
                      <span
                          class="bg-linear-to-r from-indigo-900 via-blue-900 to-indigo-900 dark:from-gray-50 dark:via-blue-300 dark:to-indigo-900 bg-clip-text text-transparent"><?php the_sub_field('hero_title'); ?></span>
                      <div class="overflow-hidden py-2">
                          <h1
                              class="bg-linear-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent inline-block">
                              <?php the_sub_field('hero_highlight'); ?>
                          </h1>
                      </div>
                  </h1>
                  <div class="inline-flex items-center gap-3 mb-10">
                      <a
                          data-slot="button"
                          class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 rounded-md px-6 has-[&gt;svg]:px-4 cursor-pointer hover:[&amp;_svg]:-translate-y-1 w-46"
                          href="<?php echo the_sub_field('hero_button_link'); ?>"><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              class="lucide lucide-gift h-5 w-5 transition-transform opacity-60"
                              aria-hidden="true">
                              <rect x="3" y="8" width="18" height="4" rx="1"></rect>
                              <path d="M12 8v13"></path>
                              <path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path>
                              <path
                                  d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"></path>
                          </svg><?php the_sub_field('button_text'); ?></a>
                  </div>
                  <div class="mt-20 pt-10 max-w-6xl mx-auto">
                      <p
                          class="text-center text-sm font-semibold text-muted-foreground uppercase tracking-widest mb-8">
                          <?php the_sub_field('trusted_text'); ?>
                      </p>

                      <div
                          class="relative flex w-full flex-col items-center justify-center overflow-hidden">
                          <div
                              class="group flex overflow-hidden p-2 [--gap:1rem] [gap:var(--gap)] flex-row [--duration:40s]">

                              <div
                                  class="flex shrink-0 justify-around [gap:var(--gap)] animate-marquee flex-row group-hover:[animation-play-state:paused]">
                                  <?php if (have_rows('client_repeater')): ?>
                                      <?php while (have_rows('client_repeater')): the_row(); ?>
                                          <div
                                              class="flex items-center justify-center mx-8 grayscale opacity-60 hover:opacity-100 hover:grayscale-0 transition-all duration-300">
                                              <img src="<?php the_sub_field('logo_icon'); ?>" alt="">
                                              <span
                                                  class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-gray-700 to-gray-500 dark:from-gray-300 dark:to-gray-500"><?php the_sub_field('logo_name'); ?></span>
                                          </div>
                                      <?php endwhile; ?>
                                  <?php endif; ?>
                              </div>

                          </div>
                          <div
                              class="pointer-events-none absolute inset-y-0 left-0 w-1/4 bg-gradient-to-r from-background dark:from-background"></div>
                          <div
                              class="pointer-events-none absolute inset-y-0 right-0 w-1/4 bg-gradient-to-l from-background dark:from-background"></div>
                      </div>

                  </div>
              </div>
          </div>
      </section>