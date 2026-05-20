<?php
/**
 * Template for the Homepage (front-page.php)
 */
get_header(); ?>

<main>

    <section class="bg-[#111827] text-white pt-24 pb-20 md:pt-32 md:pb-32">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                
                <div class="max-w-xl px-6 md:px-0">
                    <span class="font-['DM_Sans'] font-semibold text-[12px] leading-[19.8px] tracking-[1.8px] uppercase text-[#00D4AA] mb-4 block">
                        Award-winning digital agency
                    </span>
                    <h1 class="font-['Syne'] font-extrabold text-[62px] leading-[65.1px] tracking-[-1.86px] text-white mb-6">
                        We engineer websites that <span class="text-[#00D4AA]">drive results</span>
                    </h1>
                    <p class="font-['DM_Sans'] font-normal text-[17px] leading-[29.75px] tracking-[0px] text-[#9BA3C2] mb-10">
                        Snazzy Sprocket crafts high-performance digital experiences for ambitious brands. Strategy, design, and engineering — all under one roof.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#featured-work" class="bg-[#00D4AA] text-[#0B0F1A] font-['DM_Sans'] font-bold text-[13px] leading-[21.45px] tracking-[0.52px] uppercase px-6 py-2 rounded-[2px] transition-colors border border-gray-800 hover:bg-[#0B0F1A] hover:text-[#00D4AA] flex items-center">
                            VIEW OUR WORK &rarr;
                        </a>
                        <a href="/contact" class="border border-gray-600 text-[#9BA3C2] font-['DM_Sans'] font-bold text-[13px] leading-[21.45px] tracking-[0.52px] capitalize px-6 py-2 rounded-[2px] transition-colors hover:border-[#00D4AA] hover:text-[#00D4AA]">
                            Start a Project
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4 w-[80%] mx-auto max-w-[380px]">
                    <div class="bg-[#1F2937] p-8 rounded border border-gray-800">
                        <h3 class="font-['Syne'] font-extrabold text-[36px] leading-[59.4px] tracking-[-0.72px] text-white mb-1">120+</h3>
                        <p class="font-['DM_Sans'] font-medium text-[13px] leading-[21.45px] tracking-[0px] text-[#6B7394]">Projects delivered</p>
                    </div>
                    <div class="bg-[#1F2937] p-8 rounded border border-gray-800">
                        <h3 class="font-['Syne'] font-extrabold text-[36px] leading-[59.4px] tracking-[-0.72px] text-white mb-1">98%</h3>
                        <p class="font-['DM_Sans'] font-medium text-[13px] leading-[21.45px] tracking-[0px] text-[#6B7394]">Client satisfaction</p>
                    </div>
                    <div class="bg-[#1F2937] p-8 rounded border border-gray-800">
                        <h3 class="font-['Syne'] font-extrabold text-[36px] leading-[59.4px] tracking-[-0.72px] text-white mb-1">8 yrs</h3>
                        <p class="font-['DM_Sans'] font-medium text-[13px] leading-[21.45px] tracking-[0px] text-[#6B7394]">In business</p>
                    </div>
                    <div class="bg-[#1F2937] p-8 rounded border border-gray-800">
                        <h3 class="font-['Syne'] font-extrabold text-[36px] leading-[59.4px] tracking-[-0.72px] text-white mb-1">15</h3>
                        <p class="font-['DM_Sans'] font-medium text-[13px] leading-[21.45px] tracking-[0px] text-[#6B7394]">Industry awards</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-white py-24">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-3xl mb-16">
                <span class="font-['DM_Sans'] font-bold text-[11px] leading-[18.15px] tracking-[2.2px] uppercase text-[#009B7D] mb-4 block">What we do</span>
                <h2 class="font-['Syne'] font-extrabold text-[44px] leading-[48.4px] tracking-[-1.32px] text-[#0B0F1A] mb-6">Services built for growth</h2>
                <p class="font-['DM_Sans'] font-normal text-[16px] leading-[28px] tracking-[0px] text-[#6B7394]">From concept to launch and beyond, we deliver end-to-end digital solutions that move the needle.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 border-t border-l border-gray-200">
                <div class="p-8 border-r border-b border-gray-200 hover:bg-gray-50 transition duration-300 group">
                    <span class="text-gray-300 font-mono text-sm mb-4 block group-hover:text-[#009B7D] transition">01</span>
                    <h3 class="font-['Syne'] font-bold text-[20px] leading-[22px] tracking-[-0.4px] text-[#0B0F1A] mb-3">UX & UI Design</h3>
                    <p class="font-['DM_Sans'] font-normal text-[14px] leading-[23.8px] tracking-[0px] text-[#6B7394]">Research-driven design systems that balance aesthetics with usability. We create interfaces people actually enjoy using.</p>
                </div>
                <div class="p-8 border-r border-b border-gray-200 hover:bg-gray-50 transition duration-300 group">
                    <span class="text-gray-300 font-mono text-sm mb-4 block group-hover:text-[#009B7D] transition">02</span>
                    <h3 class="font-['Syne'] font-bold text-[20px] leading-[22px] tracking-[-0.4px] text-[#0B0F1A] mb-3">Custom Development</h3>
                    <p class="font-['DM_Sans'] font-normal text-[14px] leading-[23.8px] tracking-[0px] text-[#6B7394]">Bespoke WordPress themes and applications built for performance, scalability, and long-term maintainability.</p>
                </div>
                <div class="p-8 border-r border-b border-gray-200 hover:bg-gray-50 transition duration-300 group">
                    <span class="text-gray-300 font-mono text-sm mb-4 block group-hover:text-[#009B7D] transition">03</span>
                    <h3 class="font-['Syne'] font-bold text-[20px] leading-[22px] tracking-[-0.4px] text-[#0B0F1A] mb-3">SEO & Strategy</h3>
                    <p class="font-['DM_Sans'] font-normal text-[14px] leading-[23.8px] tracking-[0px] text-[#6B7394]">Data-backed strategies that improve visibility and convert visitors. Semantic markup and technical SEO baked in from day one.</p>
                </div>
                <div class="p-8 border-r border-b border-gray-200 hover:bg-gray-50 transition duration-300 group">
                    <span class="text-gray-300 font-mono text-sm mb-4 block group-hover:text-[#009B7D] transition">04</span>
                    <h3 class="font-['Syne'] font-bold text-[20px] leading-[22px] tracking-[-0.4px] text-[#0B0F1A] mb-3">Managed Hosting</h3>
                    <p class="font-['DM_Sans'] font-normal text-[14px] leading-[23.8px] tracking-[0px] text-[#6B7394]">Enterprise-grade hosting, security monitoring, and ongoing maintenance so you can focus on running your business.</p>
                </div>
                <div class="p-8 border-r border-b border-gray-200 hover:bg-gray-50 transition duration-300 group">
                    <span class="text-gray-300 font-mono text-sm mb-4 block group-hover:text-[#009B7D] transition">05</span>
                    <h3 class="font-['Syne'] font-bold text-[20px] leading-[22px] tracking-[-0.4px] text-[#0B0F1A] mb-3">Responsive Engineering</h3>
                    <p class="font-['DM_Sans'] font-normal text-[14px] leading-[23.8px] tracking-[0px] text-[#6B7394]">Every pixel considered across every breakpoint. Mobile-first development that performs at any screen size.</p>
                </div>
                <div class="p-8 border-r border-b border-gray-200 hover:bg-gray-50 transition duration-300 group">
                    <span class="text-gray-300 font-mono text-sm mb-4 block group-hover:text-[#009B7D] transition">06</span>
                    <h3 class="font-['Syne'] font-bold text-[20px] leading-[22px] tracking-[-0.4px] text-[#0B0F1A] mb-3">Accessibility</h3>
                    <p class="font-['DM_Sans'] font-normal text-[14px] leading-[23.8px] tracking-[0px] text-[#6B7394]">WCAG 2.1 AA compliance built into every project. Inclusive design isn't an afterthought — it's how we work.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="featured-work" class="bg-gray-50 py-24">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="font-['DM_Sans'] font-bold text-[11px] leading-[18.15px] tracking-[2.2px] uppercase text-[#009B7D] mb-4 block text-center">Featured Work</span>
                <h2 class="font-['Syne'] font-extrabold text-[44px] leading-[48.4px] tracking-[-1.32px] text-[#0B0F1A] mb-6 text-center">Case studies that speak for themselves</h2>
                <p class="font-['DM_Sans'] font-normal text-[16px] leading-[28px] tracking-[0px] text-[#6B7394] text-center">A selection of recent projects where strategy met execution — and the results exceeded expectations.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <?php
                // Query the latest 3 Case Studies
                $featured_work = new WP_Query(array(
                    'post_type'      => 'case_study',
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                ));

                if ($featured_work->have_posts()) :
                    while ($featured_work->have_posts()) : $featured_work->the_post(); 
                        
                        // Fetch the taxonomies to display as tags (like "HEALTHCARE", "WORDPRESS")
                        $industries = get_the_terms(get_the_ID(), 'industry');
                        $technologies = get_the_terms(get_the_ID(), 'technology');
                        ?>

                        <article class="group cursor-pointer">
                            <div class="aspect-[4/3] bg-gray-800 mb-6 overflow-hidden">
                                <?php 
                                $image_url = snazzy_get_case_study_image_url( get_the_ID() );
                                if ( $image_url ) : ?>
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                <?php else: ?>
                                    <div class="w-full h-full flex items-center justify-center text-gray-500 font-mono text-sm">Project Image - 800 x 600</div>
                                <?php endif; ?>
                            </div>

                            <div>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <?php 
                                    // Display Taxonomy Tags dynamically
                                    if ($industries) {
                                        echo '<span class="bg-teal-50 text-teal-700 text-xs font-bold px-2 py-1 uppercase tracking-wider">' . esc_html($industries[0]->name) . '</span>';
                                    }
                                    if ($technologies) {
                                        echo '<span class="bg-gray-100 text-gray-600 text-xs font-bold px-2 py-1 uppercase tracking-wider">' . esc_html($technologies[0]->name) . '</span>';
                                    }
                                    ?>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3"><?php the_title(); ?></h3>
                                <div class="text-gray-600 mb-4 line-clamp-2">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="text-teal-600 font-bold uppercase tracking-widest text-sm hover:text-teal-800 transition">
                                    Read Case Study &rarr;
                                </a>
                            </div>
                        </article>

                    <?php 
                    endwhile;
                    wp_reset_postdata();
                else : 
                    echo '<p class="text-center text-gray-500 w-full col-span-3">Please add some Case Studies in the WP Admin.</p>';
                endif;
                ?>
            </div>

            <div class="text-center mt-12">
                <a href="<?php echo esc_url(get_post_type_archive_link('case_study')); ?>" class="inline-block border-2 border-gray-900 text-gray-900 font-bold px-8 py-4 hover:bg-gray-900 hover:text-white transition duration-300">
                    VIEW ALL CASE STUDIES &rarr;
                </a>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-4 lg:px-8 py-20">
        <div class="bg-[#111827] text-center py-24 px-4 rounded-lg shadow-2xl">
            <h2 class="font-['Syne'] font-extrabold text-[36px] leading-[39.6px] tracking-[-0.72px] text-white text-center mb-4">Ready to build something great?</h2>
            <p class="font-['DM_Sans'] font-normal text-[16px] leading-[26.4px] tracking-[0px] text-[#6B7394] text-center mb-10">Let's talk about your next project. We're here to help you ship faster and smarter.</p>
            <a href="/contact" class="inline-block bg-[#00D4AA] text-[#0B0F1A] font-['DM_Sans'] font-bold text-[13px] leading-[21.45px] tracking-[0.39px] uppercase px-8 py-4 rounded-[2px] transition-colors hover:bg-[#0B0F1A] hover:text-[#00D4AA]">
                START A CONVERSATION &rarr;
            </a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
