<?php
/**
 * Template Name: Case Studies Archive
 * 
 * Template for displaying all case studies.
 */
get_header(); ?>

<main class="min-h-screen">
    <!-- Hero Section -->
    <section class="bg-[#0B0F1A] text-white pt-24 pb-20 md:pt-32 md:pb-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-3xl">
                <span class="font-['DM_Sans'] font-bold text-[11px] leading-[18.15px] tracking-[2.2px] uppercase text-[#00D4AA] mb-4 block">Our Work</span>
                <h1 class="font-['Syne'] font-extrabold text-5xl md:text-6xl lg:text-[72px] leading-[1.1] tracking-[-1.86px] text-white mb-6">
                    Case Studies
                </h1>
                <p class="font-['DM_Sans'] font-normal text-[18px] leading-[30px] tracking-[0px] text-[#9BA3C2] max-w-2xl">
                    A look at how we've helped businesses across industries build better digital products and grow online.
                </p>
            </div>
        </div>
    </section>

    <!-- Case Studies Loop Section -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-4 lg:px-8">
            
            <?php
            // Setup the custom WP_Query for the custom post type
            $args = array(
                'post_type'      => 'case_study',
                'posts_per_page' => -1, // -1 gets all records
                'post_status'    => 'publish',
                // You can add pagination or ordering here later if needed
            );
            $case_studies = new WP_Query( $args );

            if ( $case_studies->have_posts() ) : ?>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php while ( $case_studies->have_posts() ) : $case_studies->the_post(); ?>
                        
                        <article class="bg-white rounded overflow-hidden shadow-sm border border-gray-200 hover:shadow-lg transition-all duration-300 group flex flex-col h-full">
                            <!-- Thumbnail -->
                            <div class="aspect-video w-full bg-[#E5E7EB] overflow-hidden relative">
                                <?php 
                                $image_url = snazzy_get_case_study_image_url( get_the_ID() );
                                if ( $image_url ) : ?>
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <?php else : ?>
                                    <!-- Placeholder if no image -->
                                    <div class="w-full h-full flex items-center justify-center text-[#6B7394] font-['DM_Sans'] text-sm bg-gray-100">
                                        No Image Provided
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Content -->
                            <div class="p-8 flex-grow flex flex-col">
                                <!-- Taxonomies: Industry & Technology -->
                                <?php 
                                $industries = get_the_terms( get_the_ID(), 'industry' );
                                $technologies = get_the_terms( get_the_ID(), 'technology' );
                                
                                $all_terms = array();
                                if ( $industries && ! is_wp_error( $industries ) ) {
                                    $all_terms = array_merge($all_terms, wp_list_pluck( $industries, 'name' ));
                                }
                                if ( $technologies && ! is_wp_error( $technologies ) ) {
                                    $all_terms = array_merge($all_terms, wp_list_pluck( $technologies, 'name' ));
                                }

                                if ( ! empty( $all_terms ) ) : 
                                ?>
                                    <div class="flex flex-wrap gap-x-3 gap-y-1 mb-4">
                                        <?php 
                                        $index = 0;
                                        foreach ( $all_terms as $term_name ) : 
                                            // The first item gets the primary teal bg and white text
                                            // The rest get the light blueish bg and grey text
                                            $bg_class = ( $index === 0 ) ? 'bg-[#009B7D]' : 'bg-[#F4F6FB]';
                                            $text_class = ( $index === 0 ) ? 'text-white' : 'text-[#6B7394]';
                                        ?>
                                            <span class="font-['DM_Sans'] font-bold text-[10px] tracking-widest uppercase px-2 py-1 rounded-sm <?php echo $bg_class . ' ' . $text_class; ?>">
                                                <?php echo esc_html( $term_name ); ?>
                                            </span>
                                        <?php 
                                            $index++;
                                        endforeach; 
                                        ?>
                                    </div>
                                <?php endif; ?>

                                <!-- Title -->
                                <h2 class="font-['Syne'] font-bold text-[24px] leading-[1.2] tracking-[-0.48px] text-[#0B0F1A] mb-4">
                                    <a href="<?php the_permalink(); ?>" class="hover:text-[#00D4AA] transition-colors">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                
                                <!-- Excerpt -->
                                <div class="font-['DM_Sans'] font-normal text-[15px] leading-relaxed text-[#6B7394] mb-8 flex-grow">
                                    <?php 
                                    if ( has_excerpt() ) {
                                        echo get_the_excerpt();
                                    } else {
                                        echo wp_trim_words( get_the_content(), 20, '...' );
                                    }
                                    ?>
                                </div>
                                
                                <!-- Link -->
                                <a href="<?php the_permalink(); ?>" class="inline-flex items-center font-['DM_Sans'] font-bold text-[13px] tracking-[0.52px] uppercase text-[#0B0F1A] hover:text-[#00D4AA] transition-colors mt-auto">
                                    Read Case Study &rarr;
                                </a>
                            </div>
                        </article>

                    <?php endwhile; ?>
                </div>

                <?php wp_reset_postdata(); // Important: Restore original Post Data ?>

            <?php else : ?>
                
                <div class="bg-white p-16 text-center rounded border border-gray-200">
                    <p class="font-['DM_Sans'] text-[18px] text-[#6B7394]">No case studies found yet. Create some in the WordPress dashboard!</p>
                </div>

            <?php endif; ?>

        </div>
    </section>
</main>

<?php get_footer(); ?>
