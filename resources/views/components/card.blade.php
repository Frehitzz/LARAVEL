{{-- TO CHANGE THE STYLE IN EACH PAGES --}}
{{-- ATTRIBUTE MERGING --}}
<div {{ $attributes->merge(["class" => "card"]) }}>
    {{ $slot }}
</div>

{{--
    TO HAVE A ONE DEFAULT STYLE IN EACH PAGES
    <div class="bg-red-400">
    {{$slot}}
    </div>
--}}
