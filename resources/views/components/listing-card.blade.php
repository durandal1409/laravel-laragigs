@props(['listing'])
<x-card>
    <h2><a href='/listings/{{$listing['id']}}'>{{$listing['title']}}</a></h2>
    <x-listing-tags :tagsCsv="$listing->tags" />
    <p>{{$listing['description']}}</p>

</x-card>