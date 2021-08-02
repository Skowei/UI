<!--Modal-->
<div class="overflow-auto fixed inset-0 z-50 w-screen h-screen flex items-center justify-center" style="background-color: rgba(0,0,0,0.5)" x-show="showModal">
    <!--Dialog-->
    <div class="bg-gray-100 dark:bg-gray-900 w-11/12 md:max-w-md mx-auto rounded-xl shadow-lg py-4 text-left px-4" x-show="showModal" @click.away="showModal = false" 
    x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 -x-transition-10 scale-90" x-transition:enter-end="opacity-100 scale-100" 
    x-transition:leave="ease-in duration-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">

        <!--Title-->
        <div class="flex justify-between items-center pb-3">
            {{$head}}
            <div class="cursor-pointer z-50" @click="showModal = false">
                <i class="fas fa-times fill-current"></i>
            </div>
        </div>

        {{$body}}

        <!--Footer-->
        <div class="flex justify-end pt-2 gap-2">
            {{$foot}}
        </div>

    </div>
    <!--/Dialog -->
</div>
<!-- /Modal -->