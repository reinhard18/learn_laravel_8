{{-- @if (5 < 4)
    <p> 5 is lower than 10 </p>
@elseif (5 == 10) <p> 5 is indeed lower than 10 </p>
@else
    <p>All conditions are wrong</p>
@endif

@unless(empty($name))
    <h2>Name isn't empty</h2>
@endunless

@if (!empty($name))
    <h2>Name isn't empty</h2>
@endif

@isset($name)
    <h2>Name has been set</h2>
@endisset --}}

<!--
    Comparing multiple possible
    Multiple values that may require the same code
-->

{{-- @switch($name)
    @case('Dary')

        <h4>Name is Dary</h4>

    @break

    @case('David')

        <h4>Name is David</h4>

    @break
    @default
        <h2>No match found</h2>

@endswitch --}}

<!--
    For loop
    Foreach loop
    For else loop
    While loop

-->
{{-- @for ($i = 0; $i <= 10; $i++)
    <h2> The number is {{ $i }} </h2>
@endfor

@foreach ($names as $name)
    <h2>The Name is {{ $name }}</h2>

@endforeach

@forelse ($names as $name)
    <h2>The name is {{ $name }}</h2>
@empty
    <h2>There are no names!</h2>
@endforelse

{{ $i = 0 }}
@while ($i < 10)
    <h2> {{ $i }}</h2>

    {{ $i++ }}
@endwhile --}}


<h3>{{ $number }}</h3>
<p>{{ $names }}</p>
