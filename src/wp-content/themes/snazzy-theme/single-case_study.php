<?php
/**
 * Single Case Study Template
 *
 * This template displays individual case studies.
 */
get_header();

// Fetch ACF data
$client_name = get_field('client_name');
$project_url = get_field('project_url');

// Fetch Taxonomies
$industries = get_the_terms( get_the_ID(), 'industry' );
$technologies = get_the_terms( get_the_ID(), 'technology' );

// Get Image via our helper function
$image_url = snazzy_get_case_study_image_url( get_the_ID() );
?>

<main class="bg-white min-h-screen">
    
    <!-- Hero Section (Dark) -->
    <section class="bg-[#0B0F1A] text-white pt-32 pb-48 relative">
        <div class="container mx-auto px-4 lg:px-8 text-center max-w-4xl">
            <span class="font-['DM_Sans'] font-bold text-[12px] leading-[18px] tracking-[2.4px] uppercase text-[#00D4AA] mb-6 block">
                Case Study
            </span>
            <h1 class="font-['Syne'] font-extrabold text-4xl md:text-6xl lg:text-[72px] leading-[1.1] tracking-[-1.86px] text-white mb-8">
                <?php the_title(); ?>
            </h1>
            
            <?php if ( has_excerpt() ) : ?>
                <p class="font-['DM_Sans'] font-normal text-[18px] md:text-[22px] leading-[1.6] text-[#9BA3C2] max-w-3xl mx-auto">
                    <?php echo get_the_excerpt(); ?>
                </p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Floating Overview Card -->
    <section class="relative z-10 -mt-24 mb-20">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-[0_20px_50px_rgba(11,15,26,0.1)] p-6 md:p-10 lg:p-14 border border-gray-100">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
                    
                    <!-- Featured Image (Contained & Proportional) -->
                    <?php if ( $image_url ) : ?>
                        <div class="w-full rounded-xl overflow-hidden border border-gray-100 shadow-sm bg-gray-50 flex items-center justify-center">
                            <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-auto max-h-[600px] object-cover">
                        </div>
                    <?php else : ?>
                        <div class="w-full rounded-xl border border-gray-100 bg-gray-50 flex items-center justify-center h-64">
                            <span class="font-['DM_Sans'] text-gray-400">No image available</span>
                        </div>
                    <?php endif; ?>

                    <!-- Project Details -->
                    <div class="flex flex-col space-y-10">
                        
                        <!-- Client -->
                        <?php if ( $client_name ) : ?>
                        <div>
                            <h3 class="font-['Syne'] font-bold text-[22px] text-[#0B0F1A] mb-3">Client</h3>
                            <p class="font-['DM_Sans'] text-[18px] text-[#6B7394]"><?php echo esc_html( $client_name ); ?></p>
                        </div>
                        <?php endif; ?>

                        <!-- Industry -->
                        <?php if ( $industries && ! is_wp_error( $industries ) ) : ?>
                        <div>
                            <h3 class="font-['Syne'] font-bold text-[22px] text-[#0B0F1A] mb-4">Industry</h3>
                            <div class="flex flex-wrap gap-3">
                                <?php foreach ( $industries as $industry ) : ?>
                                    <span class="inline-flex items-center justify-center font-['DM_Sans'] font-medium text-[14px] text-[#009B7D] bg-[#E6F7F4] px-5 py-2.5 rounded-full whitespace-nowrap">
                                        <?php echo esc_html( $industry->name ); ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Technologies -->
                        <?php if ( $technologies && ! is_wp_error( $technologies ) ) : ?>
                        <div>
                            <h3 class="font-['Syne'] font-bold text-[22px] text-[#0B0F1A] mb-4">Technologies Used</h3>
                            <div class="flex flex-wrap gap-3">
                                <?php foreach ( $technologies as $tech ) : ?>
                                    <span class="inline-flex items-center justify-center font-['DM_Sans'] font-medium text-[14px] text-[#009B7D] bg-[#E6F7F4] px-5 py-2.5 rounded-full whitespace-nowrap">
                                        <?php echo esc_html( $tech->name ); ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Live URL -->
                        <?php if ( $project_url ) : ?>
                        <div class="pt-4">
                            <a href="<?php echo esc_url( $project_url ); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center bg-[#0B0F1A] text-white font-['DM_Sans'] font-bold text-[14px] tracking-[1px] uppercase px-8 py-4 rounded-full transition-all duration-300 hover:bg-[#00D4AA] hover:text-[#0B0F1A] hover:shadow-lg">
                                Visit Live Website
                                <svg class="w-4 h-4 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Area -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <!-- Inline styles for standard Gutenberg Blocks inside content -->
                <style>
                    .wp-content-wrapper {
                        font-family: 'DM_Sans', sans-serif;
                        color: #6B7394;
                        font-size: 18px;
                        line-height: 1.8;
                    }
                    .wp-content-wrapper h2, 
                    .wp-content-wrapper h3, 
                    .wp-content-wrapper h4 {
                        font-family: 'Syne', sans-serif;
                        font-weight: 700;
                        color: #0B0F1A;
                        margin-top: 3rem;
                        margin-bottom: 1.25rem;
                        line-height: 1.3;
                    }
                    .wp-content-wrapper h2 { font-size: 2.25rem; }
                    .wp-content-wrapper h3 { font-size: 1.75rem; }
                    .wp-content-wrapper p {
                        margin-bottom: 1.5rem;
                    }
                    .wp-content-wrapper ul {
                        list-style-type: disc;
                        padding-left: 1.5rem;
                        margin-bottom: 1.5rem;
                    }
                    .wp-content-wrapper li {
                        margin-bottom: 0.5rem;
                    }
                    .wp-content-wrapper a {
                        color: #009B7D;
                        text-decoration: underline;
                        font-weight: 700;
                        transition: color 0.3s ease;
                    }
                    .wp-content-wrapper a:hover {
                        color: #00D4AA;
                    }
                    .wp-content-wrapper blockquote {
                        border-left: 4px solid #00D4AA;
                        font-style: italic;
                        color: #0B0F1A;
                        margin: 2.5rem 0;
                        background: #F4F6FB;
                        padding: 1.5rem 2rem;
                        border-radius: 4px;
                        font-size: 1.1rem;
                    }
                    .wp-content-wrapper blockquote p:last-child {
                        margin-bottom: 0;
                    }
                    .wp-content-wrapper img, 
                    .wp-content-wrapper figure {
                        border-radius: 8px;
                        margin: 3rem 0;
                        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
                        width: 100%;
                        height: auto;
                    }
                </style>

                <div class="wp-content-wrapper">
                    <?php 
                        while ( have_posts() ) : the_post();
                            the_content();
                        endwhile; 
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="container mx-auto px-4 lg:px-8 py-20 border-t border-gray-100">
        <div class="bg-[#111827] text-center py-24 px-4 rounded-[4px] shadow-2xl relative overflow-hidden">
            <!-- Decorative circle -->
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 rounded-full bg-[#00D4AA] opacity-10 blur-3xl"></div>
            
            <h2 class="font-['Syne'] font-extrabold text-[36px] md:text-[44px] leading-[1.1] tracking-[-0.72px] text-white text-center mb-6 relative z-10">
                Ready to build something similar?
            </h2>
            <p class="font-['DM_Sans'] font-normal text-[16px] md:text-[18px] leading-[1.6] text-[#9BA3C2] text-center mb-10 max-w-xl mx-auto relative z-10">
                Let's discuss your goals and how we can engineer a high-performance solution for your business.
            </p>
            <a href="/contact" class="inline-block relative z-10 bg-[#00D4AA] text-[#0B0F1A] font-['DM_Sans'] font-bold text-[13px] leading-[21.45px] tracking-[0.39px] uppercase px-8 py-4 rounded-[2px] transition-colors hover:bg-white hover:text-[#0B0F1A] shadow-lg">
                START A CONVERSATION &rarr;
            </a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
