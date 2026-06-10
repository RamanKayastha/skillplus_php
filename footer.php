      <?php
        $footer_links = array(
            array('label' => 'Home', 'href' => home_url('/'), 'active' => is_front_page() || is_home()),
            array('label' => 'About', 'href' => home_url('/about/'), 'active' => is_page('about')),
            array('label' => 'Contact', 'href' => home_url('/contact/'), 'active' => is_page('contact')),
            array('label' => 'Features', 'href' => home_url('/features/'), 'active' => is_page('features')),
            array('label' => 'Industry', 'href' => home_url('/industry/'), 'active' => is_page('industry')),
        );
      ?>
      <!-- Footer -->
      <footer class="bg-background relative overflow-hidden">
          <div
              class="container px-6 mx-auto pt-14 pb-6 border-b border-border/50">
              <div class="flex flex-col lg:flex-row justify-between items-start gap-12 lg:gap-24">
                  <div class="lg:w-1/3 mb-12 lg:mb-0">
                      <div>
                          <div class="flex items-center mb-3">
                              <div class="flex items-center gap-2 leading-0">
                                  <span
                                      class="text-2xl font-bold bg-linear-to-r from-indigo-700 dark:from-indigo-400 to-indigo-400 dark:to-indigo-300 bg-clip-text text-transparent">SkillPlus</span>
                              </div>
                          </div>
                          <p class="text-muted-foreground mb-6 max-w-sm">
                              Transform your business with our powerful SaaS platform. Scale
                              faster, work smarter, grow bigger.
                          </p>
                          <div class="flex space-x-4">
                              <a
                                  href="https://www.facebook.com/skillplus.dev"
                                  class="size-9 border border-border/60 text-muted-foreground rounded-md flex items-center justify-center hover:text-foreground transition-colors"
                                  aria-label="Facebook"
                                  tabindex="0"><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="currentColor"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                      class="lucide lucide-facebook size-4"
                                      aria-hidden="true">
                                      <path
                                          d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                  </svg></a><a
                                  href="https://www.instagram.com/skillplus.dev"
                                  class="size-9 border border-border/60 text-muted-foreground rounded-md flex items-center justify-center hover:text-foreground transition-colors"
                                  aria-label="Instagram"
                                  tabindex="0"><svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      fill="none"
                                      stroke="currentColor"
                                      stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                      class="lucide lucide-instagram size-4"
                                      aria-hidden="true">
                                      <rect
                                          width="20"
                                          height="20"
                                          x="2"
                                          y="2"
                                          rx="5"
                                          ry="5"></rect>
                                      <path
                                          d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                      <line
                                          x1="17.5"
                                          x2="17.51"
                                          y1="6.5"
                                          y2="6.5"></line>
                                  </svg></a><a
                                  href="https://www.tiktok.com/@skillplus.dev"
                                  class="size-9 border border-border/60 text-muted-foreground rounded-md flex items-center justify-center hover:text-foreground transition-colors"
                                  aria-label="Tiktok"
                                  tabindex="0"><svg
                                      stroke="currentColor"
                                      fill="currentColor"
                                      stroke-width="0"
                                      viewBox="0 0 448 512"
                                      class="size-4"
                                      height="1em"
                                      width="1em"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                          d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"></path>
                                  </svg></a>
                          </div>
                      </div>
                  </div>
                  <div
                      class="w-full grow lg:grow-0 lg:w-1/3 flex justify-start lg:justify-between">
                      <div
                          class="w-full flex justify-between flex-wrap lg:grid lg:grid-cols-3 gap-8 lg:gap-16">
                          <div>
                              <h3 class="font-medium text-base mb-4 capitalize text-muted-foreground/80">
                                  company
                              </h3>

                              <ul class="text-base space-y-2">
                                  <?php foreach ($footer_links as $link): ?>
                                      <li>
                                          <a
                                              href="<?php echo esc_url($link['href']); ?>"
                                              class="text-accent-foreground hover:text-indigo-600 transition-colors hover:underline">
                                              <?php echo esc_html($link['label']); ?>
                                          </a>
                                      </li>
                                  <?php endforeach; ?>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div
                  data-orientation="horizontal"
                  role="none"
                  data-slot="separator"
                  class="shrink-0 data-[orientation=horizontal]:h-px data-[orientation=horizontal]:w-full data-[orientation=vertical]:h-full data-[orientation=vertical]:w-px my-6 bg-border/50"></div>
              <div class="flex flex-col md:flex-row justify-between items-center">
                  <p class="text-muted-foreground text-sm">
                      © 2025 SkillPlus SaaS. All rights reserved.
                  </p>
                  <p class="text-muted-foreground text-sm mt-4 md:mt-0">
                      Product by
                      <a
                          href="https://waveplus.com"
                          target="_blank"
                          rel="noopener noreferrer"
                          class="text-foreground hover:text-indigo-600 hover:underline">Waveplus</a>
                  </p>
              </div>
          </div>
      </footer>
      </div>
      <?php wp_footer(); ?>
      </body>

      </html>