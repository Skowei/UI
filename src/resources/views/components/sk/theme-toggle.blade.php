<div class="flex" x-data="{ themeMode: localStorage.theme == 'dark' ? true : false }">
    <button {{ $attributes->merge(['class' => 'text-xl relative block h-8 w-8 overflow-hidden shadow focus:outline-none bg-gray-100 dark:bg-gray-900 text-yellow-500 hover:scale-110 transform']) }}"
        onclick="changeTheme()"
        @click="themeMode = !themeMode">
        <i x-show="!themeMode" class="fas fa-sun"></i>
        <i x-show="themeMode" class="fas fa-moon"></i>
    </button>
</div>

<script>
    function changeTheme(){
    if(localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches))
    {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('theme','light');
    } else {
        document.documentElement.classList.add('dark');
        localStorage.setItem('theme','dark');
    }
}
</script>