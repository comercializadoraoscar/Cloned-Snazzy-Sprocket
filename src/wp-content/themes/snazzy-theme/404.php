<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header();
?>

<main class="bg-[#F4F6FB] min-h-screen">
    
    <!-- Hero Section (Dark) -->
    <section class="bg-[#0B0F1A] text-white pt-32 pb-48 relative">
        <div class="container mx-auto px-4 lg:px-8 text-center max-w-4xl">
            <span class="font-['DM_Sans'] font-bold text-[14px] leading-[18px] tracking-[2.4px] uppercase text-[#00D4AA] mb-4 block">
                Error 404
            </span>
            <h1 class="font-['Syne'] font-extrabold text-[80px] md:text-[120px] leading-[1] tracking-[-2px] text-white mb-6">
                404
            </h1>
        </div>
    </section>

    <!-- Floating Content Card -->
    <section class="relative z-10 -mt-32 mb-20">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-[0_20px_50px_rgba(11,15,26,0.1)] p-12 md:p-16 border border-gray-100 text-center">
                
                <h2 class="font-['Syne'] font-bold text-3xl md:text-4xl text-[#0B0F1A] mb-6">
                    Oops! That page can&rsquo;t be found.
                </h2>
                
                <p class="font-['DM_Sans'] text-[18px] leading-[1.8] text-[#6B7394] mb-10 max-w-xl mx-auto">
                    It looks like nothing was found at this location. The page might have been removed, had its name changed, or is temporarily unavailable.
                </p>

                <div class="flex flex-wrap justify-center gap-4">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="bg-[#00D4AA] text-[#0B0F1A] font-['DM_Sans'] font-bold text-[14px] tracking-[0.5px] uppercase px-8 py-4 rounded-[2px] transition-colors hover:bg-[#0B0F1A] hover:text-[#00D4AA] shadow-lg">
                        &larr; Return to Home
                    </a>
                    <a href="/contact" class="bg-white border border-[#0B0F1A] text-[#0B0F1A] font-['DM_Sans'] font-bold text-[14px] tracking-[0.5px] uppercase px-8 py-4 rounded-[2px] transition-colors hover:bg-[#0B0F1A] hover:text-white">
                        Contact Support
                    </a>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
