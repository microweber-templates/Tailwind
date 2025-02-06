

<footer class="bg-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <module type="logo" id="footer-logo" template="footer-logo" />
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="edit mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                        Resources
                    </h2>
                    <module type="menu" template="footer" name="footer_resources" />
                </div>
                <div>
                    <h2 class="edit mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                        Company
                    </h2>
                    <module type="menu" template="footer" name="footer_company" />
                </div>
                <div>
                    <h2 class="edit mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                        Legal
                    </h2>
                    <module type="menu" template="footer" name="footer_legal" />
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
              © <?php print date('Y'); ?> {!! powered_by_link() !!} - All rights reserved
          </span>
            <module type="social_links" template="footer" />
        </div>
    </div>
</footer>
