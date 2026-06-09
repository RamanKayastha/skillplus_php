<?php
/**
 * Icon Picker Meta Box — Lucide icon picker
 *
 * Provides a searchable grid of Lucide icons for Features and Industries.
 * Saves the icon name to 'feature_icon' or 'industry_icon' meta key.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * A curated subset of Lucide icon names
 */
function skillplus_lucide_icon_list(): array {
    return [
        // Interface & navigation
        'home', 'menu', 'x', 'search', 'settings', 'sliders-horizontal',
        'chevron-right', 'arrow-right', 'external-link', 'link', 'copy',
        'check', 'check-circle', 'circle', 'info', 'alert-circle',
        'bell', 'bell-ring', 'bookmark', 'star', 'heart', 'thumbs-up',

        // Users & people
        'user', 'users', 'user-check', 'user-plus', 'user-cog',
        'graduation-cap', 'badge', 'award', 'shield', 'shield-check',

        // Learning & content
        'book', 'book-open', 'book-marked', 'library', 'pencil', 'pen-line',
        'file-text', 'file-check', 'file-plus', 'clipboard', 'clipboard-list',
        'clipboard-check', 'notebook', 'scroll-text', 'newspaper',

        // Media
        'video', 'video-off', 'play', 'play-circle', 'mic', 'headphones',
        'image', 'images', 'camera', 'film', 'tv',

        // Data & analytics
        'bar-chart', 'bar-chart-2', 'bar-chart-3', 'line-chart', 'pie-chart',
        'trending-up', 'trending-down', 'activity', 'gauge', 'percent',
        'calculator', 'table', 'database',

        // Communication
        'mail', 'mail-open', 'message-square', 'message-circle',
        'send', 'inbox', 'reply', 'at-sign',

        // Workflow & productivity
        'workflow', 'git-branch', 'layers', 'layout-dashboard',
        'layout-grid', 'grid', 'list', 'list-checks', 'kanban',
        'calendar', 'calendar-check', 'clock', 'timer', 'hourglass',
        'repeat', 'refresh-cw', 'rotate-ccw', 'archive',

        // Tech & integrations
        'code', 'code-2', 'terminal', 'cpu', 'server', 'cloud',
        'cloud-upload', 'cloud-download', 'wifi', 'lock', 'unlock',
        'key', 'fingerprint', 'scan', 'qr-code', 'plug', 'webhook',

        // Business
        'briefcase', 'building', 'building-2', 'landmark', 'receipt',
        'credit-card', 'wallet', 'coins', 'dollar-sign', 'banknote',
        'package', 'truck', 'shopping-cart', 'tag', 'tags',

        // Misc
        'globe', 'map', 'map-pin', 'compass', 'zap', 'flame',
        'lightbulb', 'rocket', 'target', 'flag', 'trophy',
        'puzzle', 'wand-2', 'sparkles', 'brain', 'eye', 'eye-off',
    ];
}

/**
 * Register the meta boxes
 */
add_action( 'add_meta_boxes', function () {
    // For Features
    add_meta_box(
        'skillplus_feature_icon',
        'Feature Icon',
        'skillplus_icon_metabox_html',
        'features',
        'side',
        'high'
    );
    // For Industries
    add_meta_box(
        'skillplus_industry_icon',
        'Industry Icon',
        'skillplus_icon_metabox_html',
        'industries',
        'side',
        'high'
    );
} );

/**
 * Render the meta box HTML
 */
function skillplus_icon_metabox_html( WP_Post $post ): void {
    $post_type = get_post_type($post);
    $meta_key  = ($post_type === 'industries') ? 'industry_icon' : 'feature_icon';
    $saved     = get_post_meta( $post->ID, $meta_key, true ) ?: '';

    // Nonce
    wp_nonce_field( 'skillplus_save_icon_picker', 'skillplus_icon_nonce' );

    $icons = skillplus_lucide_icon_list();
    ?>
    <style>
        #skillplus-icon-picker-wrap { display: flex; flex-direction: column; gap: 8px; }
        #skillplus-icon-search { width: 100%; padding: 6px 8px; border: 1px solid #ddd; border-radius: 4px; font-size: 13px; box-sizing: border-box; }
        #skillplus-icon-preview { display: flex; align-items: center; gap: 8px; padding: 8px; background: #f6f7f7; border: 1px solid #ddd; border-radius: 4px; font-size: 13px; min-height: 40px; }
        #skillplus-icon-preview i[data-lucide] { width: 20px; height: 20px; flex-shrink: 0; }
        #skillplus-icon-preview .sp-preview-name { font-family: monospace; color: #3c3c3c; }
        #skillplus-icon-preview.sp-empty { color: #999; font-style: italic; }
        #skillplus-icon-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 4px; max-height: 280px; overflow-y: auto; border: 1px solid #ddd; border-radius: 4px; padding: 6px; background: #fff; }
        .sp-icon-btn { display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 3px; padding: 6px 2px 4px; border: 1px solid transparent; border-radius: 4px; background: none; cursor: pointer; transition: background 0.15s, border-color 0.15s; font-size: 9px; color: #555; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; width: 100%; }
        .sp-icon-btn:hover { background: #f0f4ff; border-color: #c7d2fe; }
        .sp-icon-btn.sp-selected { background: #eef2ff; border-color: #6366f1; color: #4f46e5; }
        .sp-icon-btn i[data-lucide] { width: 18px; height: 18px; pointer-events: none; }
        .sp-icon-btn .sp-icon-label { font-size: 8.5px; max-width: 100%; overflow: hidden; text-overflow: ellipsis; }
        #skillplus-clear-icon { font-size: 12px; color: #c0392b; background: none; border: none; cursor: pointer; padding: 0; text-decoration: underline; align-self: flex-start; }
    </style>

    <div id="skillplus-icon-picker-wrap">
        <input type="hidden" id="skillplus-icon-input" name="<?php echo esc_attr($meta_key); ?>" value="<?php echo esc_attr( $saved ); ?>">

        <div id="skillplus-icon-preview" class="<?php echo $saved ? '' : 'sp-empty'; ?>">
            <?php if ( $saved ): ?>
                <i data-lucide="<?php echo esc_attr( $saved ); ?>"></i>
                <span class="sp-preview-name"><?php echo esc_html( $saved ); ?></span>
            <?php else: ?>
                No icon selected
            <?php endif; ?>
        </div>

        <input type="text" id="skillplus-icon-search" placeholder="Search icons…" autocomplete="off">

        <div id="skillplus-icon-grid">
            <?php foreach ( $icons as $icon_name ): ?>
            <button type="button" class="sp-icon-btn<?php echo ( $icon_name === $saved ) ? ' sp-selected' : ''; ?>" data-icon="<?php echo esc_attr( $icon_name ); ?>" title="<?php echo esc_attr( $icon_name ); ?>">
                <i data-lucide="<?php echo esc_attr( $icon_name ); ?>"></i>
                <span class="sp-icon-label"><?php echo esc_html( $icon_name ); ?></span>
            </button>
            <?php endforeach; ?>
        </div>

        <button type="button" id="skillplus-clear-icon">✕ Clear icon</button>
    </div>

    <script>
    ( function () {
        function initPicker() {
            if ( typeof lucide === 'undefined' ) return setTimeout( initPicker, 100 );
            lucide.createIcons();

            const input   = document.getElementById( 'skillplus-icon-input' );
            const preview = document.getElementById( 'skillplus-icon-preview' );
            const search  = document.getElementById( 'skillplus-icon-search' );
            const grid    = document.getElementById( 'skillplus-icon-grid' );
            const clear   = document.getElementById( 'skillplus-clear-icon' );

            grid.addEventListener( 'click', function ( e ) {
                const btn = e.target.closest( '.sp-icon-btn' );
                if ( ! btn ) return;
                const name = btn.dataset.icon;
                input.value = name;
                grid.querySelectorAll( '.sp-icon-btn' ).forEach( b => b.classList.remove( 'sp-selected' ) );
                btn.classList.add( 'sp-selected' );
                preview.classList.remove( 'sp-empty' );
                preview.innerHTML = `<i data-lucide="${name}"></i><span class="sp-preview-name">${name}</span>`;
                lucide.createIcons();
            } );

            search.addEventListener( 'input', function () {
                const q = this.value.toLowerCase().trim();
                grid.querySelectorAll( '.sp-icon-btn' ).forEach( btn => {
                    btn.style.display = btn.dataset.icon.includes( q ) ? '' : 'none';
                } );
            } );

            clear.addEventListener( 'click', function () {
                input.value = '';
                grid.querySelectorAll( '.sp-icon-btn' ).forEach( b => b.classList.remove( 'sp-selected' ) );
                preview.classList.add( 'sp-empty' );
                preview.innerHTML = 'No icon selected';
                search.value = '';
                grid.querySelectorAll( '.sp-icon-btn' ).forEach( b => b.style.display = '' );
            } );
        }
        initPicker();
    } )();
    </script>
    <?php
}

/**
 * Enqueue Lucide on the post edit screen
 */
add_action( 'admin_enqueue_scripts', function ( string $hook ) {
    if ( ! in_array( $hook, [ 'post.php', 'post-new.php' ], true ) ) return;
    $screen = get_current_screen();
    if ( ! in_array( $screen->post_type, [ 'features', 'industries' ] ) ) return;

    wp_enqueue_script( 'lucide', 'https://unpkg.com/lucide@latest/dist/umd/lucide.min.js', [], null, true );
} );

/**
 * Save the meta value
 */
add_action( 'save_post', function ( int $post_id ) {
    if ( ! isset( $_POST['skillplus_icon_nonce'] ) || ! wp_verify_nonce( $_POST['skillplus_icon_nonce'], 'skillplus_save_icon_picker' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    
    $post_type = get_post_type($post_id);
    if ( ! in_array($post_type, ['features', 'industries']) ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    $meta_key = ($post_type === 'industries') ? 'industry_icon' : 'feature_icon';

    if ( isset( $_POST[$meta_key] ) ) {
        $icon = sanitize_text_field( $_POST[$meta_key] );
        if ( $icon ) {
            update_post_meta( $post_id, $meta_key, $icon );
        } else {
            delete_post_meta( $post_id, $meta_key );
        }
    }
} );
