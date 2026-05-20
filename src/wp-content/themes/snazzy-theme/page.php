<?php
/**
 * Generic Page Template
 *
 * This template displays all standard pages by default.
 */
get_header();
?>

<main class="bg-[#F4F6FB] min-h-screen">
    
    <!-- Hero Section (Dark) -->
    <section class="bg-[#0B0F1A] text-white pt-32 pb-48 relative">
        <div class="container mx-auto px-4 lg:px-8 text-center max-w-4xl">
            <h1 class="font-['Syne'] font-extrabold text-4xl md:text-6xl lg:text-[72px] leading-[1.1] tracking-[-1.86px] text-white mb-8">
                <?php the_title(); ?>
            </h1>
        </div>
    </section>

    <!-- Floating Content Card -->
    <section class="relative z-10 -mt-32 mb-20">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-[0_20px_50px_rgba(11,15,26,0.1)] p-8 md:p-14 border border-gray-100">
                
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
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile; 
                        endif;
                    ?>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="container mx-auto px-4 lg:px-8 py-20 border-t border-gray-100 bg-white">
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
