@props(['collection', 'print' => [], 'head' => [], 'body' => [], 'show' => '', 'edit' => '', 'delete' => '', 'pagination' => false])
@php 
    if(!empty($print))
    {
        $head = $print;
        $body = $print;
    }
    $options = $show || $edit || $delete ? true : false;
@endphp
<div class="min-w-full shadow sm:rounded-lg border-b border-gray-200 dark:border-black overflow-auto md:overflow-visible">
    <table class="min-w-full rounded-xl table-fixed">
        <thead class="">
            <tr class="">
                @for ($i = 0; $i < count($head); $i++)
                    <th class="px-6 py-3 border-b border-gray-200 dark:border-gray-800 bg-white dark:bg-black opacity-100 dark:opacity-75 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider first:rounded-tl-lg last:rounded-tr-lg">
                        {{ $head[$i] }}</th>
                @endfor
                
                @if($options)
                    <th class="w-4 px-6 py-3 border-b border-gray-200 dark:border-gray-800 bg-white dark:bg-black opacity-100 dark:opacity-75 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider first:rounded-tl-lg last:rounded-tr-lg">
                        {{ __('#') }}</th>
                @endif
            </tr>
        </thead>

        <tbody>
            @forelse($collection as $item)
            <tr>
                @for ($i = 0; $i < count($body); $i++)
                    <td class="px-6 py-4 whitespace-no-wrap border-b bg-gray-100 dark:bg-gray-900 border-gray-200 dark:border-gray-800 text-sm leading-5 text-gray-500 @if(!$pagination && $loop->last) first:rounded-bl-lg last:rounded-br-lg @endif">
                        @if(strpos($item->{$body[$i]}, 'fa') !== false)
                            <div class="w-7 text-center"><i class="{{ $item->{$body[$i]} }}"></i></div>
                        @else 
                            @if( is_null($item->{$body[$i]}) )
                                {{ __('-') }}
                            @else
                                {{ $item->{$body[$i]} }}
                            @endif 
                        @endif
                    </td>
                @endfor
                @if($options)
                <td class="px-4 py-4 whitespace-no-wrap text-right border-b bg-gray-100 dark:bg-gray-900 border-gray-200 dark:border-gray-800 text-sm leading-5 font-medium @if(!$pagination && $loop->last) first:rounded-bl-lg last:rounded-br-lg @endif">
                    <x-dropdown class="w-auto float-right" width="24">
                        <x-slot name="trigger">
                            <button class="text-center text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                                <i class="fas fa-ellipsis-v px-2"></i>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            @if($show)
                            <x-dropdown-link :href="route($show, $item)">
                                <div class="flex items-center justify-start text-green-400 dark:text-green-500">
                                    <i class="fas fa-eye center w-4 mr-3"></i>
                                    {{ __('Show') }}
                                </div>
                            </x-dropdown-link>
                            @endif
                            @if($edit)
                            <x-dropdown-link :href="route($edit, $item)">
                                <div class="flex items-center justify-start text-blue-400 dark:text-blue-500">
                                    <div class="text-center w-4 mr-3">
                                        <i class="fas fa-edit"></i>
                                    </div>
                                    {{ __('Edit') }}
                                </div>
                            </x-dropdown-link>
                            @endif
                            @if($delete)
                            <!-- Authentication -->
                            <form action="{{ Route($delete, $item) }}" method="POST" id="frm-delete-{{$item->id}}">
                                @csrf
                                @method('delete')
        
                                <x-dropdown-link :href="route('logout')"
                                        onclick="confirm('Confirm Deletion.');
                                        event.preventDefault();
                                        document.getElementById('frm-delete-{{$item->id}}').submit();">
                                        <div class="flex items-center justify-start text-red-400 dark:text-red-500">
                                            <div class="text-center w-4 mr-3">
                                                <i class="fas fa-trash"></i>
                                            </div>
                                            {{ __('Delete') }}
                                        </div>
                                </x-dropdown-link>
                            </form>
                            @endif
                        </x-slot>
                    </x-dropdown>
                </td>
                @endif
            </tr>
            @empty

            @endforelse
        </tbody>
        @if($pagination)
        <tfoot>
            <tr>
                <td class="bg-gray-100 dark:bg-gray-900 pl-6 pagination first:rounded-bl-lg last:rounded-br-lg" colspan={{ $options ? count($body) + 1 : count($body)}}>
                    {{$collection->links()}}
                </td>
            </tr>
        </tfoot>
        @endif
    </table>
</div>