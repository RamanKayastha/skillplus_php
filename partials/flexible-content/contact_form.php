      <!-- Contact Form -->
      <section
          id="contactm"
          class="py-24 bg-zinc-50 dark:bg-zinc-950 border-b border-border/50">
          <div class="container mx-auto px-6">
              <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                  <div class="space-y-8">
                      <div>
                          <h3
                              class="text-2xl font-semibold mb-6 text-gray-900 dark:text-gray-100">
                              <?php the_sub_field('form_title'); ?>
                          </h3>
                          <p class="text-muted-foreground mb-8">
                              <?php the_sub_field('form_description'); ?>
                          </p>
                      </div>
                      <div class="space-y-6">
                          <div class="flex items-start gap-4">
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  stroke="currentColor"
                                  stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  class="lucide lucide-mail size-4 text-muted-foreground mt-1"
                                  aria-hidden="true">
                                  <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                  <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                              </svg>
                              <div>
                                  <h4 class="font-semibold text-foreground mb-1">Email</h4>
                                  <a
                                      class="text-muted-foreground hover:text-purple-500 whitespace-pre-line"
                                      href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
                              </div>
                          </div>
                          <div class="flex items-start gap-4">
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  stroke="currentColor"
                                  stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  class="lucide lucide-phone size-4 text-muted-foreground mt-1"
                                  aria-hidden="true">
                                  <path
                                      d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path>
                              </svg>
                              <div>
                                  <h4 class="font-semibold text-foreground mb-1">Phone</h4>
                                  <p class="text-muted-foreground whitespace-pre-line">
                                      <?php the_field('phone', 'option'); ?>
                                  </p>
                              </div>
                          </div>
                          <div class="flex items-start gap-4">
                              <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  stroke="currentColor"
                                  stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  class="lucide lucide-map-pin size-4 text-muted-foreground mt-1"
                                  aria-hidden="true">
                                  <path
                                      d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                                  <circle cx="12" cy="10" r="3"></circle>
                              </svg>
                              <div>
                                  <h4 class="font-semibold text-foreground mb-1">
                                      <?php the_field('location', 'option'); ?>
                                  </h4>
                                  <p class="text-muted-foreground whitespace-pre-line">
                                      <?php the_field('opening_hour', 'option'); ?>
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div>
                      <div
                          data-slot="card"
                          class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm border-border/50">
                          <div data-slot="card-content" class="p-8">
                              <form class="space-y-6">
                                  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                      <div data-slot="form-item" class="grid gap-2">
                                          <label
                                              data-slot="form-label"
                                              class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50 data-[error=true]:text-destructive"
                                              data-error="false"
                                              for="_R_16klfivb_-form-item">Name</label><input
                                              data-slot="form-control"
                                              class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                                              placeholder="Your name"
                                              id="_R_16klfivb_-form-item"
                                              aria-describedby="_R_16klfivb_-form-item-description"
                                              aria-invalid="false"
                                              name="name"
                                              value="" />
                                      </div>
                                      <div data-slot="form-item" class="grid gap-2">
                                          <label
                                              data-slot="form-label"
                                              class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50 data-[error=true]:text-destructive"
                                              data-error="false"
                                              for="_R_26klfivb_-form-item">Email</label><input
                                              type="email"
                                              data-slot="form-control"
                                              class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                                              placeholder="your@email.com"
                                              id="_R_26klfivb_-form-item"
                                              aria-describedby="_R_26klfivb_-form-item-description"
                                              aria-invalid="false"
                                              name="email"
                                              value="" />
                                      </div>
                                  </div>
                                  <div data-slot="form-item" class="grid gap-2">
                                      <label
                                          data-slot="form-label"
                                          class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50 data-[error=true]:text-destructive"
                                          data-error="false"
                                          for="_R_aklfivb_-form-item">Subject</label><input
                                          data-slot="form-control"
                                          class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                                          placeholder="What&#x27;s this about?"
                                          id="_R_aklfivb_-form-item"
                                          aria-describedby="_R_aklfivb_-form-item-description"
                                          aria-invalid="false"
                                          name="subject"
                                          value="" />
                                  </div>
                                  <div data-slot="form-item" class="grid gap-2">
                                      <label
                                          data-slot="form-label"
                                          class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50 data-[error=true]:text-destructive"
                                          data-error="false"
                                          for="_R_eklfivb_-form-item">Message</label><textarea
                                          data-slot="form-control"
                                          class="border-input placeholder:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 flex field-sizing-content w-full rounded-md border bg-transparent px-3 py-2 text-base shadow-xs transition-[color,box-shadow] outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 md:text-sm min-h-[120px]"
                                          placeholder="Tell us more about your project or question..."
                                          name="message"
                                          id="_R_eklfivb_-form-item"
                                          aria-describedby="_R_eklfivb_-form-item-description"
                                          aria-invalid="false"></textarea>
                                  </div>
                                  <button
                                      data-slot="button"
                                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-10 rounded-md px-6 has-[&gt;svg]:px-4 w-full"
                                      type="submit">
                                      Send Message
                                  </button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>