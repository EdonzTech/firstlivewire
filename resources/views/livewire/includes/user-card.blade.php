
        
            <tr wire:key="{{ $user->id }}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$user->name}}</th>
                <td class="px-6 py-4">{{ $user->email }}</td>
            </tr>
        <!-- more rows -->
