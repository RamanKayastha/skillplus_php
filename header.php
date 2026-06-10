<?php

$nav_items = array(
  array('label' => 'Home', 'href' => home_url('/'), 'active' => is_front_page() || is_home()),
  array('label' => 'About', 'href' => home_url('/about/'), 'active' => is_page('about')),
  array('label' => 'Contact', 'href' => home_url('/contact/'), 'active' => is_page('contact')),
  array('label' => 'Features', 'href' => home_url('/services/'), 'active' => is_page('services')),
  array('label' => 'Industry', 'href' => home_url('/industry/'), 'active' => is_page('industry')),
);
?>
<!doctype html>
<html <?php language_attributes(); ?> class="h-full">

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="preload" as="image" href="https://skillplus.dev/wp-content/uploads/2026/01/dashb.png" />
  <script>
    (() => {
      const theme = localStorage.getItem("skillplus-theme");
      const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
      document.documentElement.classList.toggle("dark", theme ? theme === "dark" : prefersDark);
    })();
  </script>
  <?php wp_head(); ?>
</head>

<body <?php body_class('antialiased text-base text-foreground bg-background'); ?>>
  <?php wp_body_open(); ?>
  <div class="min-h-screen">
    <header class="fixed top-0 left-0 right-0 z-40 transition-all duration-300 bg-transparent">
      <div class="container mx-auto px-6 py-4 flex items-center justify-between">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center gap-2 leading-none" aria-label="<?php esc_attr_e('SkillPlus home', 'skillplus'); ?>">
          <span class="text-2xl font-bold bg-linear-to-r from-indigo-700 dark:from-indigo-400 to-indigo-400 dark:to-indigo-300 bg-clip-text text-transparent">SkillPlus</span>
        </a>

        <div class="flex items-center gap-2.5">
          <nav class="hidden md:flex items-center space-x-8" aria-label="<?php esc_attr_e('Primary navigation', 'skillplus'); ?>">
            <?php foreach ($nav_items as $item) : ?>
              <a href="<?php echo esc_url($item['href']); ?>" class="cursor-pointer transition-colors relative group text-base <?php echo $item['active'] ? 'text-indigo-600 dark:text-indigo-400' : 'text-accent-foreground hover:text-indigo-600 dark:hover:text-indigo-400'; ?>">
                <?php echo esc_html($item['label']); ?>
                <span class="abolute -bottom-1 left-0 h-0.5 bg-indigo-600 dark:bg-indigo-400 transition-all <?php echo $item['active'] ? 'w-full' : 'w-0 group-hover:w-full'; ?>"></span>
              </a>
            <?php endforeach; ?>

            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all bg-primary text-primary-foreground shadow-xs hover:bg-primary/90 h-9 px-4 py-2">
              <?php esc_html_e('Get Started', 'skillplus'); ?>
            </a>
          </nav>

          <div class="md:hidden flex items-center space-x-4">
            <button id="mobile-menu-trigger" type="button" class="inline-flex items-center justify-center rounded-md size-9 cursor-pointer text-muted-foreground transition-colors hover:bg-transparent hover:text-foreground" aria-controls="mobile-menu" aria-expanded="false" aria-label="<?php esc_attr_e('Open menu', 'skillplus'); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4" aria-hidden="true">
                <path d="M4 12h16"></path>
                <path d="M4 18h16"></path>
                <path d="M4 6h16"></path>
              </svg>
            </button>

            <div id="mobile-menu-overlay" class="fixed inset-0 z-40 bg-black/40 opacity-0 pointer-events-none transition-opacity duration-300"></div>
            <div id="mobile-menu" class="fixed inset-x-0 bottom-0 z-50 rounded-t-2xl border border-border bg-background px-6 pt-6 pb-8 shadow-lg translate-y-full transition-all duration-300 pointer-events-none opacity-0">
              <div class="flex items-center justify-between">
                <span class="text-lg font-semibold"><?php esc_html_e('Menu', 'skillplus'); ?></span>
                <button id="mobile-menu-close" type="button" class="inline-flex items-center justify-center rounded-md size-9 text-muted-foreground transition-colors hover:bg-accent hover:text-foreground" aria-label="<?php esc_attr_e('Close menu', 'skillplus'); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-5" aria-hidden="true">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                  </svg>
                </button>
              </div>

              <nav class="flex flex-col space-y-4 mt-6" aria-label="<?php esc_attr_e('Mobile navigation', 'skillplus'); ?>">
                <?php foreach ($nav_items as $item) : ?>
                  <a href="<?php echo esc_url($item['href']); ?>" class="inline-flex w-full justify-start rounded-md px-4 py-2 transition-colors hover:text-indigo-600 dark:hover:text-indigo-400 <?php echo $item['active'] ? 'text-indigo-600 dark:text-indigo-400 font-medium' : 'text-accent-foreground'; ?>">
                    <?php echo esc_html($item['label']); ?>
                  </a>
                <?php endforeach; ?>

                <div class="pt-4">
                  <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="relative cursor-pointer group transition-all animate-rainbow inline-flex items-center justify-center gap-2 shrink-0 outline-none focus-visible:ring-[3px] text-sm font-medium whitespace-nowrap border-0 bg-[linear-gradient(#121213,#121213),linear-gradient(#121213_50%,rgba(18,18,19,0.6)_80%,rgba(18,18,19,0)),linear-gradient(90deg,var(--color-1),var(--color-5),var(--color-3),var(--color-4),var(--color-2))] bg-size-[200%] text-primary-foreground [background-clip:padding-box,border-box,border-box] bg-origin-border [border:calc(0.125rem)_solid_transparent] before:absolute before:bottom-[-20%] before:left-1/2 before:z-0 before:h-1/5 before:w-3/5 before:-translate-x-1/2 before:animate-rainbow before:bg-[linear-gradient(90deg,var(--color-1),var(--color-5),var(--color-3),var(--color-4),var(--color-2))] before:filter-[blur(0.75rem)] dark:bg-[linear-gradient(#fff,#fff),linear-gradient(#fff_50%,rgba(255,255,255,0.6)_80%,rgba(0,0,0,0)),linear-gradient(90deg,var(--color-1),var(--color-5),var(--color-3),var(--color-4),var(--color-2))] h-9 px-4 rounded-md py-2 w-full">
                    <?php esc_html_e('Get Started', 'skillplus'); ?>
                  </a>
                </div>
              </nav>
            </div>
          </div>

          <button id="theme-toggle" type="button" class="inline-flex items-center justify-center rounded-md size-9 cursor-pointer text-muted-foreground transition-colors hover:bg-transparent hover:text-foreground" aria-label="<?php esc_attr_e('Toggle color theme', 'skillplus'); ?>">
            <svg data-theme-icon="moon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 dark:hidden" aria-hidden="true">
              <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
            </svg>
            <svg data-theme-icon="sun" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden size-4 dark:block" aria-hidden="true">
              <circle cx="12" cy="12" r="4"></circle>
              <path d="M12 2v2"></path>
              <path d="M12 20v2"></path>
              <path d="m4.93 4.93 1.41 1.41"></path>
              <path d="m17.66 17.66 1.41 1.41"></path>
              <path d="M2 12h2"></path>
              <path d="M20 12h2"></path>
              <path d="m6.34 17.66-1.41 1.41"></path>
              <path d="m19.07 4.93-1.41 1.41"></path>
            </svg>
          </button>
        </div>
      </div>
    </header>