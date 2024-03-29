@extends('layouts.frontend') {{-- Use your app's main layout --}}

@section('frontend')
<div class="container mx-auto p-4">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-2">@lang('profile.user_profile')</h2>
        <div class=" flex flex-wrap gap-6 pb-4">
            <p class="bg-gray-100 rounded-full px-3 py-1 text-gray-700 "><b>@lang('profile.name'): </b> <span class="font-medium">{{ $user->name ?? '' }} {{ $user->father_name ?? '' }} {{ $user->mother_name ?? '' }} {{ $user->surname ?? '' }}</span></p>
            <p class="bg-gray-100 rounded-full px-3 py-1 text-gray-700 "><b>@lang('profile.email'): </b> <span class="font-medium">{{ $user->email }}</span></p>
            <p class="bg-gray-100 rounded-full px-3 py-1 text-gray-700 "><b>@lang('profile.contact_number'): </b>{{$user->mobile_number?? ''}}</p>
            <p class="bg-gray-100 rounded-full px-3 py-1 text-gray-700 "><b>@lang('profile.address'): </b>{{$user->address?? ''}}, {{$user->city?? ''}}, {{$user->state?? ''}} </p>
            <p class="bg-gray-100 rounded-full px-3 py-1 text-gray-700 "><b>@lang('profile.aadhaar_number'): </b>{{$user->aadhaar_number?? ''}}</p>
            <p class="bg-gray-100 rounded-full px-3 py-1 text-gray-700 "><b>@lang('profile.pancard_number'): </b>{{$user->pancard_number?? ''}}</p>
        </div>
        <a class="px-6 py-2 bg-blue-500 text-white font-semibold flex w-fit my-10 rounded-full hover:scale-105" href="/profile-update">@lang('profile.update_profile')</a>

        <div class="mt-6">
            <h3 class="text-xl font-semibold mb-4">@lang('profile.your_firs')</h3>
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-4 py-2 text-left">@lang('profile.complainant_name')</th>
                            <th class="px-4 py-2 text-left">@lang('profile.complainant_id')</th>
                            <th class="px-4 py-2 text-left">@lang('profile.contact_number')</th>
                            <th class="px-4 py-2 text-left">@lang('profile.incident_date')</th>
                            <th class="px-4 py-2 text-left">@lang('profile.accused_name')</th>
                            <th class="px-4 py-2 text-left">@lang('profile.status')</th>
                            <th class="px-4 py-2 text-left">@lang('profile.current_status')</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($firs as $fir)
                        <tr class="border-b">
                            <td class="px-4 py-2">{{ $fir->complainant_name }}</td>
                            <td class="px-4 py-2">{{ $fir->receipt}}</td>
                            <td class="px-4 py-2">{{ $fir->contact_number }}</td>
                            <td class="px-4 py-2">{{ $fir->incident_date }}</td>
                            <td class="px-4 py-2">{{ $fir->accused_name }}</td>
                            <td class="px-4 py-2">{{ $fir->status }}</td>
                            <td class="px-4 py-2 capitalize bg-blue-100">{{ $fir->current_status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
